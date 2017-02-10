<!-- Footer Section
=================== -->
<!-- footer -->
<footer class="footer text-center">
    <div class="footer-top">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 text-center">
                <div class="widget">
                    <h4 class="widget-title">Mustang</h4>
                    <address>Stamford<br> address, DL 110013</address>
                    <div class="social-list">
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </div>
                    <p class="copyright clear-float">
                        &copy; Mustang. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->




<!-- jquery & javascript  -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/products.js"></script>
<!--custom Javascript and jQuery to handle adding products to cart -->
<script>
var shopcart = [];
  $(document).ready(function () {

    //Calling function outputCart()
    outputCart();
    $(".productItem").click(function (e) {
      e.preventDefault(); // removes the default html for buttons and link

      var iteminfo = $(this.dataset)[0];
      iteminfo.qty =1;

      //set default item in cart to be false, to be turned true in a condition if there are items in cart
      var itemincart = false;
      $.each(shopcart, function (index, value) {
        if (value.id == iteminfo.id){
          value.qty = parseInt(value.qty) + parseInt(iteminfo.qty);
          itemincart = true;
        }
      })
      if(!itemincart) {
        shopcart.push(iteminfo);
      }
      sessionStorage["sca"] = JSON.stringify(shopcart);
      outputCart();

    })

    // outputcart function

    function outputCart() {
      if (sessionStorage["sca"] != null) {
        shopcart = JSON.parse(sessionStorage["sca"].toString());
        console.log(sessionStorage["sca"]);
        $("#checkoutdiv").show();
      }

      var holderHTML = '';
      var total = 0;
      var itemCnt = 0;
      $.each(shopcart, function (index, value) {
        console.log(value);
        var stotal = value.qty * value.price;
        total += stotal;
        itemCnt += parseInt(value.qty);
        holderHTML += '<tr><td>' + value.qty + '</td><td>#' + value.id + ' ' + value.name + '(' + value.s + ')</td><td> ' + formatMoney(value.price) + ' </td><td class="text-xs-right"> ' + formatMoney(stotal) + '</td></tr>';
      })

      holderHTML += '<div>' + formatMoney(total) + '</div>';
      $('#output').html(holderHTML);
      $('.total').html(formatMoney(total));
      $('.items').html(itemCnt);
    }

    //function to make the amount into dollars with2 deciaml places
    function formatMoney(n) {
        return '$' + (n / 100).toFixed(2);
    }

  })


</script>

</body>
</html>