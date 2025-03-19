<?php
// “foreach(…){…}” is the foreach php loop block code
// “$array_data” is the array variable to be looped through
// “$array_value “ is the temporary variable that holds the current array item values.
// “block of code…” is the piece of code that operates on the array values

$animals_list = array("Lion","Wolf","Dog","Leopard","Tiger");

foreach($animals_list as $array_values){

echo $array_values . "<br>";

}

?>