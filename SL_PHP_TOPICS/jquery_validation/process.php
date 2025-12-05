<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name     = trim($_POST['name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $address  = trim($_POST['address'] ?? '');

    // ✅ Name validation
    if (empty($name) || strlen($name) < 2) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid name"
        ]);
        exit;
    }

    // ✅ Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid email"
        ]);
        exit;
    }

    // ✅ Address validation
    if (empty($address)) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid address"
        ]);
        exit;
    }
    // If all validations pass
    $data = [
        "name"    => htmlspecialchars($name),
        "email"   => htmlspecialchars($email),
        "address" => htmlspecialchars($address)
    ];

    echo json_encode([
        "status"  => "success",
        "message" => "Form submitted successfully!",
        "data"    => $data
    ]);

} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid request"
    ]);
}
