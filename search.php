<?php
$product = "";
if(isset($_GET['product']))
{
    $product = $_GET['product'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Search Result</title>
<style>
body{
font-family:Arial;
padding:50px;
background:#f3f3f3;
}
.box{
background:white;
padding:30px;
border-radius:10px;
}
</style>
</head>
<body>
<div class="box">
<h1>Search Result</h1>
<p>
You searched for:
<strong>
<?php echo htmlspecialchars($product); ?>
</strong>
</p>
<a href="index.php">
Go Back
</a>
</div>
</body>
</html>