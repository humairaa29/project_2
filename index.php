<?php

if(isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["phoneNum"])){
    $varName=$_POST["name"];
    $varsurname=$_POST["surname"];
    $varPhoneNum=$_POST["phoneNum"];
}
else{
    $varName="";
    $varsurname="";
    $varPhoneNum="";
}

$varArray=array("Tony", "Steve", "Jeff","Franklin");
print_r($varArray);
//echo $varArray[0];

//-----------------------------------------------------------------------------------
$varHtml=   "<html>
            <head></head>
            <body><h1>Git Demo</h1>
            <form action='http://localhost/lessons/index.php' method='POST'>
            <p>Name: <input type='text' name='name'</input><br/>
            Surname: <input type='text' name='surname'</input><br/>
            Phone Number: <input type='text' name='phoneNum'</input><br/>
            <input type='submit' value='Submit'></p>
            </form>
            </body>
            </html>";
echo $varHtml;
echo $varName." ".$varsurname."<br/>".$varPhoneNum;

?>