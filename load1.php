<?php
$link = mysqli_connect("localhost", "root", "", "cateringphp");
$output = '';

if (isset($_POST["name"])) {
    $fullname = mysqli_real_escape_string($link, $_POST['name']);
    $sql = "SELECT * FROM sh_feedback WHERE fullname = '" . $fullname . "'";
    $res = mysqli_query($link, $sql);

    while ($row = mysqli_fetch_array($res)) {
        $output .= '<p class="lead">Feedback:</p>';
        $output .= '<p>' . $row["message"] . '</p>';
        $output .= '<p class="feedback-author">By ' . $row["fullname"] . '</p>';
    }

    echo $output;
}
?>
