<?php
include_once("conn.php");

$email = $_POST['email'];
$password = $_POST['password'];

//echo or print_r
//GET PASSWORD QUERY


$query = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

if ($row) {

  $hashedPasswordFromDB = $row['password'];
  $salt = $row['salt'];

  // Verify password
  if (password_verify($password . $salt, $hashedPasswordFromDB)) {
    session_start();

    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;

    // Generate token
    $token = uniqid() . time();
    //$created = time();

    $stmt = $conn->prepare("INSERT INTO tokens (access_token, username) VALUES (?, ?)");
    $stmt->bind_param("ss", $token, $email);
    $stmt->execute();

    setcookie("token", $token, time() + (86400 * 1), "/");
    header("token: $token");

    // Logging
    $module_name = "Login";
    $activity_name = "Successful Login";
    $time_of_activity = (new DateTime("now", new DateTimeZone('Africa/Lusaka')))->format('Y-m-d H:i:s');
    $table_name = "tokens";

    $stmt1 = $conn->prepare("INSERT INTO system_logs (module_name, activity_name, username, time_of_activity, table_name) VALUES (?, ?, ?, ?, ?)");
    $stmt1->bind_param("sssss", $module_name, $activity_name, $email, $time_of_activity, $table_name);
    $stmt1->execute();

    echo json_encode(array("status" => "success", "msg" => "Correct!!", "link" => "../", "token" => $token), JSON_PRETTY_PRINT);
  } else {
    echo json_encode(array("status" => "failed", "msg" => "Incorrect Password"), JSON_PRETTY_PRINT);
  }
} else {
  echo json_encode(array("status" => "failed", "msg" => "User not found"), JSON_PRETTY_PRINT);
}
