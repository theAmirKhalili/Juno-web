<?php


$Message = '';
$Email = "";
$Subject = "";
$Txt = "";
if(isset($_POST['submit']))
{
    $Email = $_POST['_email'];
    $Subject = $_POST['_subject'];
    $Txt = $_POST['_txt'];
   
    $validationMessage = validation();
    
    if($validationMessage == "") {
        $for_write = "";
        $Txt = trim(preg_replace('/\s\s+/', ' \n ', $Txt));
        $for_write = "Email:".$Email . " Subject:" . $Subject . " Text:" . $Txt. "\n";
        $file = fopen("file.txt", "a");
        fwrite($file, $for_write);
        fclose($file);
    }
    echo $validationMessage;
}


function validation()
{
    $Message = "";
    if (!filter_var($_POST['_email'], FILTER_VALIDATE_EMAIL)) {
        $Message .= 'email ERROR'."<br/>";
    }
    if($_POST["_subject"] == "")
        $Message .= 'subject ERROR'."<br/>";
    if($_POST["_txt"] == "")
        $Message .= 'text ERROR.'."<br/>";

    return $Message;
}
?>