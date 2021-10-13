<?php
function connectMaBase(){
    $base = mysql_connect ('localhost', 'dimitri', 'Iamfrancais2003');  
    mysql_select_db ('dimitri_mabase', $base) ;
   
}
?>
