<?php
require 'core.php';
session_destroy();
header('Location:'.$http_referer);
//header('Location: index.php');

?>
<html>
<body>
name:<input type="text" name="name">

</body>


</html>