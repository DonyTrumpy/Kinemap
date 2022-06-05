<?php session_start();
$dbHost = 'localhost';
$dbUsername = 'u988824173_frozenpinguin';
$dbPassword = 'Narnia2011.';
$dbName = 'u988824173_Kinemap';
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

function redirect($url){
    if (!headers_sent())
    {
        header('Location: '.$url);
        exit;
    }
    else
        {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
function check(){ //check user authentication
    if (!isset($_SESSION['u_userid'])) {
        $str = 'login.php?s=fl';
        redirect($str);
        }
}

function logout(){
    session_destroy();
    $str = 'login.php?s=t';
    redirect($str);
}
?>
