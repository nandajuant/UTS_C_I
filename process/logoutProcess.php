<?php
$_SESSION['isLogin'] = true;
$_SESSION['user'] = $user;
echo
'<script>
alert("Logout Success"); window.location = "../page/loginPage.php"
</script>'
?>