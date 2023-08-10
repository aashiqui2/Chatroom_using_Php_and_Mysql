<?php  
//Get paraemters
$roomname=$_GET['roomname'];
//connect to the database
include '_dbconnect.php';

//execute sql to check whether room exist

$sql="select * from rooms where roomname='$roomname'";
$result=mysqli_query($conn,$sql);
if($result){

    //check if rooom exists 
    if(mysqli_num_rows($result)==0){
        $message="this room does not exist try creating a new rooms";
    echo '<script language="javascript"> ';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/chatroom"';
    echo '</script>';


    }
}
else{
    echo "error".mysqli_error($conn);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>MyAnonymousChat.com</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/product/">

    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">




    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<!-- <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c"> -->


    <!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> -->

    
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.anyClass{
    height: 350px;
    overflow-y: scroll;
}
</style>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">MyAnonymousChat.com</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="index.php">Home</a>
    <a class="p-2 text-dark" href="#">About</a>
    <a class="p-2 text-dark" href="#">Contact</a>
    <!-- <a class="p-2 text-dark" href="#">Pricing</a> -->
  </nav>
  <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
</div>

<h2>Chat Messages-  <?php  echo $roomname; ?></h2>

<div class="container">
    <div class="anyClass">
  <!-- <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span> -->
  </div>
</div>


<input type="text" class="form-control" name="usrmsg" id="usrmsg" placeholder="Add message"><br>
<button class="btn btn-primary" name="submitmsg" id="submitmsg">Send</button>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<!-- credits:https://releases.jquery.com/ -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


<script type="text/javascript"> 
//Check for new message every 1 second

setInterval(runFunction,1000);
function runFunction(){
    $.post("htcont.php",{room:'<?php echo $roomname ?>'},
    function(data,status){
        document.getElementsByClassName('anyClass')[0].innerHTML=data;
    })
}


 
//using enter key to submit the message credit:https://www.w3schools.com/howto/howto_js_trigger_button_enter.asp
var input = document.getElementById("usrmsg");
input.addEventListener("keyup", function(event) {
  event.preventDefault();
  if (event.keyCode === 13) {
    document.getElementById("submitmsg").click();
  }
});



//credits:https://www.w3schools.com/jquery/ajax_post.asp
//if user submits the form 
$("#submitmsg").click(function(){
        var clientmsg=$("#usrmsg").val();
    $.post("postmsg.php", {text:clientmsg,room:'<?php echo $roomname ?>',ip:'<?php echo $_SERVER['REMOTE_ADDR'] ?>' },
    function(data,status){
        document.getElementsByClassName('anyClass')[0].innerHTML= data;});
        $("#usrmsg").val("");
        return false;
    });



</script>
</body>
</html>
