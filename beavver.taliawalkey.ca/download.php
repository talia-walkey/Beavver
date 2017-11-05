<?php
$path = $_SERVER['DOCUMENT_ROOT']."/templates/"; // change the path to fit your     websites document structure
$fullPath = $path.basename($_REQUEST['download_file']);

if (is_readable ($fullPath)) {
$fsize = filesize($fullPath);
$path_parts = pathinfo($fullPath);
$ext = strtolower($path_parts["extension"]);
switch ($ext) {
    case "docx":
    header("Content-type: application/msword"); // add here more headers for diff.     extensions
    header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");     // use 'attachment' to force a download
    break;
    default;
    header("Content-type: application/octet-stream");
    header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
}
header("Content-length: $fsize");
header("Cache-control: private"); //use this to open files directly
readfile($fullPath);
exit;
} else {
        die("Invalid request");
}
// example: place this kind of link into the document where the file download is offered:
// <a href="download.php?download_file=some_file.pdf">Download here</a>