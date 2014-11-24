<?php
$number = rand(1 , 100);

do {
    //code goes here!

    fwrite(STDOUT, 'Guess? ');

    $guess = fgets(STDIN);

    if ($guess > $number) {
        echo "LOWER \n";
    }

    elseif ($guess < $number) {
        echo "HIGHER \n";
    }
   
   //code stops here! 

} while ($guess != $number);

echo 'Good guess!';

exit(0)

?>