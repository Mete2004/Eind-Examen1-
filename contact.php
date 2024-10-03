<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="medium.css">
    <link rel="stylesheet" href="small.css">
    <link rel="stylesheet" href="contact-form.css">


</head>
<body>

    <header>
        <div class="logo-outer-div">
            <div class="logo-inner-div">
                <div class="logo">
                    <img class="logo-resta" src="img/logo-resta.png">
                </div>
            </div>
        </div>

        <!-- user story: interne links en navigeren  -->
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

    <section class="contact-form-titel-section">
        <div class="contact-form-titel-wrapper">
            <div class="contact-form-titel-outer-div">
                <div class="contact-form-titel-inner-div">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section">
    <div class="contact-form-wrapper">
        <div class="contact-form-header-div">
            <h2>Neem contact met ons op</h2>
        </div>

        <!-- user story: formulieren -->
        <form id="contactForm" action="send-email.php" method="POST">
            <div class="contact-form-name-outer-div">
                <div class="contact-form-name-inner-div">
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="naam" required>
                </div>
            </div>
            <div class="contact-form-mail-outer-div">
                <div class="contact-form-mail-inner-div">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
            <div class="contact-form-text-outer-div">
                <div class="contact-form-text-inner-div">
                    <label for="message">Bericht:</label>
                    <textarea id="message" name="bericht" rows="4" required></textarea>
                </div>
            </div>
            <div class="contact-form-button-outer-div">
                <div class="contact-form-button-inner-div">
                    <button type="submit" class="contact-form-button">Verstuur</button>
                </div>
            </div>
        </form>
        
    </div>
</section>

    <section class="contact-maps-section">
        <div class="contact-maps-wrapper">
        <!-- user story: google maps integratie  -->
            <div class="contact-maps-titel-outer-div">
                <div class="contact-maps-titel-inner-div">
                <h1>Vind Ons Hier</h1>
                </div>
            </div>
            <div class="contact-maps-outer-div">
                <div class="contact-maps-inner-div">

                    <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2437.3111601334766!2d4.8909329!3d52.3723689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609fbdba9e399%3A0x8c2f1287b17ca37e!2sSpuistraat%2063%2C%201012%20SV%20Amsterdam%2C%20Nederland!5e0!3m2!1snl!2snl!4v1695655090205!5m2!1snl!2snl" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
                    </div>

                </div>
            </div>
            
            <!-- user story: social media integratie -->
            <div class="contact-socials-outer-div">
                <div class="contact-socials-inner-div">
                    <div class="contact-socials">
                        <a href="https://www.facebook.com" target="_blank">
                            <img class="icon" src="img/facebook-icon-removebg-preview.png">
                        </a>
                    </div>
                </div>
                <div class="contact-socials-inner-div">
                    <div class="contact-socials">
                        <a href="https://www.instagram.com" target="_blank">
                            <img class="icon" src="img/insta-icon-new-removebg-preview.png">
                        </a>
                    </div>
                </div>
                <div class="contact-socials-inner-div">
                    <div class="contact-socials">
                        <a href="https://www.linkedin.com" target="_blank">
                            <img class="icon" src="img/linkedin-icon-new-removebg-preview.png">
                        </a>
                    </div>
                </div>
                <div class="contact-socials-inner-div">
                    <div class="contact-socials">
                        <a href="mailto:mete.sariguney@student.rocva.nl">
                            <img class="icon" src="img/mail-icon-new-removebg-preview.png">       
                        </a>           
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
</body>
</html>