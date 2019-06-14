<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('gfiimmodbtest.mysql.db','gfiimmodbtest','abc123','Iraite111');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$result = mysqli_query($con,$sql);

echo "<div>test db connection</div>"
mysqli_close($con);
?>
</body>
</html>
