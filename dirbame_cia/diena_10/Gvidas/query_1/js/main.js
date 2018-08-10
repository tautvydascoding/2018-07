// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)

$("h1, h2").css("color", "blue");

// A2) kas antra h2 pakeisti i raudona

$("h1:even, h2:even").css("color", "red");

// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)

$("li").last().css("color", "green");

// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}

$(document).ready(function(){
    $("li:not(.reklama)").css("color", "yellow");
});
