console.log(" Labas ");

// UZDUOTIS
// Issimeginti komandas:

 document.write(" <b class='bg-info'> Mano tekstas </b> ");
//
 window.alert("labas");
 alert("Viso");
 var ivestasTekstas = prompt("Ivestkite savo varda");
 console.log(ivestasTekstas);


document.querySelector('h3').innerHTML = " <b>Pakeistas h3 turinys</b>";
//querySelector - paieskos/selector komanda (veikia pagal CSS taiyskles pvz: '.class', '#id', )
 //innerHTML - keicia surasto HTML elemento vidu

//----Elemento duomenys--------
// auksto paemimas:
 var aukstis = document.querySelector('h3').clientHeight;   // clientHeight includes the height and vertical padding.
 document.write("elemento h3 auksstis: ",aukstis);

 //var aukstis2 = document.getElementById('h2').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
 //aukscio nustatymas:
 //document.getElementById("h2").style.height = "500px"; 		// change the height of a <div> element:
