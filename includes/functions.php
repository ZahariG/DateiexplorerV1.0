<?php

//  FUNCTION FOR PRINTING FILES AND FOLDERS TO USER
function printWorkspace ($directory){

    $dir = scandir($directory, SCANDIR_SORT_ASCENDING);
    
    echo "<ul>";

    foreach  ($dir as $extract){

        if($extract != "." && $extract != ".."){

            if(is_dir("$directory/$extract")){
                echo "<li>" . $extract;
                printWorkspace("$directory/$extract");
                echo "</li>";
            }else{
                echo "<li>" . $extract . "</li>";
            }
        }
    }echo "</ul>";

}