console.log("Labas");
 
var katinas = 'juodas';
function katinai() {
    var katinas = 'baltas';
    console.log(katinas);
    console.log(this.katinas);
}
katinai();

function printAntraste(x) {
    document.querySelector('body').innerHTML += '<h2>' + x + '</h2>';
}
printAntraste('BMW');

function printStraipsnis(x) {
    document.querySelector('body').innerHTML += '<p>' + x + '<p>';
}
printStraipsnis('lorem');