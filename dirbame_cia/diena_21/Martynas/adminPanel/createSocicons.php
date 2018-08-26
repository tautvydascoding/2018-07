
<?php
include("Aheader.php");

?>

      <h2 class='mainh2'>ICONELIU pridejimas </h2>
        <form action="#" method="get" class='socinos_form' name="socform" onsubmit="return validateForm()">
            <input type="text" name="newName" value="" placeholder="Pavadinimas is IONIC..">
            <input type="text" name="newTitle" value="" placeholder="Iconeles trumpinys.."><br>
            <button type="submit" class="btn btn-success btn-vidury">Prideti</button>
        </form>
        <?php
        if (isset($_GET['newName'])) {
          $sukurti = createSocIcon($_GET['newName'], $_GET['newTitle']);
          echo "<h2> Nauja iconele sekmingai sukurta! </h2>";
          echo "<META http-equiv='refresh' content='3;URL=socialIcons.php'> ";
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