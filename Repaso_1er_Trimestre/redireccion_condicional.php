<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $userType = "admin";
        if($userType === "admin"){
            header("Location: admin.php");
        }elseif ($userType === "user"){
            header("Location: user.php");
        }else {
            header("Location: login.php");
        }
        exit;
    ?>
</body>
</html>