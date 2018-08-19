console.log("Labas rytas");



var x = 10;
var zmogus = {
  x: 12,
  vardas: "tomas",
  test: function () {
    var x = 20;
    console.log("spausdina x:" + x);
    console.log("spausdina this.x " + this.x);
    var that = this;
    var sunus = {
      vardas: "jonuks",
      test2: function () {
        console.log("spausdina x objekte jonukas test2" + x);
        console.log("spausdina this x objekte jonukas test2" + this.x);
        console.log("spausdina this.that.x jonuke:" + that.x);

      }

    };
    sunus.test2();
  }


};
zmogus.test();