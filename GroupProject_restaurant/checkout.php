<?php
  include ('includes/navigation.php')
?>


  <!-- Banner Section
  ================================= -->

  <!-- Body Section & products Section
  ================================= -->
  <div class="banner-text">

          <ul class="slides">
              <li>
                  <h2>Review Order</h2>
                  <p style="font-size: 30px;">Please Review Your Order Before you proceed to checkout</p>
              </li>
          </ul>
  </div>
</div>
  <div class="container">
    <h2 class="agile-title" style="margin-bottom: 20px; font-size:40px;">Order Summary</h2>
    <!-- form to submit the checkout items to PayPal -->
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

           <input type="hidden" name="cmd" value="_cart">
           <input type="hidden" name="upload" value="1">
           <input type="hidden" name="business" value="seller@mustangRestaurant.com">

           <table class="table table-hover">
               <thead >
                   <tr class="info">
                       <th>Qty</th>
                       <th>Item Name</th>
                       <th>Cost</th>
                       <th class="text-xs-right">Subtotal</th>
                   </tr>
               </thead>
               <tbody id="output"> </tbody>
           </table>
           <input type="submit" class="btn btn-primary" value="Checkout with PayPal"> <a href="products.php" class="btn btn-success">Continue Shopping</a>
       </form>
  </div>


  <!-- Footer Section
  ================================= -->
<?php
  include ('includes/order.php');
?>
