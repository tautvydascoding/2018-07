
<?php
include("Aheader.php");

?>

      <h2 class='mainh2'>Home teksto atnaujinimas </h2>
        <form action="#" method="get" class='mainT_form' name="socform" onsubmit="return validateForm()">
        <input type="number" name="id" value="<?php echo $_GET['id'] ?>" placeholder="teksto ID.." >
            <input type="text" name="newTitle" value="" placeholder="Naujas pagrindinis Title">
            <input type="text" name="newSubtitle" value="" placeholder="Naujas Subtitle"><br>
            <button type="submit" class="btn btn-primary btn-homet">Atnaujinti</button>
        </form>
        <?php
        if (isset($_GET['newTitle'])) {
          $atnaujinti = homeTextUpdate($_GET['id'], $_GET['newTitle'], $_GET['newSubtitle']);
          echo " <h2 class='mainh2'>Sekmingai atnaujinta </h2><br>";
          echo "<META http-equiv='refresh' content='3;URL=hometext.php'>";
        } else {
          echo "  Iveskite naujus teksto duomenis<br>";
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