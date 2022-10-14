<?php

if(isset($_POST['Register'] ))
{
    $data = print_r($_POST);
    echo $data;
    echo "<br/>";
    echo "Registeration Successful";
    $name = $_POST['fname'] . " " . $_POST['lname'] . " ";
    $email = $_POST['email']. " ";
    $dob = $_POST['dob']. " ";
    $sex = $_POST['sex']. " ";
    $country = $_POST['country']. " ";
    $newdata = array($name, $email, $dob, $sex, $country);
    $file = 'userdata.csv';
    $cache = fopen($file, 'a');
    if($cache){
        echo '------file waiting to be written into -----';
        if(fputcsv($cache, $newdata)){
            echo "Data saved successfully";
            echo "<br/>";
        }else{
            echo 'error writting into file';
            echo "<br/>";
        }
        }
    else{
        echo 'error opening file';
        echo "<br/>";
    }

}else{
    echo "error saving file";
     }


    

  


