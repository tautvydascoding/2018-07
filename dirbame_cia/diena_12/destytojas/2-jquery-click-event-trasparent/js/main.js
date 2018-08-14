console.log("Labas");


$(document).ready(function(){
    var permatomumas = 1;

    $("h1").click(function(){

        permatomumas -= 0.3;
        var spalva = "rgba(255, 0, 0, " + permatomumas + ")";

        $('h1').css("color", spalva);

        // jeigu nematomas - padaryti vel matomu
        if (permatomumas <= 0) {
            permatomumas = 1; // reset
            $('h1').css("color", spalva);
        }
    });
});
