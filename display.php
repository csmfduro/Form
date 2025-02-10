<?php include "connect.php";?>

<!DOCTYPE html>
<html lang="en" class="h-100 w-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container d-flex align-items-center flex-column h-100 w-100 justify-content-center">
  <h3 class = "text-center mb-5 fs-3 fw-bold text-sucess">Human data</h3>
  <table class="table table-stripped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Location</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $select = "select * from `person information`";

        $result = mysqli_query(mysql: $database, query: $select);

        if ($result) {
        while ($row = mysqli_fetch_assoc(result: $result)) {
        $id = $row['id'];
        $name = $row["username"];
        $email = $row["email"];
        $phone = $row["phone"];
        $location = $row["location"];

        echo "
            <tr>
              <th>$id</th>
              <td>$name</td>
              <td>$email</td>
              <td>$phone</td>
              <td>$location</td>
            </tr>";
  }
}
?>
  </tbody>
  </table>
</body>
</html>

