<?php
// definieer een globale variable en print hem af op 2 manieren

$_SERVER['SERVER_NAME'] = "localhost";
echo $_SERVER['SERVER_NAME'];
$_SERVER['SERVER_NAME'];
echo "<br>";
print_r($_SERVER['SERVER_NAME']);
echo "<br>";
echo "<br>";
// gebruik de $_SERVER-superglobal om zoveel mogelijk informatie af te drukken over het binnenkomende request
$indicesServer = array('PHP_SELF', 
'argv', 
'argc', 
'GATEWAY_INTERFACE', 
'SERVER_ADDR', 
'SERVER_NAME', 
'SERVER_SOFTWARE', 
'SERVER_PROTOCOL', 
'REQUEST_METHOD', 
'REQUEST_TIME', 
'REQUEST_TIME_FLOAT', 
'QUERY_STRING', 
'DOCUMENT_ROOT', 
'HTTP_ACCEPT', 
'HTTP_ACCEPT_CHARSET', 
'HTTP_ACCEPT_ENCODING', 
'HTTP_ACCEPT_LANGUAGE', 
'HTTP_CONNECTION', 
'HTTP_HOST', 
'HTTP_REFERER', 
'HTTP_USER_AGENT', 
'HTTPS', 
'REMOTE_ADDR', 
'REMOTE_HOST', 
'REMOTE_PORT', 
'REMOTE_USER', 
'REDIRECT_REMOTE_USER', 
'SCRIPT_FILENAME', 
'SERVER_ADMIN', 
'SERVER_PORT', 
'SERVER_SIGNATURE', 
'PATH_TRANSLATED', 
'SCRIPT_NAME', 
'REQUEST_URI', 
'PHP_AUTH_DIGEST', 
'PHP_AUTH_USER', 
'PHP_AUTH_PW', 
'AUTH_TYPE', 
'PATH_INFO', 
'ORIG_PATH_INFO'); 
foreach ($indicesServer as $arg){
    if(isset($_SERVER[$arg])){
        echo $arg." ".$_SERVER[$arg]."<br>";
    } else {
        echo $arg."<br>";
    }
}


// Gebruik de $_GET-superglobal om de parameters van een URL in een ongenummerde lijst weer te geven.
// Gebruik als URL b.v. `http://localhost/08_superglobals.php?kleur=rood&vorm=ovaal&grootte=medium`.
// Tip: $_GET is een associatieve array.
echo "<ul>";
foreach ($_GET as $prop){
    echo "<li>".$prop."</li>";
}
echo "</ul>";
?>