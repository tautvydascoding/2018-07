var x = 10;
var zmogus = {
    x: 9,
    vardas: "Tomas",
    test: function() {
        var x = 20;
        console.log("x: " + x);
        console.log("this.x: " + this.x);
        console.log("window.x: " + window.x);
        var that = this;
        var sunus = {
            vardas: "Jonas",
            test2: function() {
                console.log("x: " + x);
                console.log("this.x: " + this.x);
                console.log("that.x: " + that.x);
            }
        };
        sunus.test2();
    }

};
zmogus.test();
