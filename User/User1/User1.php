<?php 
    $root= "./Data/";
    
    function printWorkspace ($directory){

        $dir = scandir($directory, SCANDIR_SORT_ASCENDING);
        
        echo "<ul>";

        foreach  ($dir as $extract){

            if($extract != "." && $extract != ".."){

                if(is_dir($extract)){
                    echo "<li>" . $extract . "(". mime_type($extract).")";
                    printWorkspace($extract);
                    echo "</li>";
                }else{
                    echo "<li>" . $extract . "</li>";
                }
            }
        }
        echo "</ul>";
    }
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./includes/css/mainpage.css">
    <title>User1</title>
</head>
<body>
    <header>
        <h1>Willkommen User1</h1>
        <a href="./../../index.php">Back to Home</a>
    </header>

    <main>
        <hr>
            <?php 
                // print_r($dir); 
                printWorkspace($root);
            ?> 
        <hr>
    </main>

    <footer></footer>
</body>
</html>