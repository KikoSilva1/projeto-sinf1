<?php

// Redirect or display an error message for non-AJAX requests
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
  header('Location: ../index.php');
  exit;
}

// Log the received data
error_log('Received AJAX request with data: ' . print_r($_GET, true));

// Simulate a response with some dummy data
$data = array(
  array('id' => 1, 'nome' => 'Dr. João'),
  array('id' => 2, 'nome' => 'Dra. Maria'),
  array('id' => 3, 'nome' => 'Dr. José')
);

// Encode the data as JSON and send it back to the client
header('Content-Type: application/json');
echo json_encode($data);

?>