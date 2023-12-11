<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Conforto</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700&family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">

</head>
<body>

    <?php
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "barbearia";

        $conn = new mysqli($servidor, $usuario, $senha, $banco);
            
    ?>
        
    <!-- HEADER -->

    <div class="bg-home">
        <header>

            <nav class="header-content container">
                <div class="header-icons" >
                    <a href="">
                        <i class="fa-brands fa-instagram fa-2x"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-facebook fa-2x"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-tiktok fa-2x"></i>
                    </a>
                </div>

                <div>
                    <a href="index.php"><img class="header-logo" src="assets/logo.svg" alt="logo Barbearia" ></a>
                </div>

                <div>
                    <a  class="header-button" href="info.php">INFORMAÇÕES</a>
                </div>
            </nav>


            <main class="hero container">
                <h1>ESTILO É UM REFLEXO DA SUA ATITUDE E SUA PERSONALIDADE</h1>
                <p>Horários de funcionamento: 07:00 ás 19:00</p>
                <a href="formulario.php" class="button-contact" target="_blank">
                    Agendar horário
                </a>
            </main>

        </header>


        
    </div>


    <!-- ABOUT -->

    <section class="abount">
        <div class="container abount-content">
            <div>
                <img src="assets/images.svg" alt="imagens da barbearia">
            </div>

            <div class="abount-description">
                <h2>Introdução</h2>
                <p>Bem-vindo à Barbearia Conforto, onde tradição e estilo se encontram. Nossa equipe de barbeiros especializados está aqui para proporcionar a você uma experiência única de cuidados masculinos. Em um ambiente acolhedor, oferecemos cortes de cabelo precisos e tratamentos de barba impecáveis. Na Barbearia Conforto, não é apenas sobre o visual, mas também sobre a experiência relaxante e personalizada que proporcionamos a cada cliente. Venha nos visitar e descubra o conforto em cada detalhe.</p>
                <p>Horário de funcionamentos: <strong>07:00</strong> ás <strong>19:00</strong></p>
            </div>

        </div>


    </section>


    <!-- SERVICES -->

    <section class="services">
        <div class="services-content container">
            <h2>Serviços</h2>
            <p>Na Barbearia Conforto, oferecemos cortes de cabelo modernos, tratamentos especializados para barba e serviços de barboterapia. Nossos barbeiros experientes garantem precisão e atenção aos detalhes em cada serviço. Em um ambiente acolhedor, proporcionamos uma experiência de cuidados masculinos única, onde qualidade e conforto se encontram. Descubra o estilo e a sofisticação na Barbearia Conforto, onde cuidar de si mesmo é simples e eficiente.</p>
        </div>

        <section class="haircuts">
            <div class="haircut">
                <img src="assets/corte1.png" alt="corte 1">

                <div class="haircut-info">
                    <strong>Corte Normal</strong>
                    
                </div>
            </div>

            <div class="haircut">
                <img src="assets/corte2.png" alt="corte 2">

                <div class="haircut-info">
                    <strong>Barba completa</strong>
                    
                </div>
            </div>

            <div class="haircut">
                <img src="assets/corte3.png" alt="corte 3">

                <div class="haircut-info">
                    <strong>Corte e Barba</strong>
                    
                </div>
            </div>
        </section>
    </section>

    <!-- FOOTER -->

    <div class="services">
        <h2>Venha conhecer</h2>
    </div>

    <iframe 
    width="100%"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d923.6080990303259!2d-39.732812647289954!3d-5.128938359350757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7bde95314a4feb9%3A0x61e46d1e4819f9a4!2sR.%20Padre%20Ant%C3%B4nio%20Corr%C3%AAa%20de%20S%C3%A1%2C%20366%20-%20Centro%2C%20Boa%20Viagem%20-%20CE%2C%2063870-000!5e1!3m2!1spt-BR!2sbr!4v1699399449595!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    <footer class="footer">
        <div class="footer-icons">
                <a href="">
                    <i class="fa-brands fa-instagram fa-2x"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-facebook fa-2x"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-tiktok fa-2x"></i>
                </a>

        </div>

        <div>
            <img src="assets/logo.svg" alt="logo">
        </div>

        <p>Copyright 2023 | Barbearia Conforto - Todos direitos reservados.</p>
    </footer>

    <!-- WHATSAPP -->
    <a href="#" class="btn-whatsapp" target="_blank">
        <img src="assets/whatssapp.svg" alt="">
        <span class="tooltip-text">Agende seu horário</span>
    </a>

</body>
</html>