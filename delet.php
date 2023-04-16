<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete meal</title>
</head>

<body>
  <div class="wrapper">
    <h1>Delete meal</h1>
    <?php
    $id=$_GET['id'];
    if(!isset($id))
      die("NO id Provided, Please Go Back!");
           
    $con = mysqli_connect("localhost", "root", "");
    if ($con->connect_errno) {
      die("Could not connect to DB: " . mysqli_error($con));
    }
    mysqli_select_db($con, "resturant");

    $query = "DELETE from food WHERE id='$id'";
    $res = mysqli_query($con, $query);
    if ($res) {
      echo "<h2>meal Deleted Successfully</h2>";
    } else {
      echo "<h2>Failed to Delete the meal!</h2>";
    }

    mysqli_close($con);
    ?>
  </div>

</body>

</html>