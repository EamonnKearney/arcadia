<?php

  $email = $_POST['email'];
  $forename = $_POST['forename'];
  $surname = $_POST['surname'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $postcode = $_POST['postcode'];
  $dob = $_POST['dob'];
  $password = $_POST['passwordReg'];

  echo $_POST['passwordReg'];

  $conn = mysqli_connect('localhost', 'root', 'Josh', 'Arcadia');

  if(mysqli_connect_errno()) {
    echo "Failed to Connect: " . mysqli_connect_error();
  }

  $query = "INSERT INTO members(Email, Forename, Surname, AddressLine1, AddressLine2, City, Postcode, DOB, Password) VALUES ('$email', '$forename', '$surname', '$address1', '$address2', '$city', '$postcode', '$dob', '$password')";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  mysqli_close($conn);

  echo "Success";

?>
