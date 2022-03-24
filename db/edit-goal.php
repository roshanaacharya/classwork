<?php
   include('connect.php');
    $g = $_POST['goal_title'];
    $a =$_POST['goal_accomplish_date'];
   $d =$_POST['goal_descriptions'];
   $s =$_POST['goal_status'];
    $idd= $_POST['id'];
 
    if($g==''){
    $msg= "name is required";
}else if($d==''){
    $msg= "contact is required";
}else{
 $query ="UPDATE goal SET title ='$g', accomplish_date ='$a', descriptions ='$d', status ='$s'  WHERE id='$id'";
    if(mysqli_query($conn,$query)){
        header('location:../home.php?msg=successfully updated');
    }else{
        header('location:../home.php?msg=' .mysqli_error($conn));
    
}
}
?>