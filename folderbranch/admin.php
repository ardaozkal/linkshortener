<?php
$alias = htmlspecialchars($_GET["alias"]);

if (!empty(htmlspecialchars($_GET["link"])))
{
if (htmlspecialchars($_GET["pass"]) == "test")
{
    if (empty($alias))
    {
        while (!file_exists("./" . $alias . "/"))
        {
            $alias = generateRandomString(3);
        }
    }
    
    if (!file_exists($alias)) {
    mkdir($alias, 0777, true);
    }
    
    $myfile = fopen("./" . $alias . "/index.php", "w") or die("error");
    if ($myfile == "error")
    {
        echo "Something is broken when trying to create a file.";
    }
    else
    {
        fwrite($myfile, "<?php header(\"Location: " . htmlspecialchars($_GET["link"]) . "\"); ?>");
        fclose($myfile);
        echo "Created, alias is " . "<a href=\"" . $alias . "/index.php\">" . $alias . "</a>";
    }
}
else
{
    echo "<img src=\"http://oi62.tinypic.com/8yhxtu.jpg\" alt=\"nice hack bro.\" style=\"width:507px;height:264px;\">";
}
}
else
{
    echo "link is empty, use pass, link and alias (alias is optional)";
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz'; //ABCDEFGHIJKLMNOPQRSTUVWXYZ
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?> 
