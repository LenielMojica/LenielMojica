<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($f= 1; $f<=100; $f++){
        if($f%3==0 and $f%5==0){
            echo $f, " Fizz Buzz <br>";
        }
elseif ($f%3==0)
{
    echo $f, " Fizz <br>";
}

    
    elseif($f%5==0) {
      
        echo $f, " Buzz <br>";} 

       
else{
    echo $f, "<br>";
}
    }
    ?>
</body>
</html>