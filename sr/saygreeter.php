<?php
$name = $_POST['name'];
echo $name;
$commandstring = 'ruby '.$name.'';
echo exec($commandstring);
?>