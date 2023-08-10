<?php  

//Getting for the value of the post parameters

$room=$_POST['room'];

//checking the string size
if(strlen($room)>20 or strlen($room)<2){
    $message="Please choose a name between 2 to 20";
    echo '<script language="javascript"> ';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/chatroom"';
    echo '</script>';
}

//check whether the variable has alpha numeric or not
else if(!ctype_alnum($room)){
     $message="Please choose a  alpha numeric room name";
    echo '<script language="javascript"> ';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/chatroom"';
    echo '</script>';


}
else{
    //connect to the database
    include '_dbconnect.php';
}
//Check if the room exist
$sql="select * from rooms where roomname= '$room'";
$result=mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)>0){
        //The mysqli_num_rows() function returns the number of rows in a result set.
    $message="Please choose a different name, this name is already exist";
    echo '<script language="javascript"> ';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/chatroom"';
    echo '</script>';

    }
    else{
        $sql="INSERT INTO `rooms` ( `roomname`, `stime`) VALUES ( '$room', current_timestamp()); ";
        if(mysqli_query($conn,$sql)){
            $message="Your room is ready and you can chat now";
            echo '<script language="javascript"> ';
            echo 'alert("'.$message.'");';
            echo 'window.location="http://localhost/chatroom/rooms.php?roomname='.$room.'"';
            echo '</script>';

        }
    }

}



?>