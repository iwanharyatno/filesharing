<?php

$fileFullName = $_FILES['user-file']['name'];
$fileTmpName = $_FILES['user-file']['tmp_name'];

$fileName = pathinfo($fileFullName, PATHINFO_FILENAME);
$fileExt = pathinfo($fileFullName, PATHINFO_EXTENSION);
$fileUniqueName = time() . "-" . $fileName . "." . $fileExt;

$operation = move_uploaded_file($fileTmpName, 'shared/' . $fileUniqueName);

if ($operation) {
    echo "0";
}
