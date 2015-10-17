<?php
$alias = htmlspecialchars($_POST["alias"]);

if (!empty(htmlspecialchars($_POST["link"])))
{
if (htmlspecialchars($_POST["pass"]) == "test")
{
    if (empty($alias))
    {
        while (!file_exists($alias))
        {
            $alias = generateRandomString(3);
        }
    }
    
    $myfile = fopen($alias, "w") or die("error");
    if ($myfile == "error")
    {
        echo "Something is broken when trying to create a file.";
    }
    else
    {
        fwrite($myfile, htmlspecialchars($_POST["link"]));
        fclose($myfile);
        echo "Created, alias is " . "<a href=\"index.php?a=" . $alias . "\">" . $alias . "</a>";
    }
}
else
{
    echo "<img src=\"wrongpass.png\" alt=\"nice hack bro.\" style=\"width:507px;height:264px;\">";
}
}
else
{
    echo "Go back to admin.html";
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
