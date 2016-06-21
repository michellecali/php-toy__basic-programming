<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  return array_sum($arr);
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that [10, 5, 2] will return 17.\n";
$arr = array(10, 5, 2);
if (addUpNumbers($arr) == 17) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\n###################################################################\n";
echo "Tests complete.\n";


?>
