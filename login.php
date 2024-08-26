<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "cateringphp");
if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $username = mysqli_real_escape_string($link, $_POST["username"]);
    $password =md5(mysqli_real_escape_string($link, $_POST["password"]));
    $sql = "SELECT * FROM sh_admin WHERE sh_admin = '".$username."' AND sh_pass = '".$password."'";
    $res = mysqli_query($link, $sql);
    $row = mysqli_num_rows($res);
    if($row > 0)
    {
        //$_SESSION["username"] = $username;
        $data = mysqli_fetch_array($res);
        $_SESSION["sh_admin"] = $data["sh_admin"];
        echo $data["sh_admin"];
    } 
}
?>