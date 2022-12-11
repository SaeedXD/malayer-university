<?php
header('Content-Type: text/css; charset=UTF-8');
foreach (scandir(__DIR__) as $item) {
    if ($item != '.' && $item != '..' && $item != 'autoLoad.php')
        echo "@font-face {font-family: '" . strtolower(pathinfo($item)['filename']) . "';src: url('$item');font-weight: normal;font-style: normal;}\n";
}
