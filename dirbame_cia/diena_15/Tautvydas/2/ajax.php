<?php include_once('db_functions.php'); 

$sql = 'SELECT * FROM cars WHERE id="' . $_POST['id'] . '";';
$result = mysqli_query($connection, $sql);
$car_info = array();
while ($row = mysqli_fetch_assoc($result)) {
    $car_info += $row;
}
?>

<h4 class='mt-4'><?php echo $car_info['model'] . " (" . $car_info['number'] . ")"; ?></h4>
<div>Model: <?php echo $car_info['model'] ?></div>
<div>Number: <?php echo $car_info['number'] ?></div>
<div>Year: <?php echo $car_info['year_made'] ?></div>