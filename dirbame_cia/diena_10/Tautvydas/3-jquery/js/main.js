console.log("Labas");
 
// JS
document.querySelector('p').style.backgroundColor = "red";

// jQuery
$('p:first').css("background-color", "blue");

var manoCSS = {
    "color": "red",
    "font-size": "36px",
    "border": "solid",
    "margin": "40px"
};
$('h2').css(manoCSS);
$('h2, h3, h4').css("padding", "50px");