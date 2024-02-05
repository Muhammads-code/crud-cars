<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>info_section</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>

<nav class="navbar navbar-light justify-content-center fs-3 md-5"
     style="background-color: tan">
    <h1>Vehicle Details</h1>
</nav>

<div class="container">
  <?php
  
  if(isset($_GET['msg']))
  {
    $msg = $_GET['msg'];
    echo '<div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
'.$msg.'
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  
  
  ?>

    <a href="add_new.php" class="btn btn-dark mb-3 mt-4">Add new</a>

    <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Modal</th>
      <th scope="col">Cost (Pkr)</th>
      <th scope="col">Company</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
include "db_conn.php";

$sql = "SELECT * FROM `cars`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <tr>
      <th> <?php  echo $row['id'] ?> </th>
      <th> <?php  echo $row['Name'] ?> </th>
      <th> <?php  echo $row['Modal'] ?> </th>
      <th> <?php  echo $row['Price'] ?> </th>
      <th> <?php  echo $row['Company'] ?> </th>

        <td>  
            <a href="edit.php?id=<?php  echo $row['id']  ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
            <a href="delete.php?id=<?php  echo $row['id']  ?>" class="link-dark"><i class="fa-solid fa-trash-can fs-5"></i></a> 
        </td>
      </tr>

    <?php

}

?>

  </tbody>
</table>








</div>


















  <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>