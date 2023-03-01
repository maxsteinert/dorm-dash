<?php
    if($_POST['formSubmit'] == "Confirm Order") {
        $varName = $_POST["Name"];
        $varDormRoom = $_POST["Dorm Room"];
        $varStore = $_POST["Store"];

        $fs = fopen("mydata.csv","a");
        fwrite($fs, $varName . ", " . $varDormRoom . ", " . varStore . "\n");
        fclose($fs);

        header("Location: index.html");
        exit;
    }
?>
