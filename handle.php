<?php
$txt = _POST["txt"];
$name = _POST["file-name"];
$myfile = fopen("hi.html", "w") or die("Unable to open file!");
echo "done" .fwrite($myfile, $txt);
fclose($myfile);

?>
