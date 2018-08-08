// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
	// UZDUOTIS
    // sukurit tuscia masyva "prekiautojai"
    // 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai
    // 1.3 isvesti i console /ekrana "prekiautojai" masyvas
    // 2 pervadinti pirma stalciu pvz + "ir KO"
    // 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
	// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
	var prekiautojai = []; // empty array


    prekiautojai[0] = "Senukai";
    prekiautojai[1] = "ermitazas";
    prekiautojai[2] = "moki vezi";
    prekiautojai[3] = "vamsdziai ir ko";
    prekiautojai[4] = "maxima";
    prekiautojai[5] = "iki";
    prekiautojai[6] = "Tomas ir tomauskai";

    // pervadinimas
    prekiautojai[0] = "ir KO";

    // sukeitimas duomenimis
    var x = prekiautojai[2];
    prekiautojai[2] = prekiautojai[3];
    prekiautojai[3] = x;

    // funkcija kuri sukeicia vietas
    function sukeistiMasyvo2elementus(x, y) {
        var temp = prekiautojai[x];
        prekiautojai[x] = prekiautojai[y];
        prekiautojai[y] = temp;
    }
    sukeistiMasyvo2elementus(4, 5);



    console.log(prekiautojai);
    document.querySelector('h1').innerHTML += prekiautojai;
