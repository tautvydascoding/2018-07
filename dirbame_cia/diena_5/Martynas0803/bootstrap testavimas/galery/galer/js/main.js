// =======---== PAVEIKSLIUKU PASIKEITIMAS

var i = 0; // pradzia
var imgs = []; // paveiksliuku array
var laikas = 1000; // pasikeitimo greitis

// sarasas

imgs[0] = "u.jpg";
imgs[1] = "n.jpg";
imgs[2] = "d.jpg";
imgs[3] = "o.jpg";

// pakeitimo funkcija

function imgPakeitimas() {
  document.slider.src = imgs[i];

  if (i < imgs.length - 1) {
    i++;
  } else {
    i = 0;
  }

  setTimeout("imgPakeitimas()", laikas);
}

window.onload = imgPakeitimas;

// // ANTRAS SLIDERIS

var a = 0; // pradzia
var pics = []; // paveiksliuku array
var laiks = 1000; // pasikeitimo greitis

// sarasas

pics[0] = "1.jpeg";
pics[1] = "2.jpeg";
pics[2] = "3.jpeg";
pics[3] = "4.jpeg";
pics[4] = "5.jpeg";
pics[5] = "6.jpeg";
pics[6] = "7.jpeg";
pics[7] = "8.jpeg";
pics[8] = "9.jpeg";
pics[9] = "10.jpeg";

// pakeitimo funkcija

function picPakeitimas() {
  document.slider2.src = pics[a];

  if (a < pics.length - 1) {
    a++;
  } else {
    a = 0;
  }

  setTimeout("picPakeitimas()", laiks);
}

picPakeitimas();