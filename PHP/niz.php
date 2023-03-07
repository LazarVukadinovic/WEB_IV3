<?php 

    $niz = array("plava", "crvena", "zelena", "zuta");

    // for($i=0; $i<count($niz)-1; $i++)
    // {
    //     echo $niz[$i];

    //     if($i == count($niz)-2)
    //     {
    //         echo " i " . $niz[++$i];
    //         break;
    //     }
    //     else
    //     {
    //         echo ", ";
    //     }
    // }

    $last = array_pop($niz);

    echo implode(", ", $niz) . " i " . $last;

    

?>