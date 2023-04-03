<?php
$password = "mypassword"; // 正确的密码
if ($_POST["password"] == $password) {
    // 密码正确，跳转到受保护的页面
    header("Location: 6.html");
    exit();
} else {
    // 密码错误，重新输入
    header("Location: index.html");
    exit();
}
?>
