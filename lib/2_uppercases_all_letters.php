<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
  return strtoupper($str);
}

// Write your own "tests" below. A couple examples are provided for you.

echo "\nTesting that dog will return DOG.\n";
if (uppercasesAllLetters("dog") == "DOG") {
  echo "Success!";
}
else{
  echo "Failed!";
}

echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";


?>
