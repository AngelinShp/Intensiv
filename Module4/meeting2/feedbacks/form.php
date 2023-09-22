<?php
    $email = $text = '';
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($_POST['email'])) {
            $email = test_input($_POST['email']);
        }
        if(!empty($_POST['text'])) {
            $text = test_input($_POST['text']);
        }
        echo '<br/>Email:', $email;   
        echo '<br/>Text:', $text;  
    }
?>