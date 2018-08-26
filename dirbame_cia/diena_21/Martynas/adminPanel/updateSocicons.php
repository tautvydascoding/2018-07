
<?php
include("Aheader.php");

?>

      <h2 class='mainh2'>ICONELIU ATNAUJINIMAS </h2>
        <form action="#" method="get" class='socinos_form' name="socform" onsubmit="return validateForm()">
            <input type="number" name="id" value="<?php echo $_GET['id'] ?>" placeholder="Iconeles ID.." >
            <input type="text" name="newName" value="" placeholder="Pavadinimas is IONIC..">
            <input type="text" name="newTitle" value="" placeholder="Iconeles trumpinys.."><br>
            <button type="submit" class="btn btn-primary btn-vidury">Atnaujinti</button>
        </form>
        <?php
        if (isset($_GET['newName'])) {
          $atnaujinti = socIconsUpdate($_GET['id'], $_GET['newName'], $_GET['newTitle']);
          echo " <h2 class='mainh2'>Sekmingai atnaujinta </h2><br>";
          echo "<META http-equiv='refresh' content='3;URL=socialIcons.php'>";
        } else {
          echo "  Iveskite naujus iconeles duomenis<br>";
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