<?php

require_once ‘include/config.php’;
require_once ‘library/info.php’;

$bands = array(‘Dark Tranquillity’, ‘Stratovarius’, ‘Blind Guardian’, ‘In Flames’, ‘Metallica’);

?>

<html>
    <head>
        <title>Prova</title>
    </head>
    <body>
        <h3>I miei gruppi preferiti</h3>
        <ul>
        <?php
        $info = new InfoManager;
        foreach($bands as $band_name)
        {
            $band_info = $info->findInfos($band);
            echo “<li>”.$band_name;
            if(!is_null($band_info))
            {
                echo ‘  (<a href=”‘.$band_info->site.'”>’.$band_info->site.'</a>)’;
            }
            echo “</li>”;
        }
        ?>
        </ul>
    </body>
</html>
