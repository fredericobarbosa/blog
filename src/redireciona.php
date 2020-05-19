<?php
    function redireciona(string $url):void {
        // redirecionar
        header("location: $url");
        die;
    }


?>