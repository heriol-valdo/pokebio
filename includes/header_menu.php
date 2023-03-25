

<!--Navigation bar start-->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color: white;">
            <div class="container">
                    <a href="index.php" class="navbar-brand" style="font-family: 'Delius Swash Caps'"><img src="images/logo.png" alt="logo de l'entreprise" style="width:60px; height:60px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon" style="background-color:rgba(0, 0, 0, 1.0);"></span>
                    </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link" style="color:black; font-family: 'poppins';" >Home</a></li>
                       <li class="nav-item dropdown">
                           <a href="" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown"
style="color:black;" 
                              >
                               Products
                            </a>
                               <div class="dropdown-menu">
                                   <a href="products.php#watch" class="dropdown-item" style="color:black; font-family: 'poppins';" >poké bowl saumon</a>
                                   <a href="products.php#shirt" class="dropdown-item" style="color:black;font-family: 'poppins';" >poké bowl vegan</a>
                                   <a href="products.php#shoes" class="dropdown-item" style="color:black;font-family: 'poppins';" >poké bowl poulet</a>
                                   <a href="products.php#headphones" class="dropdown-item" style="color:black;font-family: 'poppins';" >poké bowl asiatique</a>
                               </div>
                           
                       </li>
                       
                       <li class="nav-item"><a href="about.php" class="nav-link" style="color:black;font-family: 'poppins';" >About Us</a></li>
                        <li class="nav-item"><a href="ddiv.php" class="nav-link"style="color:black;font-family: 'poppins';" >play</a></li>

                       <?php
                       if (isset($_SESSION['email'])) {
                        ?>
                        
                       <li class="nav-item" >

                         
                       
                           
                       </li>

                      
                       <?php
                          } 
                    ?>
                    </ul>
                    
                    <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <ul class="nav navbar-nav ml-auto" style="color:black;">
                        <li class="nav-item"><a href="cart.php" class="nav-link" style="color:black;" >
                       <i class="fa fa-shopping-cart" aria-hiden="true"></i>
                       </a>
                      </li>
                       <li class="nav-item" style="color:black;font-family: 'poppins';"><a href="logout_script.php" class="nav-link" style="color:black; font-family: 'poppins';"><i class="fa fa-sign-out" style="color:black;" ></i style="color:black;font-family: 'poppins';">Logout</a></li>
                       <li class="nav-item"><a href="profil.php"  class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle " style="color:black;"></i></a></li>
                    </ul>
                    <?php
                } else {
                    ?>
                    <ul class="nav navbar-nav ml-auto">
                       <li class="nav-item "><a href="#signup" class="nav-link"data-toggle="modal" style="color:black;" ><i class="fa fa-user" style="color:black;" ></i style="color:black;font-family: 'poppins';" > sign In</a></li>
                       <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal" style="color:black;" ><i class="fa fa-sign-in" style="color:black;font-family: 'poppins';" ></i> Login</a></li>
                    </ul>
                    <?php 
                }
                    ?>
                    </div>
                </div>
            </div>
        </nav>
    <!--navigation bar end-->
    <!--Login trigger Modal-->
    <div class="modal fade" id="login" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title" style="font-family: 'poppins';">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="login_script.php" method="post">
                 <div class="form-group">
                     <label for="email" style="font-family: 'poppins';">Email address:</label>
                     <input type="email" class="form-control"  name="lemail" placeholder="Enter email" required
                     style="font-family: 'poppins';">
                </div>
                <div class="form-group">
                    <label for="pwd" style="font-family: 'poppins';">Password:</label>
                    <input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Password" required style="font-family: 'poppins';">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input">
                    <label for="checkbox" class="form-check-label" style="font-family: 'poppins';">Check me out</label>
                </div>
                <button type="submit" class="btn btn-secondary btn-block" name="Submit" style="font-family: 'poppins';">Login</button>
              </form>
              <a href="reset.php" style="font-family: 'poppins';">forgot password ?</a>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">New User? <a href="#signup" data-toggle="modal" data-dismiss="modal" style="font-family: 'poppins';">signup</a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-family: 'poppins';">Close</button>
            </div>
          </div>
        </div>
      </div>
    <!--Login trigger Model ends-->
    <!--Signup model start-->
    <div class="modal fade" id="signup">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title" style="font-family: 'poppins';">Sign Up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="signup_script.php" method="post">
                <div class="form-group">
                     <label for="email" style="font-family: 'poppins';">Email address:</label>
                     <input type="email" class="form-control"  name="eMail" placeholder="Enter email" required>
                     <?php if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}  ?>
                </div>
                <div class="form-group">
                    <label for="pwd" style="font-family: 'poppins';">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validation1" style="font-family: 'poppins';">First Name</label>
                        <input type="text" class="form-control" id="validation1" name="firstName" placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md -6">
                        <label for="validation2" style="font-family: 'poppins';">Last Name</label>
                        <input type="text" class="form-control" id="validation2" name="lastName" placeholder="Last Name">
                    </div>
                </div>
                
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" required>
                    <label for="checkbox" class="form-check-label" style="font-family: 'poppins';">Agree terms and Condition</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="Submit" style="font-family: 'poppins';">Sign Up</button>
              </form>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">Already Registered?<a href="#login"  data-toggle="modal" data-dismiss="modal" style="font-family: 'poppins';">Login</a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-family: 'poppins';" >Close</button>
            </div>
          </div>
        </div>
      </div>
      <!--Signup trigger model ends-->