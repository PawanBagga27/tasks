<?php

function task_function($var)
{
for ($i=1; $i <= $var ; $i++) {
	switch ($i) {
			case $i%5==0&&$i%3==0:
			echo "Linianos";
			echo "<br>"; 
			echo "<pre>"; 
			break;
			case $i%3==0:
			echo "Linio";
			echo "<br>"; 
			echo "<pre>"; 
			break;

			case $i%5==0:
			echo "IT";
			echo "<br>"; 
			echo "<pre>"; 
			break;
			
			default:
			echo $i; 
			echo "<br>"; 
			echo "<pre>"; 
			break;
	}
	}	
}
task_function(200);  

?>
