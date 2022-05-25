<html>
<body>

<?php
if(isset($_POST['submit'])){
$name = "Name: ".$_POST['name']."
";
$email = "Email: ".$_POST['email']."
";
$subject = "Email: ".$_POST['subject']."
";
$message = "Message: ".$_POST['message']."
";
$file=fopen("data.txt", "a");
fwrite($file, $name);
fwrite($file, $email);
fwrite($file, $subject);
fwrite($file, $message);
fwrite($file, "HELP");
fclose($file);
}
?>

</body>
</html>