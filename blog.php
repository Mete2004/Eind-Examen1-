

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


<!-- user story: blogfunctionaliteit -->
  <?php

    //   variabelen die de titel en bericht vasthouden vanuit de nb.php formulier
    include_once 'admin.php';
      $title = $_POST['title'];
      $message = $_POST['message'];


      
      $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

      $stmt = $pdo->prepare("INSERT INTO blog (titel, bericht) VALUES (?, ?)");

      // de waardes in de variabelen binden
      $stmt->bindValue(1, $title);
      $stmt->bindValue(2, $message);

      // Statement executen zo dat de sql code wordt gerunt
      $stmt->execute();


  ?>

<!-- user story: blogfunctionaliteit -->
  <?php
    // Connect to the database
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Prepare the SELECT query
    $stmt = $pdo->prepare("SELECT titel, bericht FROM blog ORDER BY blog_id DESC");

    // Execute the query
    $stmt->execute();

    // Fetch the results as an associative array
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- user story: interne links en navigeren -->
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
    <section class="blog-titel-section">
        <div class="blog-titel-wrapper">
            <div class="blog-titel-outer-div">
                <div class="blog-titel-inner-div">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </section>



    <!-- Loop through the posts and create a div for each post -->
    <!-- user story: blogfunctionaliteit  -->
    <?php foreach ($posts as $post): ?>
        <section class="blog-message-section">
            <div class="blog-message-wrapper">
                <div class="blog-message-outer-div">
                    <div class="blog-message-inner-div">
                      <center><p><strong>Title:</strong> <?= htmlspecialchars($post['titel']) ?></p></center>
                      <center><p><strong>Message:</strong> <?= htmlspecialchars($post['bericht']) ?></p></center>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>


</body>
</html>
