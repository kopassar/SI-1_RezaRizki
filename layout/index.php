<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Membuat BLOG">
    <meta name="author" content="BLOG">
    <meta name="keyword" content="sistem, informasi, BLOG, uinsu">
    <title>Sistem Informasi Pembuatan BLOG</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    <main>
    <header>
        <img src="<?php echo ASSET; ?>images/Blog.jpg" alt="JPG" id="gam">
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php" style="text-decoration:none" class="active">Home</a> 
            </li>
            <li>
                <a href="index.php?page=login_form" style="text-decoration:none" class="active">Login</a> 
            </li>   
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_index.php ";
        }
        ?>
    </section>
    <footer>
        Copyright Reza Rizki Arifianda &copy; 2021
    </footer>
    </main>
</body>
</html>