console.log("Labas");
 
var masyvas = [];
while (masyvas.length < 50) {
    masyvas.push(1);
}
console.log(masyvas);

for (var i = 0; masyvas.length > i; i++) {
    if (i % 2 === 0) {
        masyvas[i+1] = 3;
    }
}
console.log(masyvas);

for (var i = 5; masyvas.length > i; i += 5) {
    masyvas[i] = 9;
}
console.log(masyvas);

var masyvas1 = [];
for (i = 0; masyvas.length < 50; i++) {
    if (!(i % 5)) {
        masyvas1[i] = 9;
    } else if (!(i % 2)) {
        masyvas1[i] = 3;
    } else {
        masyvas1[i] = 1;
    }
}
console.log(masyvas1);