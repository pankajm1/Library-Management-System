
<?php include("connect.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  $title = $_POST['title'];
  $author = $_POST['author'];
  $genre = $_POST['genre'];

  $stmt = ("INSERT INTO addbook (title, author, genre) VALUES ( '$title', '$author', '$genre')");
  
  $data = mysqli_query($conn , $stmt);


  if ($data) {
    echo 'Book Added Successfully';
  } else {
    echo 'Error adding book.';
  }

 
}
?>








<!DOCTYPE html>
<html>
<head>
  <title>Library Management System - Add Book</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      padding-right: 40px
    }

    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .form-group button {
      width: 420px;
      padding: 10px;
      font-size: 16px;
      background-color: blue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

  </style>
</head>
<body>
  <div class="container">
    <h2>Add Book</h2>
    <form method="post" >
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
      </div>
      <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" required>
      </div>
      <div class="form-group">
        <label for="genre">Genre:</label>
        <input type="text" name="genre" id="genre" required>
      </div>
      
      <div class="form-group">
        <button  type="submit" >Add Book</button>
      </div>
     
    </form>
    
     <div class="form-group">
       <a href="display.php"> <button>Database</button></a>
      </div>

     <div class="form-group">
       <a href="logout.php"> <button>Logout</button></a>
      </div>
  </div>

 



 
</body>
</html>
