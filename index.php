<!-- Save the following string “the cat jumped over the fence at a speed never imagined” into a newly created variable. Then do as follows:-->

<?php
    $string = "the cat jumped over the fence at a speed never imagined";

    // Save the string as an array into a new variable by splitting each word by space.

    $array = explode(' ', $string);
    print_r($array);

    echo '<br>';

    // Convert each word with three letters of less into uppercase.

    foreach($array as $arr){
        $arrnum = strlen($arr);

        if($arrnum <= 3){
            $arr = strtoupper($arr);
        }

       print_r($arr);
       echo '&nbsp';
    }

    echo '<br>';

    // Get two random words and delete them from the array.

    $random1 = array_rand($array);
    
    $random2 = array_rand($array);

    if($random1 != $random2){
        unset($array[$random1],$array[$random2]);
    }

    print_r($array);

    echo '<br>';

    // Make the array back into a string and save it into a new variable $finalText.

    $finalText = implode(' ', $array);
    print_r($finalText);

    echo "<br>";

    // Echo the following text: “The text is ‘$finalText’ and it has X words”. 

    $x = str_word_count($finalText);

    echo "The text is: \" $finalText \" and it has $x words."



?>