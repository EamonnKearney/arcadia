<?php
  // $titleVar = $_POST['title'];

  $conn = mysqli_connect('localhost', 'root', 'Josh', 'Arcadia');

  if(mysqli_connect_errno()) {
    echo "Failed to Connect: " . mysqli_connect_error();
  }

  // $query = "INSERT INTO testtable(Title) VALUES ('$titleVar')";

  // mysqli_query($conn, $query);

  //mysqli_close($conn);

  // echo "Success";

  $query = "SELECT * FROM menu ORDER BY itemCategory;";

  $res = mysqli_query($conn, $query);

  while($row = mysqli_fetch_assoc($res)) {
      $myArray[] = $row;
  }

  echo json_encode($myArray);

  mysqli_close($conn);
?>
