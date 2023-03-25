<?php 
// recupreation des elements du formulaire


if(isset($_POST['code']) && isset($_POST['total'])){

try{
   $mysqlClient = new PDO('mysql:host=localhost;dbname=bhaf2949_sitelivre;charset=utf8', 'bhaf2949_zeufackvaldo', 'Demanou2@', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}catch(Exception $exception){
   die('Erreur : '.$exception->getMessage());

}
     $sqlQuery = 'SELECT * FROM code ';
     $result = mysqli_query($con, $query);
     $num = mysqli_num_rows($result);

     if($num == 250){
        $m = "Sorry we no longer have a discount lot for purchases of 35euro";
       header('location: index.php?error=' . $m);
        
     }else if($num < 250){

       $sqlQuery = 'INSERT INTO code(code) VALUES (:code)';

    // Préparation
     $insertContact = $mysqlClient->prepare($sqlQuery);

   // Exécution ! La recette est maintenant en base de données
    $insertContact->execute([
      'code' => $_POST['code'],
     
    
     ]);
             $m = "Thank's you";
       header('location: index.php?error=' . $m);
     }
  


}

?>

