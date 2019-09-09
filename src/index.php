<?php

//variables
    $x=4;
    $y=5;
    $sum=$x+$y;
    $var1="Welcome to PHP\n";
    print nl2br($var1);  // put html line breaks at the \n positions
    print($sum);

//arrays
    $odd_numbers=[1,3,5,7,9];
    $even_numbers=[2,4,6,8];
    $first=$odd_numbers[0]; //normal index
    echo "<br/>";

    unset($odd_numbers[3]); //remove particular index
    
    print(reset($odd_numbers)); //first element
    print(end($odd_numbers)); //last element
    print(count($odd_numbers)); //count of elements
    echo "<br/>";

    array_push($odd_numbers,6); //push into array end
    array_pop($odd_numbers); //remove last element
    array_unshift($odd_numbers,5); //add to array start
    array_shift($odd_numbers); //remove first element

    $allnum=array_merge($odd_numbers,$even_numbers); //merge two arrays
    sort($allnum); //sort array asc
    rsort($allnum); //sort array desc
    $allnum=array_slice($allnum,4);
    $allnum=array_splice($allnum,2);
    print_r($allnum);

    echo "<br/>";

//arrays with keys (dictionary)
    $phonen=["A"=>4,"B"=>5,"C"=>"JJ"];
    $phonen["D"]="DF";
    print_r($phonen);
    echo "<br/>";
    print_r(array_keys($phonen));
    echo "<br/>";
    print_r(array_values($phonen));
    echo "<br/>";

//control structures
    echo "<br/><b>Control Structures</b><br/>";
    
    if($x<$y)
        echo "<p>if condition true</p>";
    
    if($x>$y)
        echo "<p>if condition not true</p>";
    else
        echo "<p>else condition</p>";

    $alphabet="y";

    switch($alphabet){
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
            echo "Vowel<br/>";
            break;
        default:
            echo "Consonant<br/>";
    }

    echo "<br/>";

// looping

    echo "<b>Looping Structures</b><br/><br/>";

    for ($i = 0; $i < 5; $i++){
        $product = 10 * $i;
        echo "The product of 10 * $i is $product <br/>";
    }

    echo "<br/>";

    foreach($odd_numbers as $i){
        echo $i . "<br/>";
    }

    echo "<br/>";

    foreach($phonen as $key=>$value){
        echo "$key is $value" . "<br/>";
    }

    echo "<br/>";

    $i = 0;
    while ($i < 5){
        echo $i + 1 . "<br>";
        $i++;
    }
    
    echo "<br/>";
    
    $i = 9;
    do{
        echo "$i is"." <br>";
    }
    while($i < 9);

    echo "<br/>";

//user-derfined functions
    function kilometers_to_miles($kilometers = 0)
    {
    $miles_scale = 0.62;
    return $kilometers * $miles_scale;
    }
    echo kilometers_to_miles(100);

//links
    echo "<br/>";
    echo "<a href='/reg.php'>Registration</a>";
    
?>