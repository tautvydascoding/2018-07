<?php
// Construct a new UTC date.  Always specify UTC unless you really know what you're doing!
$date = new DateTime('2011-05-04 05:00:00', new DateTimeZone('UTC'));
 
// Add ten days to our initial date
$date->add(new DateInterval('P10D'));
 
echo($date->format('Y-m-d h:i:s')); // 2011-05-14 05:00:00
 
// Sadly we don't have a Middle Earth timezone
// Convert our UTC date to the PST (or PDT, depending) time zone
$date->setTimezone(new DateTimeZone('America/Los_Angeles'));
 
// Note that if you run this line yourself, it might differ by an hour depending on daylight savings
echo($date->format('Y-m-d h:i:s')); // 2011-05-13 10:00:00
 
$later = new DateTime('2012-05-20', new DateTimeZone('UTC'));
 
// Compare two dates
if($date < $later)
    echo('Yup, you can compare dates using these easy operators!');
 
// Find the difference between two dates
$difference = $date->diff($later);
 
echo('The 2nd date is ' . $difference->days . ' later than 1st date.');
?>