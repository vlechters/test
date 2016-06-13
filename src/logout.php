<?php
session_start();
session_destroy();
?>


<html>

<!-- <center><h1>U bent uitgelogd en wordt automatisch teruggestuurd</h1></center> -->
</html>

<?php
 //header( "refresh:0;url=index.php" );

echo '<script>window.open("index.php","_self")</script>';
 ?>