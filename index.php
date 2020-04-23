<?php

    include_once 'ClassFigura.php';


    // Creating the connection to the database using the connection parameters
    $var1 = new mysqli('127.0.0.1', 'root', 'mySuperSecretNobodyToSeePassword');

    // Checking if we were able to connect
    if ($var1->connect_error) 
    {
        //If the connection Failed terminate the script
        die("Connection failed: " . $var1->connect_error);
    }

    //It seems we were able to connect
    echo "Connected successfully";


    //Goint to validate if our class works

    $num1= 6;
    $num1= 2;

    //creatin the object
    $objeto = new figuraGeometrica($num1, $num2);

    //Checking the division
    $objeto->calculateDivisionOfnumbers(10,0);

    $var_figura=4;

    //cheching the Perimeter
    $objeto->calculateSquarePerimeter($var_figura);

    $objeto2 = new Circulo(3.1416);

    $objeto->calculateAreaCircle(4);

    //creating an array and print if the fruit is deliciuos or not

    //Trying with banana
    $var_to_validate = 'banana';

    $array = array('orange', 'apple', 'banana');

    for($i=0, $i<count($array), $i++)
    {

        if($var_to_validate=$array[$i])
        {
            echo "The fruit ".$array[$i]. "is delicious";
        }
    }

    //trying with orange
    $var_to_validate='orange';

    for($i=0, $i<count($array), $i++)
    {

        if($var_to_validate=$array[$i])
        {
            echo "The fruit ".$array[$i]. "is delicious";
        }
    }

    //trying with apple
    $var_to_validate = 'apple';

    for($i=0, $i<count($array), $i++)
    {

        if($var_to_validate=$array[$i])
        {
            echo "The fruit ".$array[$i]. "is delicious";
        }
    }


    echo "End of all the fun";



?>