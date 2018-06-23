
<?php 

if(isset($_SESSION['cusername']))
{
unset($_SESSION['cusername']);
session_start();
session_destroy();
}
header("Location: index.php ");

 ?>