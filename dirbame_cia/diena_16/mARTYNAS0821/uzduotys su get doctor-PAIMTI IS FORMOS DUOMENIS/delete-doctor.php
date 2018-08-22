<?php

include_once("db_functions_CRUD.php");

if (isset($_GET['nr'])) {
  $nr = $_GET['nr'];
  deleteDoctor($_GET['nr']);
}

echo " <h2> gydytojas, kurio numeris yra: $_GET[nr], buvo istrintas </h2> ";
echo "<META http-equiv='refresh' content='2;URL=indexs.php'> ";

