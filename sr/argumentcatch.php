<?php
$name = $_POST['name'];
echo $name;
$commandstring = 'ruby argumentcatch.rb '.$name.'';
echo exec($commandstring);
?>