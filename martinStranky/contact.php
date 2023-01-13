<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/contact.css">
    <title>Detektivní služby</title>
    <link rel="icon" type="image/png" href="images/icons/logoSecurity.png" />

</head>

<body>
    <div class="uvod">
        <header class="nav">
            <div class="logos">
                <a href="index.html"><img class="logo" src="images/icons/logo.svg" alt=""></a>
                <a href="https://uspcz.cz/"><img class="logo2" src="images/icons/uspLogo.png" alt=""></a>
            </div>
            <ul class="menu">
                <i class="close-menu fas fa-times" id="close-menu fas"></i>
                <a href="det_sluzby.html">
                    <li>Detektivní služby</li>
                </a>
                <a href="odposlech.html">
                    <li>Kontrola proti odposlechům</li>
                </a>
                <a href="fyz_ostraha.html">
                    <li>Fyzická ostraha</li>
                </a>
                <a href="facility.html">
                    <li>Facility</li>
                </a>
                <a href="#">
                    <li>Pronájem dronů</li>
                </a>
                <a href="contact.html">
                    <li>Kontakt</li>
                </a>
            </ul>
            <i class="fas fa-bars" id="open-menu fas"></i>
        </header>
        <div class="layout">
            <div class="content">
                <div class="left">
                    <h1>Kontakt</h1>
                    <p>Email: marfius@seznam.cz</p>
                    <p>Tel.: 608 979 749</p>
                </div>
                <div class="right">
                    <form action="" method="post">
                        <div class="contact-form">
                            <div class="contact-row">
                                <input type="text" name="name" placeholder="Jméno">
                                <input type="email" name="mail" placeholder=" E-mail">
                            </div><br>
                            <input type="text" name="subject" placeholder="Předmět"><br>
                            <textarea name="" id="" cols="20" rows="10" placeholder="Zpráva"></textarea> <br>
                            <input id="submit" name="submit" type="submit" value="Odeslat">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $mailFrom = $_POST['mail'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            if (empty($name) || empty($mailFrom) || empty($subject) || empty($message)){
                echo "<p class=''>Vyplňte všechna pole.</p>";
            } else{
                $mailTo = "bohatec87@gmail.com";
                $headers = "From:" . $mailFrom;
                $txt = "Byl vyplněn formulář na cenystav.cz! " ."Jméno odesílatele je: " .  $name . " / Zpráva odesílatele je: ". $message;

                mail($mailTo,$subject, $txt, $headers);
                echo "<p class=''>Formulář byl odeslán!.</p>";
                        }
                    }
                    ?>
    <div class="footer">
        <h1>
            © 2022 security-facility.cz | <a href="http://drie.cz/">www.drie.cz</a>
        </h1>
    </div>

    <script src="menu.js"></script>
</body>

</html>