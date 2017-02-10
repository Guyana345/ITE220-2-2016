<?php include "includes/db.php";?>
<?php include "includes/navigation.php";?>


<div class="banner-text">

         <ul class="slides">
             <li>
                 <h3>Be A Member</h3>
                 <p id="menuDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
         </ul>

 </div>

</div>
			<div class="container">
				<div class="row">
					<div class="wrap-login col-md-4 col-md-offset-4">
						<h1 class="text-center" style="margin-bottom:30px;">Sign up</h1>

					<form action="signup.php" method="POST">


							  <div class="form-group">
							    <label>Enter Firstname</label>
							    <input type="text" class="form-control" id="addfirstname" placeholder="Firstname" name="firstname"/>
							  </div>


						 <div class="form-group">
							    <label>Enter Username</label>
							    <input type="text" class="form-control" id="addUsername" placeholder="Username" name="username"/>
							  </div>

							  <div class="form-group">
							    <label>Enter Password</label>
							    <input type="password" class="form-control" id="addPassword" placeholder="Password" name="password"/>
							  </div>

							  	<input class="btn btn-primary btn-block" type="submit" name="insert_post" value="Sign up">
							  </div>



					</form>

			</div>
		</div>
	</div>

<?php include "includes/footer.php";     ?>
<?php
 if (isset($_POST['insert_post'])) {


 	$user_user = $_POST['username'];
 	$user_pass = $_POST['password'];
 	$user_firstname = $_POST['firstname'];
 	$userpwd_encrypt = md5($user_pass);
 	$insert_info = "insert into users (USERNAME,PASSWORD,FIRSTNAME) values ('$user_user', '$userpwd_encrypt','$user_firstname')";

 	 $insert_user = mysqli_query($con, $insert_info);
 	 if ($insert_user) {
        echo "<script>alert('You have been signed up!')</script>";
        echo "<script>window.open('signup.php', '_self')</script>";
    }
 }
?>


