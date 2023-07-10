
<html>
    <head>
        <title>Database</title>
        <style>
            body{
                background-color: rgb(156, 156, 199);
            }
            table{
                background-color: white ;
            }

            .update , .Delete{
                background-color: green;
                color: white;
                border-radius: 3px; 
                cursor: pointer;
            }
            .Delete{
                background-color: red;
            }
            .lg,.ad{
                width: 70px;
                padding: 10px;
                font-size: 16px;
                background-color: red;
                border-radius: 5px;
                cursor: pointer;
            }
            .ad{
                background-color: green;
                width:100px
            }
            .lgt{
                color:white;
                text-decoration:none;
            }
            .adf{
                color:white;
                text-decoration:none;
                font-size:small;
            }
        </style>
    </head>
    <body>
        <button class="lg"><a href="logout.php" class="lgt">Logout</a></button>
        <button class="ad"><a href="adminform.php" class="adf">Add Book</a></button>
    </body>


<?php
include("connect.php");
session_start();
error_reporting(0);
//session
$userProfile =$_SESSION['user_name'] ;
  if($userProfile == true){
    
  }
  else{
    header('location:login.php');
  }

  
$query = "SELECT * FROM addbook ";
$data =  mysqli_query($conn,$query);

$total = mysqli_num_rows($data);


if($total != 0)
{
    ?>
        <h2 align="center">All Records</h2>

       <table align="center" border ="3px" cellspacing="10">
        <tr>
         <th width="100px">ID</th>
         <th width="100px">Title</th>
         <th width="100px">Author</th>
         <th width="100px">Genre</th>
         <th width="150px">Operations</th>
        </tr>
      
    <?php
    while($result = mysqli_fetch_assoc($data))
    {

        echo 
        "<tr>
        <td>".$result['id']."</td>
        <td>".$result['Title']."</td>
        <td>".$result['Author']."</td>
        <td>".$result['Genre']."</td>
        <td>
        <a  href='update.php?id=$result[id]'><input type='submit' value='Update' class='update'>
        </a>
        <a  href='Delete.php?id=$result[id]'><input type='submit' value='Delete' class='Delete' onclick ='return checkdelete()'>
        </a>
        </td>
        </tr>";
    }


}
else
{
    echo "no record form";
}



?> 
</table>

<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this data');
    }

</script>

 
</html>
