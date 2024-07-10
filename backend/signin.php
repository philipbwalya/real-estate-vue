<?php
include_once("conn.php");

// Set session expiry to 2 days
ini_set('session.gc_maxlifetime', 86400 * 2);
session_set_cookie_params(86400 * 2);

$email = $_POST['email'];
$password = $_POST['password'];

if ($email && $password) {

  // Prepare and execute the query
  $query = "SELECT * FROM users WHERE email = ?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($result);

  // var_dump($row);

  if ($row) {
    $hashedPasswordFromDB = $row['password'];
    $salt = $row['salt'];

    // Verify password
    if (password_verify($password . $salt, $hashedPasswordFromDB)) {
      session_start();



      // Store user information in session
      $_SESSION['logged_in'] = true;
      $_SESSION['user'] = [
        'id' => $row['id'],
        'email' => $row['email'],
        'first_name' => $row['first_name'],
        'last_name' => $row['last_name'],
        // Add other fields as needed
      ];

      // Return user information in JSON response
      echo json_encode([
        "status" => true,
        "message" => "Login successful",
        "user" => $_SESSION['user'], // Pass the user object or array
        "link" => "../index.php" // Example link to redirect after login
      ], JSON_PRETTY_PRINT);
    } else {
      echo json_encode([
        "status" => false,
        "Incorrect_message" => "Incorrect Password"
      ], JSON_PRETTY_PRINT);
    }
  } else {
    echo json_encode([
      "status" => false,
      "NotFound" => "User not found"
    ], JSON_PRETTY_PRINT);
  }
} else {
  echo json_encode([
    "status" => false,
    "Incomplete" => "Email or password not provided"
  ], JSON_PRETTY_PRINT);
}
