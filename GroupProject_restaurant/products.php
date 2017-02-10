<?php
  include ('includes/navigation.php');
 ?>
 <div class="banner-text">

         <ul class="slides">
             <li>
                 <h2>AMAZING  </h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipi est Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias phasellus mattis tellus .</p>
                 <a href="" class="more scroll"><span class="btn btn-default" data-toggle="modal" data-target="#cart">Open Shooping Cart</span></a>
         </ul>

 </div>

</div>
  <!-- Banner Section
  ================================= -->
  <!-- <div id="checkoutdiv">
      <div> Subtotal <span class="items"></span> item(s): <span class="total"></span></div>
      <div> <span class="btn btn-success" data-toggle="modal" data-target="#cart">View Shopping Cart</span> <span class="btn btn-primary">Proceed to Checkout</span></div>

  </div> -->

  <!-- Body Section & products Section
  ================================= -->
  <div class="special-w3">
			<div class="container">
				<h3 class="tittle1">Special Menu</h3>
				<div class="special-grids">

          <!-- product 1 -->
					<div class="col-md-4 menu-grid">
						<div class="menu1">
							<img src="images/menu/m1.jpg" class="img-responsive gray" alt=""/>
						</div>
						<div class="menu-bottom">
							<h4 id="titleHead1"></h4>
							<p id="description"></p>
              $<span id="price1">$2.0</span>
							<a href="#" onclick="sweet()"class="button productItem hvr-sweep-to-bottom" data-name="Fried Chicken" data-s="Normal" data-price="50000" data-id="1">Add to Cart
                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
						</div>
					</div>

          <!-- product 2 -->
					<div class="col-md-4 menu-grid">
						<div class="menu1">
							<img src="images/menu/m2.jpg" class="img-responsive gray" alt=""/>
						</div>
						<div class="menu-bottom">
							<h4 id="titleHead2"></h4>
							<p id="description"></p>
              $<span id="price2">$2.0</span>
							<a href="#" onclick="sweet()"class="button productItem hvr-sweep-to-bottom" data-name="Sandwich" data-s="Bread" data-price="30000" data-id="2">Add to Cart
                </a>
						</div>
					</div>

          <!-- product 3 -->
					<div class="col-md-4 menu-grid">
						<div class="menu1">
							<img src="images/menu/m3.jpg" class="img-responsive gray" alt=""/>
						</div>
						<div class="menu-bottom">
							<h4 id="titleHead3"></h4>
							<p id="description"></p>
              $<span id="price3">$2.0</span>
							<a href="#" onclick="sweet()"class="button productItem hvr-sweep-to-bottom" data-name="Goat Cheese" data-s="Italian" data-price="30000" data-id="3">Add to Cart
                </a>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>

        <div class="special-grids">

          <!-- product 4 -->
					<div class="col-md-4 menu-grid">
						<div class="menu1">
							<img src="images/menu/m4.jpg" class="img-responsive gray" alt=""/>
						</div>
						<div class="menu-bottom">
							<h4 id="titleHead4"></h4>
							<p id="description"></p>
              $<span id="price4">$2.0</span>
							<a href="#" onclick="sweet()"class="button productItem hvr-sweep-to-bottom" data-name="Seafood" data-s="Fish" data-price="30000" data-id="4">Add to Cart
                </a>
						</div>
					</div>

          <!-- product 5 -->
					<div class="col-md-4 menu-grid">
						<div class="menu1">
							<img src="images/menu/m5.jpg" class="img-responsive gray" alt=""/>
						</div>
						<div class="menu-bottom">
							<h4 id="titleHead5"></h4>
							<p id="description"></p>
              $<span id="price5">$2.0</span>
							<a href="#" onclick="sweet()"class="button productItem hvr-sweep-to-bottom" data-name="Grill Chicken" data-s="Grill" data-price="30000" data-id="5">Add to Cart
                </a>
						</div>
					</div>

          <!-- product 6 -->
					<div class="col-md-4 menu-grid">
						<div class="menu1">
							<img src="images/menu/m6.jpg" class="img-responsive gray" alt=""/>
						</div>
						<div class="menu-bottom">
							<h4 id="titleHead6"></h4>
							<p id="description"></p>
              $<span id="price6">$2.0</span>
							<a href="#" onclick="sweet()"class="button productItem hvr-sweep-to-bottom" data-name="Pasta Food" data-s="Pasta" data-price="30000" data-id="6">Add to Cart
                </a>
						</div>
					</div>

			</div>
		</div>
</div>

  <!-- Footer Section
  ================================= -->



  <!-- Modal section
  ================================= -->
  <!-- Modals -->
    <div class="modal fade" id="cart" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Shopping Cart</h4></div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Qty</th>
                                <th>Item Name</th>
                                <th>Cost</th>
                                <th class="text-xs-right">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody id="output"> </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Continue Shopping</button>
                    <a href="checkout.php" class="btn btn-primary">Proceed to checkout</a></div>
            </div>
        </div>
    </div>


<?php
  include ('includes/footer.php')
?>
