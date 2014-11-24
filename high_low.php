<?php
$number = rand(1 , 100);

$counter = 0;

$guess = 0;

do {
    //code goes here!

    fwrite(STDOUT, 'Guess? ');

    $guess = trim(fgets(STDIN));

    //var_dump($guess);

        if (is_numeric($guess)) {

            if ($guess > $number) {
            echo "LOWER \n";
            }

            elseif ($guess < $number) {
            echo "HIGHER \n";
            }
        
        }

        else {

            while (1 == 1) {
                echo "NOT A NUMBER!";
            }

        }

    $counter++;

   //code stops here! 

} while ($guess != $number);

echo "Good guess! \n";

echo "Number of guesses: $counter\n";

exit(0)

?>