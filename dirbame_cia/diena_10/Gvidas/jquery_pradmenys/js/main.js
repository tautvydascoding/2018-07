//Execute the function when the DOM is ready to be used.
$(function() {

});

// ---------- css keitimas -------------
document.querySelector('p').style.backgroundColor = "red";
// jquery budas
// $ === document.querySelectorAll
$('p').css("background-color", "blue");
$('p:first').css("background-color", "green");

var manoCSS = {
    "color" : "red",
    "font-size" : "36px",
    "border" : "solid 1px yellow",
    "margin" : "40px"
};
$('h2').css(manoCSS);

$('h2, h3, h4').css("padding", "20px");
