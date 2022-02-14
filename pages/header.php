

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="action.php?pages=home" class="nav-link">Home</a></li>
            <li><a href="action.php?pages=login" class="nav-link">Login</a></li>
            <li><a href="action.php?pages=product" class="nav-link">All Product</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo isset($_SESSION['name'])?"Welcome".$_SESSION['name']:"logged out"?></a>
                <ul class="dropdown-menu">
                    <li><a href="action.php?pages=logout" class="dropdown-item">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
