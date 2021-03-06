<?php
    header('Content-type: text/cache-manifest');
    $dir = '.';
    $datestamp = 0;
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir),
        RecursiveIteratorIterator::CHILD_FIRST
    );
    foreach ($iterator as $fileinfo) {
        $datestamp = max ($datestamp, $fileinfo->getMTime() );
    }
    $datestamp = "# " . $datestamp . "\n";
?>
CACHE MANIFEST
<?=$datestamp;?>

CACHE:
index.html
css/main.css
js/main.js
images/checker.png

NETWORK:
*

FALLBACK:
images/ images/offline.gif
