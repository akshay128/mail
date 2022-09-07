<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mail Sand </title>
</head>
<body>
<?php
   $to = "Abhishekkapoor513@gmail.com";
   $subjet = "IT company";
   $massa ="that massage is usless";
   $from = "Abhishekkapoor192809@gmail.com";
   $header ="From: $from";
   mail($to , $subjet , $massa , $header);
?>
  
</body>
</html>