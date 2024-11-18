<?php
    session_start();
    if(isset($_SESSION['count'])){
        $_SESSION['count'];
    }else{
        $count = $_SESSION['count'];
        $_SESSION['count'] = $count + 1;
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Session</title>
    <p>Anda telah mengunjungi halaman ini <?php echo $_SESSION['count']?>kali.</p>
</head>
<body>
    <!-- Delete Sessiom -->
     <?php
     if(isset($_SESSION['count'])){
        unset ($_SESSION['count']);
     }
     ?>
</body>
</html>