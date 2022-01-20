1. Write Sql Injection
<!-- Start of SQL Injection -->

  <!-- Sample Code -->
    $id = $_POST['id'];
    $query = "SELECT * FROM news WHERE id = $id";
    $stmt = $con->query($sql);

    foreach($stmt AS $row) {
      echo $row['id'] . " " . $row['short_description'] . " " . $row['article'];
    }
  <!-- End of Sample Code -->

  <!-- Sample SQL Injection -->
    $_POST['id'] = 1 OR 1=1; <!-- Value of id -->
  <!-- End of Sql Inject -->

  <!-- Result -->
    Return all rows from news table because 1=1 is true;
  <!-- End of Result -->

<!-- End of SQL Injection -->

2. Change Source Code (Make injection not workable)
<!-- Changed Source Code -->

  <!-- Prepared Statements protect against SQL Injection -->
  $id = $_POST['id'];
  $query = "SELECT * FROM news WHERE id = ?";
  $stmt = $con->prepare($sql);
  $stmt->execute([$id]);

  foreach($stmt AS $row) {
    echo $row['id'] . " " . $row['short_description'] . " " . $row['article'];
  }

<!-- End of Changed Source Code -->


3. Return 404 header if the article with requested id is not found
<!-- Sample Code -->
  <!-- Note: There are only 2 samples in the database thus only 2 rows -->
  $id = 3;
  $id = $_POST['id'];
  $query = "SELECT * FROM news WHERE id = ?";
  $stmt = $con->prepare($sql);
  $stmt->execute([$id]);
  $rowcount = $stmt->rowcount();
  if($rowcount < 1) {
    header('HTTP/1.0 404 Not Found');
  }

<!-- End of Sample  Code -->
