
 <div class='col-md-4 m-1'>
    <?php 

    for ($i = 1; $i < 5; $i++) {
      $gydytojas1 = getDoctor($i);
      echo $gydytojas1[name], $gydytojas1[lname];
       // kiek vardu? 1 ar daugiau?? 
    };

    ?>
  </div>
