
<form action="registracija.php" method="GET">
  <label for="Vardas,pavarde"> Jusu vardas pavarde</label> <br>
<input type="text" name="vardas" required autofocus maxlength="30">
<input type="text" name="pavarde" required> <br>

<label for="email, number"> Jusu el. pastas ir telefono numeris.</label> <br>
<input type="email" name="el. pastas" >
<input type="number" name="telefonas" required pattern="+370[9]{8}" placeholder="+370.." title="Reikia ivesti +370"> <br>

<button type="submit" class="mt-2 btn btn-primary"> Registracija</button>

</form>