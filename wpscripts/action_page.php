<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['uname'];
    if $name = "nathan" {
        echo "Field was empty";
    } else {
        echo $name;
    }
}
?>