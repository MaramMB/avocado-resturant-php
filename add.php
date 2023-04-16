<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add food</title>
</head>

<body>
  <div class="wrapper">
    <h1>Add food</h1>
    <?php
    if (isset($_POST["submit"])) {
      $con = mysqli_connect("localhost", "root", "");
    //   if ($con->connect_err) {
    //     die("Could not connect to DB: " . mysqli_error($con));
    //   }
      mysqli_select_db($con, "resturant");

      $id = $_POST['id'];
      $namee = $_POST['namee'];
      $price = $_POST['price'];
      $typee = $_POST['typee'];
      $image = $_POST['image'];
      $note = $_POST['note'];

      $query = "INSERT INTO food(id, namee, price, image,note,typee)VALUES('$id', '$namee','$price', '$image','$note', '$typee')";
      $res = mysqli_query($con, $query);
      if ($res) {
        echo "<h2>food Added Successfully</h2>";
      } else {
        echo "<h2>Failed to add food</h2>";
      }
    } else {
      echo "<h2>Failed to add food</h2>";
    }

    mysqli_close($con);
    ?>
  </div>

</body>

</html>