<?php
$file = 'Francium.mobileconfig';

// Check if the file exists
if (!file_exists($file)) {
    die('File not found.');
}

// Set headers to force download
header('Content-Type: application/x-apple-aspen-config');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Content-Length: ' . filesize($file));
readfile($file);
exit;
?>
