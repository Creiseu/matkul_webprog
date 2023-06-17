<?php
    function securitylogin(){
        if(!isset($_SESSION['namalog'])){
           return header("Location: index.php");
        }
        else{
            return $_SESSION['namalog'];
        }
    }
?>