console.log("Labas");



var   lietuva = ["kaunas", "klaipeda", "vilnius"];

console.log("pradzioje:",  lietuva[0], lietuva[1], lietuva[2]   );
console.log(  lietuva    );


var str = lietuva.toString();
var txt = lietuva.toString();
var s = lietuva.toString();
var temp = lietuva.toString();
var tmp = lietuva.toString();

console.log(   str );


// masyvo turinio sudejimas i viena string (teksta)
function manoToString(masyvas) {
    var tekstas = masyvas[0] + masyvas[1] + masyvas[2];
    return   tekstas;
}
var ilgasTekstas = manoToString(lietuva);
console.log( "mano ilgas tekstas: ",    ilgasTekstas );
//===============================================
var grazusTekstas = lietuva.join("  :: "); // join'ui galima nurodyti skyriklius
console.warn(   grazusTekstas  );


lietuva.pop();  // istrina paskurinta masyvo nari 'vilnius'
console.warn( "po istrinimo:",  lietuva  );

lietuva.push("Trakai");      // idejimas i masyvo gala
lietuva.push("Siauliai");
console.log(   "po idejimo:", lietuva);

lietuva.unshift("Alytus");   // ideda i masyvo prieki
console.warn("po idejimo i prieki:",  lietuva);

lietuva.shift(); // istrinmas is masyvo priekio
console.warn("po istrinimo is priekio:", lietuva);


var miestuSk = lietuva.length; // length - masyvo elementu kiekis
console.log("miestuSk: ", miestuSk);
console.log("miestuSk: ", lietuva.length);
//
delete lietuva[2];   // istrina mas. elemento turini (ir palieka tuscia vieta)
console.log("po  delete2:", lietuva);


lietuva.unshift("Panevezys");
var kopija = lietuva.slice(-3, -1);  // ! nusikopijuoja dali/visa masyva (nuo , iki)

console.log("kopija 1,3 :", kopija); // nuo 1-o iki 3-cio (jo neiskaitant)
console.log("orginalas:  ", lietuva);

var visoKopija = lietuva.slice(0); // nuo 0 iki galo


//====================
// iterpimas i viduri masyvo
lietuva.splice(2, 0,    "Kaisedorys", "Plunge");  // nuo 2; "0" -0 istriname, iterpem 2 element
console.log("iterpem viduryje: ", lietuva);

// trinimas
lietuva.splice(5, 1);  // nuo penkto, istrinti 1 stalciu
console.warn("istrynem tuscia stalciu:", lietuva);

// replace
lietuva.splice(1, 2,   "Kaunas", "Kaisedorys raj.", "Utena", "Marijampole");  // nuo pirmo ; istrinti 2; iterpti kaunas, Kaisedorys raj. 
