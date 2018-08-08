console.log(" Labas ");

// visas kodas veiks tik kai bus parsiustas visas HTML ir CSS
$(function(){

    // paslepsiem HMTL h1 elementa
    $( 'h1' ).hide(3000);  // 3000 = 3 sek

    // ka padarius - ant ko paspaudus
    $('h2').click(function(event) {
        // programuoju kas nutinka
        $('h3').hide(2000);
    });

    $('h2').mouseenter(function(event) {
         $('h2').css('color', 'blue');
    });

    $('h4').css("position", "absolute");
    $('h4.melynas').animate(
        {
            "width" : "600px",
            "height" : "200px",
            "font-size" : "80px"
        }, 3000
    );
    $('h4.melynas').animate(
        {
            "right" : "5px",
            "top" : "50px"
        }, 3000
    );
});
