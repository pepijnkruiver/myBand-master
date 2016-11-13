<div class="">
<?php
$sql = "SELECT * FROM tour ";

$result = $mysqli->query($sql);

$result = convertResultToArray($result);
?>
</div>