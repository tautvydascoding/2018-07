
//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);

function printKaina(x1, x2, x3) {
    console.log(x1);
    console.log(x2);
    console.log(x3);
}
printKaina(999.00 , 13.49, 100.05);

// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis(pv1, pv2, pv3, pv4, pv5) {
    pv1 = 5;
    pv2 = 10;
    pv3 = 8;
    pv4 = 6;
    pv5 = 8;
    console.log("pazymiu vidurkis =", (pv1 + pv2 + pv3 + pv4 + pv5) / 5);
}
pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
    console.log("pazymiu vidurkis =", (x1 + x2 + x3 + x4 + x5) / 5);
}
pazymiuVidurkis1(5, 10, 8, 6, 8);
