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
    alert("Atsiprasome, bet vardas privalo buti ivestas");
    return false;
  }
  var pavardesIvedimas = document.forms["manoForma"]["pavarde"].value;
  if (pavardesIvedimas == "") {
    alert("Atsiprasome, bet pavarde privalo buti ivestas");
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


// // =-=-=--=-=-=-= AJAX LOAD =-=-=-=-=-=-=

// $(document).ready(function () {

//   var limit = 3;
//   var start = 0;
//   var action = 'inactive';

//   function load_country_data(limit, start) {
//     $.ajax({
//       url: "fetch.php",
//       method: "POST",
//       data: {
//         limit: limit,
//         start: start
//       },
//       cache: false,
//       success: function (data) {
//         $('#load_data').append(data);
//         if (data == '') {
//           $('#load_data_msg').html("<button type='button' class='btn btn-info'>Aciu kad ziurejote</button>");
//           action = 'active';
//         } else {
//           $('#load_data_msg').html("<button type='button' class='btn btn-warning'>Prasome palaukti....</button>");
//           action = "inactive";
//         }
//       }
//     });
//   }

//   if (action == 'inactive') {
//     action = 'active';
//     load_country_data(limit, start);
//   }
//   $(window).scroll(function () {
//     if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
//       action = 'active';
//       start = start + limit;
//       setTimeout(function () {
//         load_country_data(limit, start);
//       }, 1000);
//     }
//   });

// });