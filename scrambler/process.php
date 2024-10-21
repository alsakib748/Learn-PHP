<?php
// Function to encode or decode a message using a key
function encodeDecodeMessage($message, $key, $action) {
    $result = '';

    for ($i = 0; $i < strlen($message); $i++) {
        $char = $message[$i];
        $keyChar = $key[$i % strlen($key)];

        if ($action === 'encode') {
            $encodedChar = chr(ord($char) + ord($keyChar));
        } else {
            $encodedChar = chr(ord($char) - ord($keyChar));
        }

        $result .= $encodedChar;
    }

    return $result;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $key = $_POST['key'];
    $message = $_POST['message'];
    $action = $_POST['action'];

    $resultMessage = encodeDecodeMessage($message, $key, $action);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Encode/Decode Result</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Result</h1>
        <p><strong>Action:</strong> <?php echo $action; ?></p>
        <p><strong>Key:</strong> <?php echo $key; ?></p>
        <p><strong>Original Message:</strong> <?php echo $message; ?></p>
        <p><strong>Result:</strong> <?php echo $resultMessage; ?></p>
        <a href="index.html">Go Back</a>
    </div>
</body>
</html>
