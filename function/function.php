<?php

function forceDownload($filePath) {
    if (file_exists($filePath)) {
        $fileName = basename($filePath);

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));

        flush();

        readfile($filePath);

        exit;
    } else {
        echo "File not found.";
    }
}






?>
