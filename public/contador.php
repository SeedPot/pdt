<?php
function visitas(){
    define('PATH_TO_FILE', dirname(__FILE__));
    $archivo = "visit_counter.txt";
    $path = PATH_TO_FILE."\\".$archivo;
    $contador = 0; 

    if (file_exists($path)) {

        $fp = fopen($path, "r");
        $contador = fgets($fp, 26);
        fclose($fp); 

        ++$contador;

        $fp = fopen($path,"w+"); 
        fwrite($fp, $contador, 26); 
        fclose($fp);

    } else {

        //crear con valor inicial
        $contador = 1000;
        $fp = fopen($path, "w+");    
        fwrite($fp, $contador, 26);
        fclose($fp);

        }

    return $contador;
} 
?>