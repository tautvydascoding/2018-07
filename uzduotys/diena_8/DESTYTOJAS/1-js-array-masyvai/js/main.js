console.log(" Labas ");



var prekiautojai = []; // empty array

prekiautojai[0] = "IKI";
console.log(  "prekybos centrai:", prekiautojai  );
prekiautojai[1] = "Maxima";
prekiautojai[2] = "Lidl";
prekiautojai[3] = "Rimi";
prekiautojai[50] = "Cia Market";

console.log(  "prekybos centrai:", prekiautojai  );


// UZDUOTIS
// A) pervadinti pirma stalciu
prekiautojai[1] = "Barbora";

// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
var temp = prekiautojai[3];
prekiautojai[3] = prekiautojai[2];
prekiautojai[2] = temp;

console.log(prekiautojai);
// C)
// padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
function sukeistiMasyvo2elementus(x, y) {
    var temp = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = temp;
}
sukeistiMasyvo2elementus(1, 4);
console.log("sukeiciam 1 ir 4: ", prekiautojai);
sukeistiMasyvo2elementus(0, 4);
console.log("sukeiciam 0 ir 4: ", prekiautojai);
//






//
