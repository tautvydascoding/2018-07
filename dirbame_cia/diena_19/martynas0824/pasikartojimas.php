<?php
// 1) sukurti masyva : 1981, 1980, 1975, 1995, 1999
$masyvas = [1999, 1996, 3333, 1449, 1009, 3333, 1234, 1009, 3333, 1234, 1009, 3333, 1234];
// 1.1) atspausdinti masyva naudojant FOR cikla, While cikla ir FOREACH cikla
echo "for loop";
for ($i = 0; $i < count($masyvas); $i++) {
  echo "<br>" . $masyvas[$i];
}
echo " while <br>";
$i = 0;
//while ciklas
while ($i < count($masyvas)) {
  echo " <br>" . $masyvas[$i];
  $i++;
}

echo "for each <br>";
//foreach

foreach ($masyvas as $stalcius) {
  echo "  <br> $stalcius";
}

// 1.5 Atspasudinti visas datas nuo 3-cios (iskaitant 3-cia)

for ($i = 2; $i < count($masyvas); $i += 3) {
  echo "<br> kas trecias: $masyvas[$i] ";
}

// matricos

// 2) sukurti matrica:
// Tomas, 1981, Buhalteris
// Ona 1980 Programuotoja
// Petras, 1975, Direktorius
// 2.1) atspausdinti su FOR ciklu
// 2.2) atspausdinti su FOR FOR ciklu
// 2.3) atspausdinti su FOREACH

$darbuotojai = [
  ["tomas", 1981, "buhalteris"],
  ["Ona", 1980, "programuotoja"],
  ["Petras", 1975, "Direktorius"]
];

echo "<br>" . print_r($darbuotojai);

// $darbuotojai1 = [];
// $pirms = ["tomas", 1981, "buhalteris"];
// $antras = ["Ona", 1980, "programuotoja"];
// $trecias = ["Petras", 1975, "Direktorius"];
// $darbuotojai1[0] = $pirms;
// $darbuotojai1[1] = $antras;
// $darbuotojai1[2] = $trecias;

// echo print_r($darbuotojai1);

echo "<br>";
echo "<br>";
for ($i = 0; $i < count($darbuotojai[0]); $i++) {
  echo "<br>" . $darbuotojai[$i][0];
  echo "<br>" . $darbuotojai[$i][1];
  echo "<br>" . $darbuotojai[$i][2];
}
echo "<br>";
echo "<br>";
for ($i = 0; $i < count($darbuotojai[0]); $i++) {

  for ($a = 0; $a < count($darbuotojai[0]); $a++) {
    echo $darbuotojai[$i][$a];
  }

}


echo "while <br>";
$i = 0;
while ($i < count($darbuotojai[0])) {
  echo "<br>" . $darbuotojai[$i][0];
  echo "<br>" . $darbuotojai[$i][1];
  echo "<br>" . $darbuotojai[$i][2];
  $i++;
}

echo "for each <br>";
foreach ($darbuotojai as $stalcius) {
  foreach ($stalcius as $staltukas) {
    echo $staltukas;
  }
}
