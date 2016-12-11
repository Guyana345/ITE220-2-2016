var customerName = "Taf";
var price = "10";
var quantity = 2;
var totalPrice = price * quantity;

var customerElement = document.getElementById("sp");
customerElement.textContent = customerName;
var prizeElement = document.getElementById("dollar");
prizeElement.textContent = totalPrice;
