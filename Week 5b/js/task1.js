window.onload = function() {
    
    var weather = {
      render: function(){
        var bangkok = document.getElementById("bangkok");
          bangkok.addEventListener("click", function() {
              var weatherBangkok = 'http://api.openweathermap.org/data/2.5/weather?q=bangkok&appid=55d193b8cc97a9dfba634b0c0297f27a';
              $.ajax( {
                  type: "GET",
                  url: weatherBangkok,
                  success: function(data) {
                      
                      console.log(data);
                  }
              });
          });
      }  
    };
    weather.render();
    
};