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
                <a href="index.php" style="text-decoration:none" class="active">Dashboard</a> 
            </li>
            <li>
                <a href="index.php?page=categori_tampil" style="text-decoration:none" class="active">Category</a> 
            </li>
            <li>
                <a href="index.php?page=photo_tampil" style="text-decoration:none" class="active">Photos</a> 
            </li>
            <li>
                <a href="index.php?page=post_tampil" style="text-decoration:none" class="active">Post</a> 
            </li>  
            <li>
                <a href="index.php?page=album_tampil" style="text-decoration:none" class="active">Album</a> 
            </li>     
            <li>
                <a href="logout.php" style="text-decoration:none" class="active" >Logout</a> 
            </li> 
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_dashboard.php ";
        }
        ?>
    </section>
    <footer>
        Copyright Reza Rizki Arifianda &copy; 2021
    </footer>
    </main>
</body>
</html>