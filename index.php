<?php
$file = htmlspecialchars($_GET["a"]);

if (file_exists($file)) 
{
    $myfile = fopen($file, "r") or die("error");
    $readenfile = fread($myfile,filesize($file));
    fclose($myfile);
    if ($myfile !== "error")
    {
       header("Location: ".$readenfile);
    }
    exit();
} 
else 
{
    echo "<img src=\"409notfound.png\" alt=\"404 the link you specified is not available.\" style=\"width:507px;height:264px;\">";
}

?> 
