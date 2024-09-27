<link rel="stylesheet" href="contact-form.css">

<!-- user story: formulieren -->

<?php

    
    //   variabelen die de titel en bericht vasthouden vanuit de nb.php formulier
    include_once 'admin.php';
      $naam = $_POST['naam'];
      $email = $_POST['email'];
      $bericht = $_POST['bericht'];


      
      $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

      $stmt = $pdo->prepare("INSERT INTO email_tabel (naam, email, bericht) VALUES (?, ?, ?)");

      // de waardes in de variabelen binden
      $stmt->bindValue(1, $naam);
      $stmt->bindValue(2, $email);
      $stmt->bindValue(3, $bericht);


      // Statement executen zo dat de sql code wordt gerunt
      $stmt->execute();


  ?>

<section class="bericht-form-section"> 
    <div class="bericht-form-wrapper">
        <div class="bericht-form-outer-div">
            <div class="bericht-form-inner-div">
                <h1>Bedankt voor uw mail!</h1>
                <p>We zullen zo snel mogelijk contact met u opnemen.</p>
                <a href="index.html">Terug naar Home</a>
            </div>
        </div>  
    </div>  
</section>