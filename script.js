const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click', function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
});

signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})

// Calculate subtotal based on quantity changes
const updateCartTotal = () => {
    let cartRows = document.querySelectorAll("#cart tbody tr");
    let total = 0;

    cartRows.forEach(row => {
        let price = parseFloat(row.querySelector(".product-price").textContent.replace("$", ""));
        let quantity = parseInt(row.querySelector(".product-quantity input").value);
        let subTotal = price * quantity;
        row.querySelector(".product-subtotal").textContent = `$${subTotal.toFixed(2)}`;
        total += subTotal;
    });

    document.querySelector("#subtotal td strong").textContent = `$${total.toFixed(2)}`;
};

// Add event listeners to quantity inputs
document.querySelectorAll(".product-quantity input").forEach(input => {
    input.addEventListener("change", updateCartTotal);
});

// Function to remove a product from the cart
const removeProduct = (event) => {
    let row = event.target.closest("tr");
    row.remove();
    updateCartTotal();
};

// Add event listeners to remove buttons
document.querySelectorAll(".remove-btn").forEach(button => {
    button.addEventListener("click", removeProduct);
});
