var customerName = "Taf";
var price = "10";
var quantity = 2;
var totalPrice = 0;
var discount = 0;

var customerElement = document.getElementById("sp");
customerElement.textContent = customerName;
var prizeElement = document.getElementById("dollar");
prizeElement.textContent = totalPrice;

var products = [
    "Brooklyn T-Shirt White",
    "Brooklyn T-Shirt Black",
    "Apple Watch",
    "Android Phone"
];

var prices = [10, 10, 199, 159];

var productsText = "";
var productsElement = document.getElementById("product-list");


for ( var i = 0 ; i < products.length; i++){
    productsText += "<li class='list-group-item'><span class='badge'>$" + prices[i] + "</span>" + products[i] + "</li>";
}


productsElement.innerHTML = productsText;


totalPrice = prices[0] + prices[1] + prices[2] + prices[3];
discount = totalPrice * 0.25;

var discountPrice = totalPrice - discount;
var totalPriceElement = document.getElementById("dollar");
totalPriceElement.textContent = discountPrice;


var date = new Date().getHours();


if ( date >=6 && date <=11 ){
    text = "Good Morning!";
    
} else if (date >= 12 && date <= 18){
    text = "Good Afternoon";
} else {
    text = "Good Evening";
}

var greeting = document.getElementById("text");
greeting.textContent = text;



    
    
    
    



