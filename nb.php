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
        
    ?>

    <header>
        <div class="logo-outer-div">
            <div class="logo-inner-div">
                <div class="logo">
                    <img class="logo-resta" src="img/logo-resta.png">
                </div>
            </div>
        </div>
        <!-- user story: interne links en navigeren -->
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
                    <a href="contact.php">
                        <h2 class="contact-button">Contact</h2>
                    </a>
                </div>
            </div>
            <div class="buttons-inner-div">
                <div class="button">
                    <a href="blog.php">
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


    <section class="blog-form-section">
        <div class="blog-form-wrapper">
            <div class="blog-form-header-div">

            </div>
            
            <div class="blog-form-text-outer-div">
                
            <!-- user story: blogfunctionaliteit -->
                <form  action="blog.php" method="post" >
                    <label for="fname">Titel:</label><br>
                    <input class="blog-form-name" type="text" id="fname" name="title" value=""><br>
                    <label for="lname">Bericht:</label><br>

                    <label for="w3review"></label>

                    <textarea id="blog-message" name="message" rows="4" cols="50" placeholder=""></textarea>


                    <div class="blog-form-button-outer-div">
                      <div class="blog-form-button-inner-div">
                      <input class="blog-form-button" type="submit" value="Submit">
                      </div>
                    </div>

            </form>

        </div>

          </div>
    </section>

</body>
</html>
