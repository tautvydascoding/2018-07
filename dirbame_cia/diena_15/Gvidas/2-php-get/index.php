<!-- // 1. sukurti index.php
// 2. parasyti PHP koda:
    $x = $_GET['tekstas'];
    echo $x;
// 3. pasileisti Narsykleje si puslapi
// 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
    ?tekstas=Mano ivestas tekstas -->
<form action="#" method="get">
<textarea name="tekstas" rows="4" cols="40"></textarea><br>
<button type="submit">siusti</button>
</form>
<?php
if (isset($_GET['tekstas'])) {
    $x = $_GET['tekstas'];
    echo $x;
}
