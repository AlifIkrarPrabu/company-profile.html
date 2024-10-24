<?php
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if($email == 'if23.alifprabu@mhs.ubpkarawang.ac.id' && $password == 'ubpk2023'){
            header('Location: ./../dashboard.php');
        } else {
            echo "email atau password salah";
        }
    }
        
    ?>