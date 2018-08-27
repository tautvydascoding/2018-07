//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// =======---== PAVEIKSLIUKU PASIKEITIMAS=-=-=-=
//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
var i = 0; // pradzia
var imgs = []; // paveiksliuku array
var laikas = 1000; // pasikeitimo greitis

// sarasas

imgs[0] = "../IMG/und-mov/u.jpg";
imgs[1] = "../IMG/und-mov/n.jpg";
imgs[2] = "../IMG/und-mov/d.jpg";
imgs[3] = "../IMG/und-mov/o.jpg";
imgs[4] = "../IMG/und-mov/UNDO.png";
// pakeitimo funkcija

function imgPakeitimas() {
  document.slideris.src = imgs[i];

  if (i < imgs.length - 1) {
    i++;
  } else {
    i = 0;
  }

  setTimeout("imgPakeitimas()", laikas);
}

window.onload = imgPakeitimas;



//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// =-=-=-=-=- CARUSELE-=-=-=-=-=-=-- 
//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// 
let carousel = document.getElementsByClassName('ab_karusele');

[].forEach.call(carousel, function (i) {
  let next = i.getElementsByClassName('next')[0],
    prev = i.getElementsByClassName('prev')[0],
    vidinis = i.getElementsByClassName('vidinis')[0],
    imgs = i.getElementsByTagName('img')[0],
    currentImageIndex = 0;
  width = 640;



  function switchImg() {
    vidinis.style.left = -width * currentImageIndex + 'px';
  }

  next.addEventListener('click', function () {
    currentImageIndex++;

    if (currentImageIndex > 8) {
      currentImageIndex--;
    }
    switchImg();
  });

  prev.addEventListener('click', function () {
    currentImageIndex--;

    if (currentImageIndex < 0) {
      currentImageIndex = imgs.length - 1;
    }
    switchImg();
  })

});

//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// -=-=-=-=-=-= MENIU =-=-=-=-=-=
//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

// PASELEKTINAM DOM Itemus
const meniuBtn = document.querySelector(".meniu_btn");
const navigacija = document.querySelector(".navigacija");
const navMeniu = document.querySelector(".nav_meniu");
const navItemas = document.querySelectorAll(".nav-itemas");

// nurodom pradine meniu padeti
let showMenu = false;

meniuBtn.addEventListener("click", toggleMenu);

function toggleMenu() {
  if (!showMenu) {
    meniuBtn.classList.add("close");
    navigacija.classList.add("show");
    navMeniu.classList.add("show");
    navItemas.forEach(item => item.classList.add("show"));

    // nurodom
    showMenu = true;
  } else {
    meniuBtn.classList.remove("close");
    navigacija.classList.remove("show");
    navMeniu.classList.remove("show");
    navItemas.forEach(item => item.classList.remove("show"));

    // Set Menu State
    showMenu = false;
  }
}

// scroooool


// $(document).ready(function () {
//   var permatomumas = 1;

//   $("main.home_main").scrollBottom(function () {
//     permatomumas -= 0.01;
//   })
//   if (permatomumas == 0) {
//     $("main.home_main").scrollTop(function () {
//       permatomumas += 0.01;
//     })
//   }
// })

// -=-========= FOOOORMOS VALIDACIJA ===-=-==--==


function validateForm() {

  var vardoIvedimas = document.forms["manoForma"]["vardas"].value;
  if (vardoIvedimas == "") {
    alert("Ooo NE! pamirsote irasyti savo varda! ");
    return false;
  }

  var elPIvedimas = document.forms["manoForma"]["el_pastas"].value;
  if (elPIvedimas == "") {
    alert("Oo Ne! Nenurodete savo el. pasto! Negalesime su Jumis susisiekti, jei jo neivesite.");
    return false;
  }
  var zinIvedimas = document.forms["manoForma"]["zinute"].value;
  if (zinIvedimas == "") {
    alert("Oo Ne!Siunciate tuscia zinute. Uzduokite mums klausima ar parasykite savo pastebejimus. Mums tai labai svarbu!");
    return false;
  }
}



// -=-=  opacity in scrool isnykimas. Transition kad efektas suletetu
// $(document).ready(function(){
//   $(window).scroll(function(){
//     if($(this).scrollTop()>0) {
//       $("clases/idname").css({"opacity" : 0})
//     }
//     else {
//       $("clases/idname").css({"opacity" : 1})
//     }
//   })

// })


// // =-=-=--=-=-=-= AJAX sent forma =-=-=-=-=-=-=

// var maildata = new FormData($("main-forma")[0]);
// $.ajax({
//   url: 'send.php',
//   type: 'POST',
//   data: maildata,
//   async: true,
//   dataType: 'text',
//   processData: false,
//   success: function (data) {
//     alert(data);
//   },
//   error: function (data) {
//     alert('An error occurs!');
//   }
// });