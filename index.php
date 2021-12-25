<html>
<head>
</head>

<body>

<?php
function listFolderFiles($dir){
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);

    // prevent empty ordered elements
    if (count($ffs) < 1)
        return;

    echo '<ol>';
    foreach($ffs as $ff){
        $suffix = substr(strrchr($ff, '.'), 1);
        if(strcmp($suffix,"cast") != 0) {
            continue;
        }
        echo '<li>';
        
        echo "<a href=\"http://localhost/play.php?id=".$ff."\">";
        echo $ff;

        if(is_dir($dir.'/'.$ff)) {
            listFolderFiles($dir.'/'.$ff);
        }

        echo "</a>";
        echo '</li>';
    }
    echo '</ol>';
}

listFolderFiles('./casts/');
?>

</body>

</html>
