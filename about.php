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
        <?php
       if (isset($_SESSION['about'])) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"
        style="width:300px; margin:auto;">
  <strong>Thanks</strong> for this message.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
 unset($_SESSION['about']);

       ?>
       <div onload='wellcom()'></div>
          <?php
              }  
          ?>
  <div>
    <div class="container mt-5 " style="margin-top:250px;">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title" style="font-family: 'poppins';">Who We Are ?</h3>
          <hr />
           <img
            src="images/logo.png" alt="logo de l'entreprise"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          
           
          <p class="mt-2" style="font-family: 'poppins';">Isabelle and Laurent are lovers of Paris and cooks by profession. After working in several restaurants, they decided to set up on their own to offer a range of products respecting their eco-responsible values, local consumption and organics.
          In order to limit both material and personal costs, they decided to open a Dark Kitchen concept in the heart of Pris in the 6th arrondissement with only Poké Bowls on the menu whose ingredients are entirely organic and from eco-friendly sectors. responsible and local to the extent possible.</p>

        
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title" style="font-family: 'poppins';">Near you</h1>
            <h3>Open 7/7 days  365 days a year  </h3>
          </span>
          <hr>
          <p>
            <table>
              <th style="font-family: 'poppins';">Address</th>
              <tr>
                 <td style="font-family: 'poppins';">
                 75 rue vincent Fayo
                 </td>
                 <td style="font-family: 'poppins';">
                   Paris 6 (75006)
                 </td>
              </tr>
             
            </table>

             <hr />
            <table>
              <th class="title" style="font-family: 'poppins';">Horaires</th>

              <tr>
                 <td style="font-family: 'poppins';">
                 Monday
                 </td>
                 <td style="font-family: 'poppins';">
                   11h-14h,18h-01h 
                 </td>
              </tr>

              <tr>
                 <td style="font-family: 'poppins';">
                 Tuesday
                 </td>
                 <td style="font-family: 'poppins';">
                   11h-14h,18h-01h 
                 </td>
              </tr>
              <tr>
                 <td style="font-family: 'poppins';">
                 Wednesday
                 </td>
                 <td style="font-family: 'poppins';"> 
                     11h-14h,18h-01h 
                 </td>
              </tr>
              <tr>
                 <td style="font-family: 'poppins';">
                 THURSDAY
                 </td>
                 <td style="font-family: 'poppins';">
                    11h-14h,18h-01h 
                 </td>
              </tr>
              <tr>
                 <td style="font-family: 'poppins';">
                 Friday
                 </td>
                 <td style="font-family: 'poppins';">
                     11h-14h,18h-01h 
                 </td>
              </tr>
              <tr>
                 <td style="font-family: 'poppins';">
                 SATURDAY
                 </td>
                 <td style="font-family: 'poppins';">
                     11h-14h,18h-01h 
                 </td>
              </tr>
              <tr>
                 <td style="font-family: 'poppins';">
                 SUNDAY
                 </td >
                 <td style="font-family: 'poppins';">
                     11h-14h,18h-01h 
                 </td>
              </tr>


            </table>
          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form action="abouCoDB.php" method="post" >
      <h3 class="text-warning pt-3 title mx-auto">Contact </h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="aemail" placeholder="Enter Your Email"
          name="aemail" required >
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="amessage" name="amessage" rows="5" required></textarea>
      </div>
     
      <button type="submit" class="btn btn-primary"  name="Submit" style="font-family: 'poppins';">Submit</button>
    </form>
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
