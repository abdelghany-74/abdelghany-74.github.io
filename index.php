<?php 

include './shared/conn.php';
include './shared/header.php';

$row="";
//? Insert 

if(isset($_POST['submit'])) {
  $message = $_POST['message'];
  $insert = "INSERT INTO messages VALUES(default,'$message')";
  $result=mysqli_query($connection, $insert);
  if ($result) {
    echo "Your Message is sent thank you ❤️";
  } 
}
?>

<!--  ==============  Message  ====================  -->

<body>
  <div class="login-box">
    <img style="width: 200px;
  height: 200px;
  border-radius: 50%;
  text-align: center;
  position: relative;
  top: 50%;
  left: 20%;" src="./shared/Photo.jpg" alt="">
    <h2>Hello dear, You can write your message here</h2>
    <form method="POST" enctype="multipart/form-data">
      <div class="user-box">
        <textarea type="text" name="message" required></textarea>
        <label>Message</label>
      </div>
      <button name="submit">
        Send
      </button>
    </form>
  </div>
</body>

</html>