<?php 

if(isset($_POST['username'],$_POST['color'],$_POST['dish'] )){
    $color = $_POST['color'];
    $username = htmlentities($_POST['username']);
    $dish = htmlentities($_POST['dish']);

    if(empty($username) && empty($color)!=true && empty($dish))
    {
    echo "appropriate message";
     exit();
    }else{
        echo "Thanks for your selection $username <br>
        You really enjoy $dish <br>
        - especially with a nice $color wine";
    }
         
 }else{
     echo "appropriate message";
 }
 

?>