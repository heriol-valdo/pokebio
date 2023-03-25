<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="shortcut icon" href="images/logo.png" type="image">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POKE BIO | Poke Bio online shopping site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'includes/header_menu.php';
?>
<div class="d-flex justify-content-center">
                <div class=" col-md-6  my-5 table-responsive p-5">
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                                <?php
while ($row = mysqli_fetch_array($result)) {
        $sum += $row["Price"];
        $id = $row["id"] . ", ";
        echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Eu " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
    }
    $id = rtrim($id, ", ");
    echo "

    <form id='form'><tr><td colspan='3' class='text-center'>Promo Code</td><td><input 
   class='form-control' placeholder='enter the code if you have one' type='text' size='5' id='code' maxlength='4' 
     pattern='[D-C-B][1-9]{3}'
 ></td></tr>";
 

    echo "<tr><td></td><td>Total</td><td>Eu " . $sum . "</td><td><button class='btn btn-primary'  type='submit' >Confirm Order</button></td></tr></form>";

    ?>
                            </tbody>
                            <?php
} else {
    echo "<div> <img src='images/emptycart.png' class='image-fluid' height='150' width='150'></div><br/>";
    echo "<div class='text-bold  h5'>Add items to the cart first!<div>";

}
?>
                        <?php
?>
                        </tbody>
                    </table>
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



const form = document.querySelector("#form");
const input = document.querySelector("#code");
const output = document.querySelector("#output");



const re = /^(?:\d{1}|\(\d{1}\))()\d{1}\1\d{1}$/;

function testInfo(phoneInput) {

     if(input.value == "" ){
              choix();
    }else if(input.value.length < 4){
       Swal.fire(` check your Promo Code  `, '', 'error')
    }else if(code.value.length == 4){

          var tableau2 =new Array ('B', 'C','D');
           for(var i=0; i<tableau2.length; i++){
        if(input.value[0] != 'B' ){
           Swal.fire(` check your Promo Code  `, '', 'error')
       }
       else{
           var r = input.value.substr(1, 3);
            const ok = re.exec(r);
             output.textContent = ok
        ? choixDataCode(r)
      : Swal.fire(` check your Promo Code  `, '', 'error');
}
}
}
}



 

 function choixDataCode(number){
    
       var numberr= parseInt(number);

    if(numberr >=100 && numberr<500){


            // Création de l'objet XMLHttpRequest
    var xhr = new XMLHttpRequest();
    
    // Configuration de la requête
    xhr.open("POST", "code.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    // Fonction à exécuter lorsque la requête est terminée
    xhr.addEventListener('load', function () {

        if (xhr.status >= 200 && xhr.status < 400) {
            
            // Traitement de la réponse du script PHP
            var resultat = xhr.responseText;
           // document.getElementById("output").innerHTML = resultat;
            choix();
            
            
            
        }else{
            alert(xhr.status + " " + xhr.statusText);
              Swal.fire(` error to chagement  `, '', 'error')
        }
    });
    
    // Envoi de la requête
    xhr.send("nom100=" + input.value);
           
    }

     else if(numberr >=500 && numberr<800){

             // Création de l'objet XMLHttpRequest
    var xhr = new XMLHttpRequest();
    
    // Configuration de la requête
    xhr.open("POST", "code0.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    // Fonction à exécuter lorsque la requête est terminée
    xhr.addEventListener('load', function () {

        if (xhr.status >= 200 && xhr.status < 400) {
            
            // Traitement de la réponse du script PHP
            var resultat = xhr.responseText;
           // document.getElementById("output").innerHTML = resultat;
            choix();
            
            
            
        }else{
            alert(xhr.status + " " + xhr.statusText);
              Swal.fire(` error to chagement  `, '', 'error')
        }
    });
    
    // Envoi de la requête
    xhr.send("nom100=" + input.value);

     }
     else if(numberr >=800 && numberr<900){

             // Création de l'objet XMLHttpRequest
    var xhr = new XMLHttpRequest();
    
    // Configuration de la requête
    xhr.open("POST", "code1.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    // Fonction à exécuter lorsque la requête est terminée
    xhr.addEventListener('load', function () {

        if (xhr.status >= 200 && xhr.status < 400) {
            
            // Traitement de la réponse du script PHP
            var resultat = xhr.responseText;
          //  document.getElementById("output").innerHTML = resultat;
            choix();
            
            
            
        }else{
            alert(xhr.status + " " + xhr.statusText);
              Swal.fire(` error to chagement  `, '', 'error')
        }
    });
    
    // Envoi de la requête
    xhr.send("nom100=" + input.value);


     }

 }





form.addEventListener("submit", (event) => {
  event.preventDefault();
  testInfo(input);
});




let btn = document.querySelector("#cl");
let code = document.getElementById("code");

btn.addEventListener("click", submitCode);

function submitCode() {
   
    if(code.value == "" ){
               window.location.replace('livraison.php');
    }else if(code.value.length < 4){
       Swal.fire(` check your Promo Code  `, '', 'error')
    }else if(code.value.length == 4){

         
       
    }
  // Swal.fire(` Your email saved:  `, '', 'info')
  
}


function redirection(){
window.location.replace('success.php');
}

function redirectionL(log){
      var log1=log;

      Swal.fire(log,'','info');
    // document.getElementById("output").innerHTML =" <?php echo   " heriol"; ?>";
  
//window.location.replace('success.php');
}

function livraison(){
   Swal.fire({
  title: 'delivery Address ',
  html: `
  
  <input type="text" id="login" class="swal2-input" name="ddiv" placeholder="enter Your Address">
  
  `,
  confirmButtonText: 'Send',
  focusConfirm: false,
  preConfirm: () => {
    const login = Swal.getPopup().querySelector('#login').value
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if ( !login) {
      Swal.showValidationMessage(`Please enter a Address `)
    }
    return { login: login}
  }
}).then((result) => {

       Swal.fire(`thanks you for this comand. she will be delivered to this address: ${result.value.login} `, '', 'success')
       setTimeout(redirection, 1000);
 

 
})
}

function choix() {
 
  Swal.fire({
  title: 'Make a delivery choice',
  showDenyButton: true,
  showCancelButton: false,
  confirmButtonText: 'ATake away',
  denyButtonText: `delivery`,
  denyButtonColor: `#3085d6`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('A smile will receive you', '', 'success')
    setTimeout(redirection, 1500);
  } else if (result.isDenied) {
    livraison();
    
  } else if(result.isCanceled){
    window.location.replace('cart.php');
  }
})
}














$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>
