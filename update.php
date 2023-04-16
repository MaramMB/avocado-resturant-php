<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Meal</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Update Meal</h1>
    <?php
    if (isset($_POST["submit"])) {
      $con = mysqli_connect("localhost", "root", "");
      if ($con->connect_errno) {
        die("Could not connect to DB: " . mysqli_error($con));
      }
      mysqli_select_db($con, "resturant");

      $id = $_POST['id'];
      $namee = $_POST['namee'];
      $price = $_POST['price'];
      $note = $_POST['note'];
      $image = $_POST['image'];
      $typee = $_POST['typee'];

      $query = "UPDATE food SET namee='$namee', note='$note', 
      price='$price', typee='$typee', image='$image'
      WHERE id='$id'";
      $res = mysqli_query($con, $query);
      if ($res) {
        echo "<h2>Meal Updated Successfully</h2>";
      } else {
        echo "<h2>Failed to Update Meal</h2>";
      }
    } else {
      echo "<h2>Failed to Update Meal</h2>";
    }

    mysqli_close($con);
    ?>

</body>

</html>