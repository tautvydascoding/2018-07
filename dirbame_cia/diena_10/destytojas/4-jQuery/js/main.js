console.log("Labas");

//Execute the function when the DOM is ready to be used.
$(function() {
    var x = 10;

    // alert("viduryje");
});

// alert("paskutinis");

// --------------CSS keitimas--------
document.querySelector('p').style.backgroundColor = "red";
// jQuery budu
// $  === document.querySelectorAll
$('p').css("background-color", "blue");
$('p:first-of-type').css("background-color", "green");
$('p:first').css("background-color", "green");


var manoCSS = {
    "color" : "red",
    "font-size" :  "36px",
    "border" : "solid 1px   yellow",
    "margin" : "40px"
};
$('h2').css( manoCSS );
$('h2, h3, h4').css("padding", "50px");

$('article  p').css("color", "blue");
$('p',   'article').css("color", "blue");  // tik jquery
$('p, article').css("color", "blue");

$('article').find('p').css(  "color", "orange"  );

//
