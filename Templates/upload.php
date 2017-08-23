<?php
if(isset($_POST['submit'])){

    //collect form data
    $Name of school = $_POST['Name of school'];
    $Upload file = $_POST['Upload file'];

    //check name is set
    if($Name of school ==''){
        $error[] = 'Name of school is required';
    }
//if no errors carry on
    if(!isset($error)){

        # Title of the CSV
        $Content = "Name of school, Upload file\n";

        //set the data of the CSV
        $Content .= "$Name of school, $Upload file\n";

        # set the file name and create CSV file
        $FileName = "formdata-".".csv";
        header("Content-Type: application/csv; charset=UTF-8");
        header("Content-Disposition: attachment;filename=user_data.csv");
        echo $Content;
        exit();
    }
}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}
?> 
