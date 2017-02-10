var price = "10";
var quantity = 2;
var discount = 0;





var shop = {
    customerName: "Taf",
    totalPrice: 0,
    products: [
        "Brooklyn T-Shirt White",
        "Brooklyn T-Shirt Black",
        "Apple Watch",
        "Android Phone"
    ],
    prices: [10, 10, 199, 159],
    
    // display customer name function
    
    displayCustomerName: function() {
    var customerElement = document.getElementById("customer-name");
    customerElement.textContent = this.customerName;
    },
    
    // display customer name function
    displayCustomerList: function() {
        var productsText = "";
        var productsElement = document.getElementById("product-list");
        
        for ( var i = 0 ; i < shop.products.length; i++){
    productsText += "<li class='list-group-item'><span class='badge'>$" + shop.prices[i] + "</span>" + shop.products[i] + "</li>";
        };
        
    productsElement.innerHTML = productsText;
    },
    
    // calculate total price function
    
    calculateTotalPrice: function() {
        return (this.prices[0] + this.prices[1] + this.prices[2] + this.prices[3] ) * 0.75;
    },
    
    // display total price function
    
    displayTotalPrice: function() {
        this.totalPrice = this.calculateTotalPrice();
        var totalPriceElement = document.getElementById("total-price");
        totalPriceElement.textContent = this.calculateTotalPrice();
    }
   
} 

// call functions to display
shop.displayCustomerName();
shop.displayCustomerList();
shop.displayTotalPrice();


// greetings if statement: 'Good Morning, Good Afternoon, Good Evening
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




    
    
    
    



