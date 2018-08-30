<?php

    // $str = "Hello Friend";

    // $arr1 = str_split($str);
    // $arr2 = str_split($str, 3);

    // print_r($arr1);
    // print_r($arr2);
    function letterToNumber($letter){
        $letterIntoAscii = ord(strtolower($letter)) - 97;
        return $letterIntoAscii;
    }
    
    function numberToLetter($number){
        $letter = chr(97 + $number);
        return $letter;
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        
        <style> @import url("css/style.css");</style>
       
    </head>
    <body >
         <?php
            
            $aValue = $_GET['A'];
            $bValue = $_GET['B'];
            $message = $_GET['message'];
            $messageAsString = str_split($message);
            //print_r($messageAsString);
            echo "\n";
            //echo "A = $aValue \n";
            //echo "B = $bValue \n" . "<br>";
            echo "Your message to encode was : " . $message . "<br>";
            echo "A was " . $aValue . "<br>";
            echo "B was " . $bValue . "<br>";
            echo "<br> <br>";
            $codedArray = array();
            foreach ($messageAsString as $values){
                if($values == ' '){
                    array_push($codedArray, " ");
                } else{
                    //echo "Values = " . $values . "<br>";
                    echo $values . " turns into ";
                    $let = letterToNumber($values);
                    echo $let . " as a number." . "<br>";
                    //echo "Letter to Number = " . $let . "<br>";
                    echo "Then, ".$aValue."(". $let . ")+".$bValue;
                    //echo $aValue;
                    //echo $bValue;
                    //echo "\n";
                    $after = $let * $aValue + $bValue;
                    echo " = ". $after . "<br>";
                    $after2 = $after % 26;
                    //echo "After = " . $after . "<br>";
                    $coded = numberToLetter($after2);
                    echo "Then, " . $after . "mod(26) = " . $after2 . "<br>";
                    echo "Lastly, " . $after2 . " as a letter is " . $coded . "<br>";
                    //echo $let . "as number is " . $after . ". modded = " . $after2 . ". letter = " . $coded . "<br>";
                    //echo $coded;
                    array_push($codedArray, $coded);
                    echo "<br>";
                    //echo $let . " turns into " . $coded . "<br>";
                }
            }
            echo "<br> <br> <br>";
            echo "Your message encoded is : ";
            foreach($codedArray as $letter){
                echo $letter;
            }
    
            //echo $message;
        ?>
        
    </body>
    
</html>