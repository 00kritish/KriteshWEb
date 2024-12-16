<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";  // replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Handle the image upload
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Proceed if no errors occurred
    if ($uploadOk == 1) {
        // Set the target directory and file path
        $targetDir = "uploads/products";  // Ensure this directory exists and is writable
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Insert data into the database, storing the file path
            $stmt = $conn->prepare("INSERT INTO products (productName, price, image) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $price, $targetFile);

            if ($stmt->execute()) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Sorry, your file was not uploaded due to errors.";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Item</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="price">Price:</label>
        <input type="text" name="price" required><br>
        <label for="image">Select Image:</label>
        <input type="file" name="image" required><br>
        <input type="submit" value="Upload Item">
    </form>
</body>
</html>
