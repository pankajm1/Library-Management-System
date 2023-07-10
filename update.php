<?php include ("connect.php");

$id = $_GET['id'];

$query = "SELECT * FROM addbook  where id='$id'";
$data =  mysqli_query($conn,$query);

$result = mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>
<html>
<head>
  <title>Update Details</title>
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
    <h2>Update Details</h2>
    <form method="post" >
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" value="<?php echo $result['Title']?>" name="title" id="title" required>
      </div>
      <div class="form-group">
        <label for="author">Author:</label>
        <input type="text"  value="<?php echo $result['Author']?>" name="author" id="author" required>
      </div>
      <div class="form-group">
        <label for="genre">Genre:</label>
        <input type="text"  value="<?php echo $result['Genre']?>" name="genre" id="genre" required>
      </div>
      
      <div class="form-group">
        <button  type="submit"  >Update</button>
      </div>
     
    </form>
     
  </div>

 



 
</body>
</html>



<?php include("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $title = $_POST['title'];
  $author = $_POST['author'];
  $genre = $_POST['genre'];


  $stmt = "UPDATE addbook SET title='$title', author='$author', genre='$genre' WHERE id='$id'";

  $data = mysqli_query($conn, $stmt);

  if ($data) {
    echo 'Record update successfully ';
    ?>
        <meta http-equiv = "refresh" content = "1; url = http://localhost/Library%20Management/display.php"/>
    <?php
  } else {
    echo 'Error updating record.';
  }
}
?>