<?php
    // Adding data to a file

    $content =     "
    <h1>Sample H1 tag </h1>
    <p> Paragraph line 1 </p>
    <p> Paragraph line 2 </p>
    <p> Paragraph line 3 </p>";

    // To append instead of override, add FILE_APPEND
    if(file_put_contents("./about.html", $content, FILE_APPEND)){    // If about.html doesn't exist, create it.
        echo "data written to file";
    }else{
        echo "something went wrong";
    }
?>