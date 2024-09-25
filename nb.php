<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="medium.css">
    <link rel="stylesheet" href="small.css">

</head>
<body>

    <?php

    include 'admin.php';

    try{
   
    $sql = "INSERT INTO blog (blog_titel, blog_text)
    VALUES ($title, $message)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    ?>

    <header>
        <div class="logo-outer-div">
            <div class="logo-inner-div">
                <div class="logo">
                    <img class="logo-resta" src="img/logo-resta.png">
                </div>
            </div>
        </div>
        <div class="buttons-outer-div">
            <div class="buttons-inner-div">
                <div class="h-button">
                    <a href="index.html">
                        <h2 class="home-button">
                            Home
                        </h2>
                    </a>
                </div>
            </div>
            <div class="buttons-inner-div">
                <div class="button">
                    <a href="contact.html">
                        <h2 class="contact-button">Contact</h2>
                    </a>
                </div>
            </div>
            <div class="buttons-inner-div">
                <div class="button">
                    <a href="blog.html">
                        <h2 class="blog-button">Blog</h2>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="blog-form-titel-section">
        <div class="blog-form-titel-wrapper">
            <div class="blog-form-titel-outer-div">
                <div class="blog-form-titel-inner-div">
                    <h1>New Message</h1>
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>

