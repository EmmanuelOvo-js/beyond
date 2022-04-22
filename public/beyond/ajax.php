<?php
include('conn.php');
if(isset($_POST["father_id"]) && !empty($_POST["father_id"])){
    $query = $db->query("SELECT * FROM states WHERE country_id = ".$_POST['father_id']);
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="">Select State</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
        }
    }else{
        echo '<option value="">child not available</option>';
    }
}


?>