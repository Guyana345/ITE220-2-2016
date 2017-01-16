window.onload = function() {
    

var bangkok = document.getElementById("bangkok").addEventListener("click", function(){
    bangkok.render();
    });
    
var london  = document.getElementById("london").addEventListener("click", function(){
    london.render();
    });
    
var seoul   = document.getElementById("seoul").addEventListener("click", function(){
    seoul.render();
    });
  
/* ================== Function to Call bangkok ========= */
var bangkok = {
render: function() {
           	 
           	 $.ajax({ 
           	 	type: "GET",
           	 	url : "http://api.openweathermap.org/data/2.5/weather?q=bangkok&appid=55d193b8cc97a9dfba634b0c0297f27a",
           	 	success: function(data) {
//           	 		console.log(data);
           	 		

                //data.name --> city name
                  var city = document.getElementById("cityname");
                    city.textContent = data.name;

                //data.weather[0].icon ---> 02d
                var icon = document.getElementById("icon");
                    icon.src = "http://openweathermap.org/img/w/"+data.weather[0].icon+".png";

                var description = document.getElementById("description");
                  description.textContent = data.weather[0].description;

                var temp = document.getElementById("temp");
                  temp.textContent = data.main.temp; 

           	 	}

           	 });

           
		}

	};
    
    /* ================== Function to Call London ========= */
var london = {
render: function() {
           	 
           	 $.ajax({ 
           	 	type: "GET",
           	 	url : "http://api.openweathermap.org/data/2.5/weather?q=london&appid=55d193b8cc97a9dfba634b0c0297f27a",
           	 	success: function(data) {
//           	 		console.log(data);
           	 		

                //data.name --> city name
                  var city = document.getElementById("cityname");
                    city.textContent = data.name;

                //data.weather[0].icon ---> 02d
                var icon = document.getElementById("icon");
                    icon.src = "http://openweathermap.org/img/w/"+data.weather[0].icon+".png";

                var description = document.getElementById("description");
                  description.textContent = data.weather[0].description;

                var temp = document.getElementById("temp");
                  temp.textContent = data.main.temp; 

           	 	}

           	 });

           
		}

	};
    
/* ================== Function to Call Seoul ========= */
var seoul = {
render: function() {
           	 
           	 $.ajax({ 
           	 	type: "GET",
           	 	url : "http://api.openweathermap.org/data/2.5/weather?q=seoul&appid=55d193b8cc97a9dfba634b0c0297f27a",
           	 	success: function(data) {
//           	 		console.log(data);
           	 		

                //data.name --> city name
                  var city = document.getElementById("cityname");
                    city.textContent = data.name;

                //data.weather[0].icon ---> 02d
                var icon = document.getElementById("icon");
                    icon.src = "http://openweathermap.org/img/w/"+data.weather[0].icon+".png";

                var description = document.getElementById("description");
                  description.textContent = data.weather[0].description;

                var temp = document.getElementById("temp");
                  temp.textContent = data.main.temp; 

           	 	}

           	 });
		}

	};

    
};