<?php
$file = 'Francium.mobileconfig';

if (file_exists($file)) {
    header('Content-Type: application/x-apple-aspen-config');
    header('Content-Disposition: attachment; filename="Francium.mobileconfig"');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    die('File not found.');
}
?>
