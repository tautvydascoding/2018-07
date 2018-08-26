
<?php
include("Aheader.php");

?>

      <h2 class='mainh2'>Carusel nuotrauku pridejimas </h2>
        <form action="#" method="get" class='carusel_form' name="socform" onsubmit="return validateForm()">
            <input type="text" name="newName" value="" placeholder="Nuotraukos pavadinimas su galune, pvz 'jpg' 'gif'..">
            <input type="text" name="newTitle" value="" placeholder="trumpas aprasymas"> 
              <br>
            <button type="submit" class="btn btn-success btn-carusel">Prideti</button>
        </form>
        <?php
        if (isset($_GET['newName'])) {
          $sukurti = createCaruselImg($_GET['newName'], $_GET['newTitle']);
          echo "<h2> Nauja nuotrauka sekmingai sukurta! </h2>";
          echo "<META http-equiv='refresh' content='3;URL=carusel.php'> ";
        } else {
          echo "Iveskite duomenis";
        }



        ?>


<script> 
function validateForm() {

  var ivedimas = document.forms["socform"]["newName"].value;
  if (ivedimas == "") {
    alert("Ooo NE! pamirsote irasyti iconeles pavadinima! ");
    return false;
  }
}

</script>








<?php
include("Afooter.php")
?>