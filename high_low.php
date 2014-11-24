<?php

if ($argc == 3) {
    //code goes here; what happens now?
    $number = rand($argv[1], $argv[2]);
}

else { $number = rand(1 , 100);

}

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

        elseif ($guess > $argv[2]) {
            echo "Number too high!";

        }

        elseif ($guess < $number) {
            echo "HIGHER \n";
        }
    }
    
    $counter++;

   //code stops here! 

    } while ($guess != $number);

    echo "Good guess! \n";

    echo "Number of guesses: $counter\n";

    exit(0)

    ?>