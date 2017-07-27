<?php
$filename = '';
if ($_FILES['file']['error'] == 0) {
    $filename = __DIR__ . '/upload/' . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $filename);
}
exit(json_encode([
    'code'    => 0,
    'img_url' => str_replace($_SERVER['DOCUMENT_ROOT'], 'http://react.dev/', $filename)
]));