function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'profile.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
function countdown1() {
    var i = document.getElementById('counter1');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'uzsakymai.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown1(); },1000);
function countdown2() {
    var i = document.getElementById('counter2');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'images.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown2(); },1000);
function countdown3() {
    var i = document.getElementById('counter3');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'klausimai.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown3(); },1000);
function countdown4() {
    var i = document.getElementById('counter4');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'parametrai.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown4(); },1000);
