<?php
include_once("conn.php");

function access_control($conn)
{

  //check if token exists
  if (isset($_COOKIE['token'])) {
    $token = $_COOKIE['token'];

    //Get Username allocated to the token
    $stmt = $conn->prepare("SELECT username FROM tokens WHERE access_token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $username = $row['username'];

      // Get more details about user.....###Just changed the db table from employee to users....########..
      $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
      $stmt->bind_param("s", $username);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows == 1) {
        $user_data = $result->fetch_assoc();
        return $user_data;
      }
    } else {
      header("Location: https://payroll.zamtouch.co.zm/");
      exit();
    }
  } else {
    header("Location: https://payroll.zamtouch.co.zm/");
    exit();
  }
}

$user_details = access_control($conn);
