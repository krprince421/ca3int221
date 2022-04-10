<?php

$host = "localhost" ;
$username = "root" ;
$password = "prince" ;
$dbname = "university" ;
$conn = new mysqli( $host , $username  , $password , $dbname ) ;

$sql = "select solution from htmlsolution  " ;

if( $conn->connect_error ){
    die( $conn->connect_error ) ;
}


$numbers = array( -1, -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1 , -1  );

$numbers[1] =  $_POST['question1'] ;
$numbers[2] =  $_POST['question2'] ;
$numbers[3] =  $_POST['question3'] ;
$numbers[4] =  $_POST['question4'] ;
$numbers[5] =  $_POST['question5'] ;
$numbers[6] =  $_POST['question6'] ;
$numbers[7] =  $_POST['question7'] ;
$numbers[8] =  $_POST['question8'] ;
$numbers[9] =  $_POST['question9'] ;
$numbers[10] = $_POST['question10'] ;



$result = $conn->query( $sql ) ;
$count = 0 ;
$questionNumber = 1 ;
while($row = $result->fetch_assoc()) {

    if( $row["solution"] ==  $numbers[ $questionNumber ] )$count++ ;

    $questionNumber++ ;

  }




echo "You solved ".$count." question correctly " ;



?>