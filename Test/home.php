<?php
session_start();

if(isset($_SESSION['id']) && isset ($_SESSION['user_name'])){

?>

<!DOCTYPE html>
<html>

<head>
    <title>HOME</title>
</head>

<body>
    <h1>Hello, <?php echo $_SESSION['name'];?></h1><br>
    <a href='logout.php'><button>Logout</button></a>
</body>

</html>

<?php
}else{
    header("Location: index.php");
}