var lietuva = ["kaunas", "klaipeda", "vilnius"];
console.log("pradzioje:", lietuva[0], lietuva[1], lietuva[2]);


var txt = lietuva.toString();
console.log(txt);

// masyvo turinio sudejimas i viena string (.toString elemento pavyzdys kaip veikia)
function ManoTostring(a) {
    var tekstas = a[0] + a[1] + a[2];
    return tekstas;
}
var ilgastekstas = ManoTostring(lietuva);
console.log("mano ilgas tekstas: ", ilgastekstas);


var grazusTekstas = lietuva.join("  "); // join'ui galima nurodyti skiriklius (tarpai atsiranda)
console.warn(grazusTekstas);


lietuva.pop(); // istrina paskutini elementa
console.warn("po istrinimo: ", lietuva);


lietuva.push("Trakai"); //idejimas i masyvo gala
lietuva.push("Siualiai");
console.warn("Po idejimo: ", lietuva);


lietuva.unshift("Alytus"); // ideda i masyvo prieki
console.warn("Po idejimo i prieki: ", lietuva);


lietuva.shift(); // istinimas is masyvo priekio
console.warn("po istrinimo is priekio: ", lietuva);


var miestuSk = lietuva.length; //length - masyvo elemeto kiekis
console.log("miestu skaicius: ", miestuSk);
console.warn("Miestu skaicius: ", lietuva.length);


delete lietuva[2]; // istrina antra elementa ir palieka truscia vieta
console.log("Po delete[2]: ", lietuva);


lietuva.unshift("Panevezys");
var kopija = lietuva.slice(1, 3); //nusikopijuoja dali/visa masyva (nuo, iki)
console.warn("Kopija (1, 3): ", kopija); // kopijavimas vyksta nuo pirmo iki trecio (jo neiskaitant)
console.log("originalas: ", lietuva);


// =============
// iterpimas i vidu
lietuva.splice(2, 0, "Kaisiadorys", "Plunge"); // nuo 2, 0 - 0 elementu istriname, 2- iterpiame elementa
console.warn("Iterpiame viduri: ", lietuva);

// trinimas
lietuva.splice(5, 1);
console.log("Itriname: ", lietuva);

// replace
lietuva.splice(1, 2, "Kaunas", "Kaisiadoriu raj."); // nuo pirmo, istrinti 2, iterpti "kaunas", "Kaisiadoriu raj."
console.warn("replace: ", lietuva);
