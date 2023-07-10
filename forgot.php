<?php
include("connect.php");

  if(isset($_POST['reset'])){
   $email= $_POST['email'];

   $query ="SELECT * FROM  alogin WHERE email='$email'";

   $data =  mysqli_query($conn,$query);

   $total = mysqli_num_rows($data);

    if($total==1)
    {
      
      // header('location:adminform.php');
        // $_SESSION['user_name'] = $ur;
        echo"Email Verify Successfully";
      ?>
        <meta http-equiv = "refresh" content = "1; url = http://localhost/Library%20Management/changepass.php"/>
     <?php
    }
    else{
      echo"Wrong Email ";
    }




    }

?>





<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            
        }
        
        h2 {
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="email"]{
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        input[type="submit"] {
            background-color: blue;
            color: #fff;
            cursor: pointer;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        
    </style>
</head>
<body> 
<form method="POST">
    <div class="container">
        <h2>Email Verification</h2>
       
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your Email" required>
            </div>
            <div class="form-group">
                <input type="submit" name="reset" value="Verify Email ">
            </div>
        
    </div>
</form>
</body>
</html>


