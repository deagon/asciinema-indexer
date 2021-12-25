<html>
<head>
  <link rel="stylesheet" type="text/css" href="/asciinema-player.css" />
</head>

<body>

<?php 
$pTag = sprintf("<h1 align=center> %s </h1>", $_GET['id']);
echo $pTag;

$playTag = sprintf("<asciinema-player src=\"casts/%s\"></asciinema-player>", $_GET['id']);
echo $playTag;
?>

<script src="/asciinema-player.js"></script>
</body>

</html>
