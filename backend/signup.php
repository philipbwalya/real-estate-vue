<?php
include_once("conn.php");
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$rawPassword = $_POST['password'];
$phone = $_POST['phone'];




// Generate a random salt
$salt = bin2hex(random_bytes(16));

// bcrypt hashing
$hashedPassword = password_hash($rawPassword . $salt, PASSWORD_BCRYPT);

// Check if email is already in use using prepared statements
$query = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

  $response = array(
    'status' => false,
    'existmessage' => 'Email already in use'
  );
  echo json_encode($response);
} else {
  // Insert user
  $insert_query = "INSERT INTO users (first_name, last_name, email, password, salt, phone,created_date) VALUES (?, ?, ?, ?, ?, ?, NOW())";
  $stmt = $conn->prepare($insert_query);
  $stmt->bind_param("ssssss", $first_name, $last_name, $email, $hashedPassword, $salt, $phone);

  if ($stmt->execute()) {
    // User registered successfully
    $response = array(
      'status' => true,
      'success' => 'User registered successfully'
    );
    echo json_encode($response);
  } else {
    // Error registering user
    $response = array(
      'status' => false,
      'error' => 'Error registering user: ' . $stmt->error
    );
    echo json_encode($response);
  }
}

// Close the prepared statement & database connection
$stmt->close();
$conn->close();
