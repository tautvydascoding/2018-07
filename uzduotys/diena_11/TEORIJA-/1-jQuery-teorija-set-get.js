

//=============get data=========
//.text()
//.html()
//.val()

var otext = $("h1").text();  // return visu h1 turini
//console.log("h1 otext: " + otext);

var oHTML = $("h1").html();
//console.log("h1 oHTML: " + oHTML);

//---- get only first h1 text------
var elm = $("h1").eq(0);   // eq -  return the jquery selector
var elm2 = $("h1")[0];     // [0] - return the DOM element
console.log("eq(): " ,  elm);
console.log("[0]: " ,  elm2);

console.log( elm.text());         // WORKS !!!
// console.log( elm2[0].text();    // ERROR: [0] return the DOM element
// NOTE: $(...)[0] will return the DOM element. If you want to use a jquery function, it has to be on a jquery selector object. If you want to get the jquery selector for a specific index, use the eq function:
// NOTE:  eq( -2 ) - nuo galo antras




//=============SET text/ HTML / VAL=========
//.text(...)
//.html(...)
//.val(...)

//$("h1").text("Naujas h1 tekstas 1.1");
//console.log("h1 otext: " + otext);

// kaip innerHTML=   (!!!  istrina visa vidu)
$("h1").html("<button> Registruotis </button>");
//console.log("h1 <button>: " + oHTML);

// Form'oje ivesti teksta uz vartotoja "val()"
//$("form input").val("Type Username here");

// $('form input').attr('value', 'Tomas');
// $('form input').attr('class', 'bg-info');
//---JS ---

// document.getElementsByTagName("input")[0].value = "Tomas";
// document.getElementsByTagName("input")[0].setAttribute('value','Tomas');
// document.myform.vardas.value = 'Tomas';
//                 <form name="myform">
//                         <input class="aa" name="vardas" type="text" value="" >
//                     </form>
