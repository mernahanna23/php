<?php


$email = $_POST['email'];
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$age = $_POST['age'];
$password = $_POST['password'];

echo $email."<br>".$firstName."<br>".$lastName."<br>" .$age ."<br>" ;
  


$goodemail =  filter_var($email, FILTER_SANITIZE_EMAIL);
//print the result
echo 'email after sanitize = '.$goodemail ."<br>" ;
//check the result
if(filter_var($firstName, FILTER_VALIDATE_EMAIL)!== false){
    echo ' Good ';
    
    }else {
    echo ' bad <br>';
    
    } 

//sanitize age
$goodage =  filter_var($age, FILTER_SANITIZE_NUMBER_INT);
//print the result
echo 'age after sanitize = '.$goodage ."<br>" ;
//check the result
if(filter_var($age, FILTER_VALIDATE_INT)!== false){
    echo ' Good <br>';
    
    }else {
    echo ' bad <br>';
    
    }  
    
 $my_name =filter_var($firstName, FILTER_SANITIZE_SPECIAL_CHARS);
 echo $my_name."<br>" ; 
 $my_name2 =filter_var($lastName, FILTER_SANITIZE_SPECIAL_CHARS);
 echo $my_name2 ;
echo '<br>';

   session_start();
    $_session['username']= $firstName.$lastName;
    echo "Hi,  " .$_session['username'] ." ";
    
?>