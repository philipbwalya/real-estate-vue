<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  echo json_encode([
    "status" => "success",
    "user" => $_SESSION['user']
  ]);
} else {
  echo json_encode([
    "status" => "error",
    "message" => "Unauthorized"
  ]);
}
