console.log(" Labas ");

    // -------------jquery - elemento kurimas --------------
    var sekcija = $('<section></section>').html('<h1> Mokomes </h1>');
    // $('<section/>')

    console.log( sekcija );

    sekcija.appendTo( "body" );   // appendTo - atlieka ta pati ka javaScript komanda "appendChild"



    //------------- js class uzdejimas -------------
    // var d = document.getElementById("div1");
    // d.className += " otherclass";
    // // arba
    // d.classList.add("otherclass");
    //
    // d.classList.remove("otherclass");
    // d.classList.toggle('otherclass');

    // pvz: ant h1 elemento uzdesime klases: " bg-info mt-5 aukstis-200"
    // var elementas = document.querySelector('h1');  // suras pati pirma h1
    // elementas.className += " bg-info mt-5 aukstis-200 ";
    //
    // var elementas = document.querySelectorAll('h1');  // suras visus h1 ir sudes i masyva
    // elementas[1].className += " bg-info mt-5 aukstis-200 ";


    //------------jquery budu-----------
    //  $('h1:first ').addClass('bg-warning mt-5 aukstis-100');


    $('a').click(  function() {
        $('h1:first ').addClass('bg-warning mt-5 aukstis-100');
        // arba
        // $('h1:first ').attr('class', 'bg-warning mt-5 aukstis-100');
    }  );


  //
