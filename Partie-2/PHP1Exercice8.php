<?php    
    // variables de travail
    $url = "http://my.mobirise.com/data/userpic/764.jpg";
    

    function repeterImage($url, $nfois) {

        for ($i=0; $i < $nfois; $i++) { 
            echo "<img src=\"$url\" alt=\"Petitchien.\" width=\"300px\">";
        }

    }
    repeterImage($url, 7);
    