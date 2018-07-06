<?php 
// header( "Location: home.php" );
// ob_start();
require_once 'db_config.php';


	$name = $_POST['name'];
 
    $male_status = 'unchecked';
    $female_status = 'unchecked';

    $selected_radio = $_POST['gender'];

        if ($selected_radio == 'male') {
                $male_status = 'checked';
                 $selected_radio='male';
        }else if ($selected_radio == 'female') {
                $female_status = 'checked';
                $selected_radio = 'female';
         }

               $checkedvalue = $_POST['check_list'];
               $checkboxvalue = implode(',',$checkedvalue);
               $value=$checkboxvalue;

              $selected_val = $_POST['designation']; 
                    

  $sql="insert into button_table(name,gender,language,designation) values('$name','$selected_radio','$value','$selected_val')";
          if($conn->query($sql)===TRUE){
             header( "Location: tableshow.php" );
           // echo"record success";
  }
 //   $conn->close(); 
 ?>
<?php //header( "Location: tableshow.php") ?>

   
 