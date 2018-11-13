<?php
define('UPLOAD_DIR', 'uploads/');
$file = UPLOAD_DIR . time() . '.jpg';
$success = move_uploaded_file($_FILES['webcam']['tmp_name'], $file);;
print $success ? $file : 'Unable to save the file.';

