try {
    var x = -2;
    if( x <= 0 ) {
    	throw "vartotojas bando pirkti minus prekiu";
    }
    isgalvotaNeegzisutojanttiFunkcija("Welcome guest!");
}
// catch - suveiks tik jeigu buvo klaidu try{} dalyje arba iskviesiesime su "throw"
catch(err) {
	if( err.message == "x is not defined") {

    } else if( err.message == "isgalvotaNeegzisutojanttiFunkcija is not defined") {

    }
    document.getElementById("demo").innerHTML = err;
    document.getElementById("demo").innerHTML = err.message;
}
// finally - nebutinas!!!
 finally {
     console.log('Sitas tekstas/code matomas nesvarbu ar buvo klaidu ar ne');
 }
