var data = [
  {

  },
  {
    "name" : "Fried Chicken",
    "price" : "12.00",
    "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
  },
  {
    "name" : "Sandwich",
    "price" : "12.00",
    "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
  },
  {
    "name" : "Goat Cheese",
    "price" : "18.00",
    "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
  },
  {
    "name" : "Seafood",
    "price" : "12.00",
    "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
  },
  {
    "name" : "Grill Chicken",
    "price" : "12.00",
    "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
  },
  {
    "name" : "Pasta Foods",
    "price" : "16.00",
    "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
  },

];


// process(data);

  function displayHead(){

      document.getElementById('titleHead1').innerHTML = data[1].name;
      document.getElementById('titleHead2').innerHTML = data[2].name;
      document.getElementById('titleHead3').innerHTML = data[3].name;
      document.getElementById('titleHead4').innerHTML = data[4].name;
      document.getElementById('titleHead5').innerHTML = data[5].name;
      document.getElementById('titleHead6').innerHTML = data[6].name;

  }

  function displayPrice(){
    document.getElementById('price1').innerHTML = data[1].price;
    document.getElementById('price2').innerHTML = data[2].price;
    document.getElementById('price3').innerHTML = data[3].price;
    document.getElementById('price4').innerHTML = data[4].price;
    document.getElementById('price5').innerHTML = data[5].price;
    document.getElementById('price6').innerHTML = data[6].price;
  }

  function displayDesc(){
  }

  displayHead();
  displayPrice();
