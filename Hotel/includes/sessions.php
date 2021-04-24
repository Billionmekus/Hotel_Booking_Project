<?php 
session_start();
function ErrorMessage(){
    if(isset($_SESSION['ErrorMessage'])){
        $Output = "<div class=\"alert alert-danger\">";
        $Output .= htmlentities($_SESSION['ErrorMessage']);
        $Output .= "</div>"; //$Output is all one variable, htmlentities ensuure HTML codes are not broken
        $_SESSION['ErrorMessage'] = null; //clear error message so that it is not always available to user
        return $Output;
    }
}
function SuccessMessage(){
    if(isset($_SESSION['SuccessMessage'])){
        $Output = "<div class=\"alert alert-success\">";
        $Output .= htmlentities($_SESSION['SuccessMessage']);
        $Output .= "</div>"; //$Output is all one variable, htmlentities ensuure HTML codes are not broken
        $_SESSION['SuccessMessage'] = null; //clear error message so that it is not always available to user
        return $Output;
    }
}
?>