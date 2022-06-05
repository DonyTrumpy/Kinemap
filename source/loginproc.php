<?php  session_start();
include '../abc/config.php';
// Retrieve username and password from database according to user's input
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['pass']);
$role=mysqli_real_escape_string($db,$_POST['role']);
// echo $password;exit;
$encrypted_mypassword=md5($password);
// $sql = "SELECT * FROM system_users WHERE (u_username = '$username') and (u_password = '$encrypted_mypassword') and (u_rolecode = '$role')";
//$sql = "SELECT * FROM system_users WHERE (u_username = '$username') and (u_password = '$encrypted_mypassword') and (u_rolecode = '$role')";
$sql = "SELECT * FROM system_users WHERE (u_username = '$username' OR u_email = '$username') and (u_password = '$encrypted_mypassword' and u_rolecode = '$role');";
// echo $sql;exit;
$login = mysqli_query($db,$sql);
$count = mysqli_num_rows($login);
// echo $count;exit;
if ($count != "") {
    while($row = mysqli_fetch_assoc($login)){
        $_SESSION['u_userid'] = $row['u_userid'];
        $_SESSION['u_username'] =$row['u_username'];
        $_SESSION['u_name'] = $row['u_name'];
        $_SESSION['u_email'] = $row['u_email'];
        $_SESSION['u_rolecode'] = $row['u_rolecode'];
    }
    $str = 'welcome.php';
    redirect($str);
}
else {
    $str = 'login.php?s=lf';
    redirect($str);
}
?>
