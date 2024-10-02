<?php
// Read the target date from the file
$filename = 'target_date.txt';
$targetDate = '';

if (file_exists($filename)) {
    $targetDate = trim(file_get_contents($filename));
} else {
    echo "Error: Date file not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once 'requires/head.php'; ?>
<?php require_once 'parts/header.php'; ?>
<body>
    <div class="container">
        <h1>Hello Avans!</h1>
    </div>
</body>
</html>
