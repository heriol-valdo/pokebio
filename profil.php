<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>POKE BIO| Poke Bio online shopping site</title>
  <link rel="shortcut icon" href="images/logo.png" type="image">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=poppins' rel='stylesheet'>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:150px;">
  <?php
        include 'includes/header_menu.php';
    ?>

    

   <div style="margin-top:10%;"></div> 
     
  <div>
    <div class="container mt-5 " style="margin-top:250px;">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title" style="font-family: 'poppins';">My Profil</h3>
          <hr />
           <img
            src="images/logo.png" alt="logo de l'entreprise"
            class="img-fluid d-block rounded mx-auto image-thumbnail" style="height: 150px;width: 150px;">
          
           
          <p class="mt-2" style="font-family: 'poppins';">
            

      
        <h1><?php echo $_SESSION['first']; ?>  <?php echo $_SESSION['last']; ?> </h1>
         <div style="margin-top:2%"></div>
        <p>Email : <?php echo $_SESSION["email"]; ?></p>
        <div>
        <div style="margin-top:2%"></div>
           <p>Points de fidélité </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
              
            </div>
          </div>
        </div>
 

           

          <div style="margin-top:3%"></div>
        <div class="btn-group mr-2" role="group" aria-label="Plats favoris">
          <button class="btn btn-outline-primary">
                 <i class="fa fa-star" aria-hidden="true"></i> Favoris
                </button>
         </div>
            <div style="margin-top:2%"></div>
          <div class="btn-group mr-2" role="group" aria-label="Modes de paiement">
          <button class="btn btn-primary">Mes commandes</button>
          </div>

           <div style="margin-top:2%"></div>

           <div class="btn-group mr-2" role="group" aria-label="Modes de paiement">
          <table class="table table-striped table-bordered table-hover ">
                    <?php
$sum = 0;
$user_id = $_SESSION['user_id'];
$query = " SELECT products.price AS Price, products.id, products.name AS Name FROM users_products JOIN products ON users_products.item_id = products.id WHERE users_products.user_id='$user_id' and status='Added To Cart'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) >= 1) {
    ?>
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name Product</th>
                                <th>Price</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                                <?php
while ($row = mysqli_fetch_array($result)) {
        $sum += $row["Price"];
        $id = $row["id"] . ", ";
        echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Eu " . $row["Price"];
    }
    $id = rtrim($id, ", ");
    
 

    

    ?>
                            </tbody>
                            <?php
} else {
    echo "<div> <img src='images/emptycart.png' class='image-fluid' height='40' width='40'></div><br/>";
    echo "<div class='text-bold  h5'>aucune commande en cours!<div>";

}
?>
                        <?php
?>
                        </tbody>
                    </table>
          </div>


          
         
          <div style="margin:auto; width:500px;">
                <div class=" col-md-6  my-5 ">
                   
                </div>
            
        </div>
          </div>


       
      </div>
    </div>
  </p>

        
        </div>
        
      </div>
    </div>
  </div>
  
  


  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>


 function wellcom() {

    Swal.fire(`thanks for this`, '', 'success')
 }


function resetAbout(){
 var email = document.getElementById("email").value="";
 var message = document.getElementById("message").value="";
}




  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
