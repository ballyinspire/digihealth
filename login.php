<?php include_once("header.php")?>
  

   <?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['txtemail']);
      $mypassword = mysqli_real_escape_string($db,$_POST['txtpassword']); 
      
      $sql = "SELECT * FROM Registration WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
         
         header("location: Users/user.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
  
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Login</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
                     
           
            <div class="pt-5 mt-5">
             
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h4 font-weight-bold">Login</h3>
                <form action="" method="post" class="p-5 bg-light">
                  
				  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" name="txtemail" id="txtemail" required="">
                  </div>
                  <div class="form-group">
                    <label for="name">Password *</label>
                    <input type="password" class="form-control" name="txtpassword" id="txtpassword" required="">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Login" class="btn py-3 px-4 btn-primary">
					<label> If you don't have a account click on creat an account to creat account <a href="signup.php"> Create an account</a></label>
                  </div>
				  
                </form>
              </div>
            </div>
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
              <h3>Popular Articles</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- END COL -->
        </div>
			</div>
		</section>    

<?php include_once("footer.php")?>    