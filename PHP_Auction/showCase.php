
<style>
    .py-5{
        text-align: center;
        border: 1px solid red;
        font-weight: bold;
       width: 500px;
       padding: 50px;
       
       background-color: lightgray;
    }
 
</style>
<section class="py-5">
    
<?php

$fName = filter_input(INPUT_POST, 'firstName');
$lName = filter_input(INPUT_POST, 'lastName');
$userName = filter_input(INPUT_POST, 'userName');
$email = filter_input(INPUT_POST, 'email');
$phoneNum = filter_input(INPUT_POST, 'phoneNumber');
$password = filter_input(INPUT_POST, 'password');
$passCheck = filter_input(INPUT_POST, 'confirmPassword');
$whereYoHomeAt = filter_input(INPUT_POST, 'address');
$whereYoCityAt = filter_input(INPUT_POST, 'city');
$whereYoStateAt = filter_input(INPUT_POST, 'state');
$whereYoZip = filter_input(INPUT_POST, 'custZip');
$whatYoRoleB = filter_input(INPUT_POST, 'role');


    echo $fName, "<br />";
    echo $lName, "<br />";
    echo $userName, "<br />";
    echo $email, "<br />";
    echo $phoneNum, "<br />";
    echo $password, "<br />";
    echo $passCheck, "<br />";
    echo $whereYoHomeAt, "<br />";
    echo $whereYoCityAt, "<br />";
    echo $whereYoStateAt, "<br />";
    echo $whereYoZip, "<br />";
    echo $whatYoRoleB, "<br />";
   

?>
</section>