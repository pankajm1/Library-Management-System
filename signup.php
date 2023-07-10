<?php include("connect.php");

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $pass_word = $_POST['pass_word'];

  
    $stmt =("INSERT INTO alogin (name, surname, email, user_name,pass_word) VALUES ( '$name', '$surname', '$email', '$user_name','$pass_word')");
  
    $data = mysqli_query($conn , $stmt);

    if ($data) {
      echo 'Register successfully!';
      ?>
      <meta http-equiv = "refresh" content = "1; url = http://localhost/Library%20Management/login.php"/>
    <?php
    } else {
      echo 'Not Register.';
    }
  
   }




?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      height:300px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .container input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .container input[type="submit"] {
      background-color: blue;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      
    }

  </style>
</head>
<body>
  <div class="container">
    <h2>Registration Form</h2>
    <form  method="post">
      <input type="text" name="name" placeholder="Name" required>
      <input type="text" name="surname" placeholder="Surname" required>
      <input type="text" name="email" placeholder="Email" required>
      <input type="text" name="user_name" placeholder="Username" required>
      <input type="text" name="pass_word" placeholder="Password" required>
      <input type="submit" value="Register">
    </form>
  </div>
</body>
</html>
