<?php

   $val1=$_POST['val1'];
    $val2=$_POST['val2'];
  
        # test if input is_numeric
        if(is_numeric($val1)&&is_numeric($val2)){
            
            # test if calc is not null
            if(isset($_POST['calc'])){
                
                # switch statement for value of calc
                switch($_POST['calc']){
                    case "add":
                        $result=$val1+$val2;
                    break;
                    case "sub":
                        $result=$val1-$val2;
                    break;
                    case "mul":
                        $result=$val1*$val2;
                    break;
                    case "div":
                        $result=$val1/$val2;
                    break;
                }
                echo "Calculation result: $result";
            }
            if(isset($_POST['calc'])==null){ echo "Invalid entry - please retry"; }
        }
        else{ echo "Invalid entry - please retry"; }
   
    ?>