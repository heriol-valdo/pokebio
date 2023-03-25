let roue = document.querySelector("#roue");
let btnJouer = document.querySelector("#jouer");
let monPortefeuille = document.querySelector('.monnaie');
let mise = document.querySelector('#mise');
let portefeuille = 10000;

// Fonction d'initialisation
/*btnJouer.addEventListener("click", initialisation);
function initialisation() {
  if (mise.value == 0) {
    alert('Please place your bet!')
  } else if (mise.value < 300) {
    alert("Your bet is less than 300Euro !");
  } else if (mise.value >= 300 && portefeuille >= mise.value) {
    calculArgent(-mise.value);
    roueTourne();
    playerAudio();
  } else {
    alert('Your wallet is empty !');
  }
}*/


btnJouer.addEventListener("click", initialisation);
function initialisation() {
  
  calculArgent(-0);
    roueTourne();
    playerAudio();
}

function wellcom() {
 // alert("Welcome!");
 // onload="wellcom()"
  Swal.fire({
  title: 'Your Email',
  html: `
  
  <input type="email" id="login" class="swal2-input" name="ddiv" placeholder="email">
  
  `,
  confirmButtonText: 'Sign in',
  focusConfirm: false,
  preConfirm: () => {
    const login = Swal.getPopup().querySelector('#login').value
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if (!re.test(login)) {
      Swal.showValidationMessage(`Please enter login `)
    }
    return { login: login}
  }
}).then((result) => {

    $.ajax({
      type:'post',
    url: 'abou.php',
    data: {
      email:result.value.login,
      
    },
    success: function (response) {
     
     if(response == ""){

        Swal.fire(` Your email saved: ${result.value.login} `, '', 'info')
        
     }else if(response != ""){
        
     Swal.fire(` Your email saved: ${result.value.login} `, '', 'success')

         
     }
      
    

    },
  });
 

 
})
}

















// Fonction qui calcule l'argent du portefeuille
function calculArgent(argent) {

  monPortefeuille.innerHTML = "Promo Code <br>" + argent + ""
}

function calculArgentB(argent) {

  monPortefeuille.innerHTML = "Promo Code <br>" + argent + ""
}

function calculArgentC(argent) {

  monPortefeuille.innerHTML = "Promo Code <br>" + argent + ""
}

// Fonction qui lire l'audio  
function playerAudio() {
  let audio = new Audio('spin.mp3');
  audio.play();
}

// Fonction qui faire tourner la roue
function roueTourne() {
  let deg = Math.floor(Math.random() * 5000); // degré temporaire de rotation comprise entre 0 et 5000
  argentAleatoire(deg);
  roue.style.transition = "all 5s ease-out"; // sans sa je ne tourne pas
  roue.style.transform = "rotate(" + deg + "deg)";
  // console.log(deg)
}

// Fonction qui choisi une somme aléatoire lorsque l'on mise
function argentAleatoire(deg) {
  let valeur = deg / 360; // degré temporaire / 360
  valeur = (valeur - parseInt(valeur.toString().split(".")[0])) * 360; // calule et trouve la valeur du degré normal en 360, grace au degré temporaire
  setTimeout(() => {
    switch (true) {
      case valeur > 0 && valeur <= 20:
       var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
         Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
        break;
      case valeur > 20 && valeur <= 67:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentB(sr10);
        Swal.fire(` you have won 50% discount on the second menu `, '', 'info')
        break;
      case valeur > 20 && valeur <= 67:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentB(sr10);
         Swal.fire(` you have won 50% discount on the second menu `, '', 'info')
        break;
      case valeur > 20 && valeur <= 67:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentB(sr10);
         Swal.fire(` you have won 50% discount on the second menu `, '', 'info')
        break;
      case valeur > 67 && valeur <= 111:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
       Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
        break;
      case valeur > 67 && valeur <= 111:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
        Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
        break;
      case valeur > 67 && valeur <= 111:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
       Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
      case valeur > 67 && valeur <= 111:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
      Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
        break;
      case valeur > 111 && valeur <= 154:
         var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentB(sr10);
        Swal.fire(` you have won 50% discount on the second menu `, '', 'info')
        break;
      case valeur > 111 && valeur <= 154:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentB(sr10);
         Swal.fire(` you have won 50% discount on the second menu `, '', 'info')
        break;
      case valeur > 111 && valeur <= 154:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentB(sr10);
         Swal.fire(` you have won 50% discount on the second menu `, '', 'info')
        break;
      case valeur > 154 && valeur <= 193:
         var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentC(sr10);
        Swal.fire(` you have won 1 menu of 35 euros free `, '', 'info')
        break;
      case valeur > 154 && valeur <= 193:
       var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentC(sr10);
       Swal.fire(` you have won 1 menu of 35 euro free`, '', 'info')
        break;
      case valeur > 154 && valeur <= 193:
         var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentC(sr10);
        Swal.fire(` you have won 1 menu of 35 euro free`, '', 'info')
        break;
      case valeur > 193 && valeur <= 237:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
       Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
        break;
      case valeur > 193 && valeur <= 237:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
         Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
        break;
      case valeur > 193 && valeur <= 237:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
       Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
        break;
      case valeur > 237 && valeur <= 283:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentB(sr10);
         Swal.fire(` you have won 50% discount on the second menu `, '', 'info')
        break;
      case valeur > 237 && valeur <= 283:
         var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentB(sr10);
        Swal.fire(` you have won 50% discount on the second menu `, '', 'info')
        break;
      case valeur > 237 && valeur <= 283:
         var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgentB(sr10);
         Swal.fire(` you have won 50% discount on the second menu `, '', 'info')
        break;
      case valeur > 283 && valeur <= 315:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
        Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
        break;
      case valeur > 315 && valeur <= 359:
       var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
        Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
        break;
      case valeur > 315 && valeur <= 359:
         var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
         Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
        break;
      case valeur > 359 && valeur <= 360:
        var r10 =random10(100,900);
         var sr10=  'B' + r10.toString() ;
         calculArgent(sr10);
         Swal.fire(` you have won 10% discount on 30 euro of purchase `, '', 'info')
        break;
    }
  }, 5000);

}

function random10(min , max){
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

