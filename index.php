 <html>
<head>
<style type="text/css">body{margin:40px
auto;max-width:650px;line-height:1.6;font-size:18px;color:#444;padding:0
10px}h1,h2,h3{line-height:1.2}</style>
</head>
<body>

<h1>Whois for FREE</h1>

<form action="index.php" method="post">
Enter a domain below:<br><br><input type="text" name="input"><br><br>
<input type="submit" value="Whois">
</form>

</body>
</html> 

<?php

$output = shell_exec('whois ' . $_POST["input"]);
echo "<pre>" . $output . "</pre>";
?>
