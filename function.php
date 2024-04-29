<?php 
include 'config/db_conn.php';
$editcontact = "";
$editdate = "";
$edittime = "";
session_start();
if(isset($_POST['submit'])){

$contact_number =  $_POST['contact_number'];
$date = $_POST['date'];
$time =  $_POST['time'];
$branch =  $_POST['branch'];
$editcontact = $_POST['editnumber'];
      $editdate = $_POST['editdate'];
      $edittime = $_POST['edittime'];
// $sql = "INSERT INTO appointments ( contact_number, date, time, branch ) VALUES ('$contact_number', '$date', '$time', '$branch')";
// $sql1 = mysqli_query($conn, $sql);
}
  

 
    
    if(isset($_POST['update'])){
      $editcontact = $_POST['editnumber'];
      $editdate = $_POST['editdate'];
      $edittime = $_POST['edittime'];
      
      $editid = $_POST['editid'];
      $updatecontact = $_POST['updatecontact'];
      $updatedate = $_POST['updatedate'];
      $updatetime = $_POST['updatetime'];

      $sql1 = "UPDATE appointments SET contact_number = '$updatecontact', date = '$updatedate', time = '$updatetime' ";
    $sqlquery = mysqli_query($conn, $sql1);
     echo '<script>alert("successfully booked")</script>';
    echo '<script>window.location.href = "booking-system.php"</script>';
    }
       


?>