
<?php
session_start();

function successInfo(){
    if(isset($_SESSION['successInfo'])){
        $output = "<div class=\"alert alert-success\" role=\"alert\">";
        $output .= htmlentities($_SESSION['successInfo']);
        $output .= "</div>";

        $_SESSION['successInfo'] = null;
        return $output; 
    }
}

function failureInfo(){
    if(isset($_SESSION['failureInfo'])){
        $output = "<div class=\"alert alert-danger\" role=\"alert\">";
        $output .= htmlentities($_SESSION['failureInfo']);
        $output .= "</div>";

        $_SESSION['failureInfo'] = null;
        return $output; 
    }
}
?>