<!DOCTYPE html>
<html>
<head>
	<title>Morse Code</title>
</head>
<body>

    <form action="#" method="POST" name="morse coder">

        <input type="text" name="message" placeholder="enter message">

        <input type="submit" value="Submit">

    </form>

<form action="#" method="POST" name="morse decoder">

        <input type="text" name="Morse" placeholder="enter morsecode">

        <input type="submit" value="Submit">

    </form>



</body>
</html>



<?php


$morseArray = [
	"a"=>".-",
    "b"=>"-...", 
    "c"=>"-.-.", 
    "d"=>"-..", 
    "e"=>".", 
    "f"=>"..-.", 
    "g"=>"--.", 
    "h"=>"....", 
    "i"=>"..", 
    "j"=>".---", 
    "k"=>"-.-", 
    "l"=>".-..", 
    "m"=>"--", 
    "n"=>"-.", 
    "o"=>"---", 
    "p"=>".--.", 
    "q"=>"--.-", 
    "r"=>".-.", 
    "s"=>"...", 
    "t"=>"-", 
    "u"=>"..-", 
    "v"=>"...-", 
    "w"=>".--", 
    "x"=>"-..-", 
    "y"=>"-.--", 
    "z"=>"--..",
    " "=>"|",
    "!" => ""
 ] ;


if(isset($_POST['message'])) {

    $message = $_POST['message'] ;

    var_dump($message) ;
    $letters = str_split($message) ;


    var_dump($letters) ; 

     


   foreach ($letters as $checkValue) {

        foreach ($morseArray as $key => $value) {

            if($key == $checkValue) {

                echo $value."!" ;
            }
        }
        
    }
}




    if(isset($_POST['Morse'])){

    $morse= $_POST['Morse'];
    $morsemessage= explode("!", $morse);
    var_dump($morsemessage);
    var_dump($morse);

    foreach ($morsemessage as $checkmorse) {

        foreach (array_flip($morseArray) as $key => $value) {

            if($key == $checkmorse) {

                echo $value;
            }
        }
        
    }

  }


    





















  //   if(isset($_POST['Morse'])){

  //   $morse= $_POST['Morse'];
  //   $morsemessage= ($morse);
  //   var_dump($morsemessage);
  //   var_dump($morse);

  //   foreach ($morseArray as $checkmorse) {

  //       foreach ($morseArray as $value => $key) {

  //           if($value == $checkmorse) {

  //               echo $value ;
  //           }
  //       }
        
  //   }

  // }



?>