<?php
$connection =mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'hotel');
if(isset($_POST['delete'])){
    $cin=$_POST['cin'];
    $query="DELETE FROM hotel_clients where cin='$cin'";
    $query_run =mysqli_query($connection,$query);
    if($query_run){
        echo'<script> alert ("Reservation annulé");</script>';
        header("location:client.php");
    }
    else{
        echo'<script> alert("cannot cancel");</script>';
    }
}
?>