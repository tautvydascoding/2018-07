console.log(" Labas ");


var phones = ["Nokia", "iphone", "motorola", "samsung"];
var ilgis = phones.length;
console.log( ilgis );


// masyvo sudejimas/pavertimas i String/tektas
var tekstas = phones.toString();
console.log(   tekstas  );
var tekstas2 = phones.join( " : ");   // " : " skyrinklis tarp masyvo stalciu reiksmiu
console.log( tekstas2 );


// delete last element
phones.pop();
document.write( phones.join(" ; ") );

phones.push("Huawei"); // idejimas i gala
phones.push("Panasonic"); // idejimas i gala
phones.push("Alkatel"); // idejimas i gala
console.log(phones.toString() );


// istrinimas masyvo priekio
phones.shift();
console.log( phones.join('...')); // ... - skyrinklis

phones.unshift('meskafonas');
console.log(  phones.join(" ;;")   );


delete phones[2];
console.log( phones  );

// splice delete
phones.splice( 2, 1); // istrinsime nuo 2 stalciaus( 2-tra iskaitant) , 1-na VISA STALCIU
console.log( phones  );
// splice insert - iterpimas
phones.splice( 2, 0, "raudonas", "melynas"); //  "2" - nuo kur; "0" - kiek istrinti, "ruadonas" - iterpiamas
console.log( phones  );
// splice - replace/ trininmas ir iterpimas
phones.splice(5, 1, "Sony"); // istrynem 5 ir vietoj jo iterpem "Sony"
console.log(phones);
//


// bandom kurti masyvo kopija
var kopija = phones;   // !!!
console.log("orginalas", phones);
console.log("kopija", kopija);
// kas bus jeigu kopija pakeisime??
kopija[0] = "sugedo";
console.log("orginalas", phones);
console.log("kopija", kopija);


//   phones = "";
// console.log("orginalas", phones);
// console.log("kopija", kopija);

// asmenines kopijos kurimas - taisyklinga kopija
// ! slice()   arba  cat()
var tikraKopija = phones.slice(0);  // "0" - nuo kurio kopijuoti NOTE: nepamirsti issisaugoti kopija i kintamaji
console.log( " tikra kopija",  tikraKopija);
var tikraKopija = phones.slice(3, 5);  // nuo "3" iki "5"
var tikraKopija = phones.slice(-3);  // trys nuo galo
console.log( " tikra kopija",  tikraKopija);




// cat - keliu masyvu sujungimas







//sort - rikaivimas
phones.sort(); // surikiuoja nuo a iki Z  !!! NOTE: netinkamas skaiciams!!! (nes skaicius vercia i String, galima istaisyti)
console.log( phones );

phones.push(9);
phones.push(1);
phones.sort( function(a,b) { return a - b;}   )  ;
console.log( phones );

//


var mas = [];
for (var i = 0; i < 50; i++) {
    mas[i] = 1;  // i = 1, 2 , 3, ...
}
console.log(mas);
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
for (var i = 0; i < 50; i++) {
     // i++;  // ++ padidinea vienetu
     mas[++i] = 3;
     // i++;  i = i + 1;
     // ++i;  i + 1 = i;
}
console.log( mas );
//arba
for (var i = 0; i < 50; i = i + 2) {  // i += 2;
     mas[i] = 3;
}
console.log( mas );
//arba
for (var i = 0; i < 50; i++) {
    // tikrinu ar skaicius lyginis ( ar padalinus is "2" - liekana yra 0)
    if (i % 2 === 0) {
        mas[i] = 3;
    }
}
console.log( mas );
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
