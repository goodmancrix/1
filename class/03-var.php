<?php
$name = "Chris";
echo "Hello $name <br>";
echo 'Hello $name <br>'; //the diff between "" and ''

echo "Hello $name 123 <br>"; // name and 123 have space between them
echo "Hello $name123 <br>"; //error, cannot define $name123

echo "Hello {$name}123 <br>"; //put {}to remove the space between the word and numbers
