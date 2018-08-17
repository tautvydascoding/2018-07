console.log("Labas");




//
var y = 0;
var Salis = {
    y: 99999,
    vardas : "Lietuva",
    spausdinti: function() {
                    var y = 1;
                    var manoThat = this;
                    console.log( "spausdinti y:", y ); // 1
                    console.log( "spausdinti this.y:",this.y ); // 9999
                    console.log( "spausdinti window.y:", window.y ); // 0

                    // o kas jeigu atsiranda scope - kito scope viduje?
                    var miestas = function(){
                        console.log( "miestas y:", y ); // 1
                        console.log( "miestas this.y:",this.y ); // 0
                        console.log( "miestas window.y:", window.y ); // 0
                        console.log( "miestas manoThat.y:",manoThat.y ); // 9999 undefined
                    };
                    miestas();
                }
};
Salis.spausdinti();
