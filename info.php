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


    <link rel="stylesheet" href="info.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">

</head>
<body>
    
    
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
                <h1>DESCUBRA MAIS SOBRE NOSSAS INFORMAÇÕES</h1>
                <p>Deslize para baixo para ver as informações</p>
                <a href="formulario.php" class="button-contact" target="_blank">
                    Agendar horário
                </a>
            </main>

        </header>


        
    </div>


    <!-- ABOUT -->

    <section class="abount">
        <div class="container abount-content">
            <div class="abount-description">
                <h2>Tabela de Cortes</h2>     
            </div>
                <div class="tabela">

                    <?php
                        $servidor = "localhost";
                        $usuario = "root";
                        $senha = "";
                        $banco = "barbearia";

                        $conn = new mysqli($servidor, $usuario, $senha, $banco);

                        $consulta = "SELECT * FROM `cortes`";
                        $resultado = $conn->query($consulta);

                        if($resultado->num_rows > 0) {

                        ?>

                    <table border="1px solid" class="tbbarbearia">
                    
                    <?php
                        while($row = $resultado->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$row["nome"] ."</td>";
                        }
                
                    ?>

                    </div>

                    </table>

                    

                    <?php
                        }else {
                            echo "0 itens";
                        }
                        $conn->close();
                    ?>
                
            

        </div>


    </section>


    <!-- SERVICES -->

    <section class="services">
        <div class="services-content container">
            <h2>Exemplos de Cortes</h2>
        </div>

        <section class="haircuts">
            <div class="haircut">
                <img src="cortes/degrade-removebg-preview.png" alt="corte 1">

                <div class="haircut-info">
                    <strong>Degradê</strong>
                     
                </div>
            </div>

            <div class="haircut">
                <img src="cortes/moicano-removebg-preview.png" alt="corte 2">

                <div class="haircut-info">
                    <strong>Moicano</strong>
                    
                </div>
            </div>

            <div class="haircut">
                <img src="cortes/social-removebg-preview.png" alt="corte 3">

                <div class="haircut-info">
                    <strong>Social</strong>
                    
                </div>
            </div>
            <div class="haircut">
                <img src="cortes/low-fade-removebg-preview.png" alt="corte 3">

                <div class="haircut-info">
                    <strong>Low-fade</strong>
                
                </div>
            </div>
            <div class="haircut">
                <img src="cortes/barba.jpeg" alt="corte 3">

                <div class="haircut-info">
                    <strong>Barba</strong>
                     
                </div>
            </div>
            <div class="haircut">
                <img src="cortes/platinado-removebg-preview.png" alt="corte 3">

                <div class="haircut-info">
                    <strong>Platinado</strong>
                     
                </div>
            </div>
            <div class="haircut">
                <img src="cortes/luzes-removebg-preview.png" alt="corte 3">

                <div class="haircut-info">
                    <strong>Luzes</strong>
                     
                </div>
            </div>
            <div class="haircut">
                <img src="cortes/pigmentacao-removebg-preview.png" alt="corte 3">

                <div class="haircut-info">
                    <strong>Pigmentação</strong>
                     
                </div>
            </div>
            </div>
        </section>
    </section>

    

    <!-- FOOTER -->

    <section class="abount">
        <h1>Nossos barbeiros</h1>
        <div class="container abount-content">
            <div class="abount-description">
                <img src="cortes/barbeiro-curso-online.png" alt="">     
            </div>
                <div class="tabela">

                    <?php
                        $servidor = "localhost";
                        $usuario = "root";
                        $senha = "";
                        $banco = "barbearia";

                        $conn = new mysqli($servidor, $usuario, $senha, $banco);

                        $consulta = "SELECT * FROM `barbeiros`";
                        $resultado = $conn->query($consulta);

                        if($resultado->num_rows > 0) {

                        ?>

                    <table border="1px solid" class="tbbarbearia">
                    
                    <?php
                        while($row = $resultado->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$row["nome"] ."</td>";
                        }
                
                    ?>

                    </div>

                    </table>

                    

                    <?php
                        }else {
                            echo "0 itens";
                        }
                        $conn->close();
                    ?>
                
            

        </div>


    </section>

    <!-- FOOTER -->

    <div class="services">
        <h2>Conheça o que a dentro do nosso frigobar</h2>
    </div>
    <div class="content abount-content color">
        <div class="img">
            <img src="assets/duplex-1536x1262.webp" alt="">
        </div>

        <?php

            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $banco = "barbearia";

            $conn = new mysqli($servidor, $usuario, $senha, $banco);

            $consulta = "SELECT * FROM `bebidas`";
            $resultado = $conn->query($consulta);

            if($resultado->num_rows > 0) {

        ?>
        <table border="1px solid" class="tabelabarbearia">

        <?php
            while($row = $resultado->fetch_assoc()){
                echo "<tr>";
                echo "<td>". $row["nome"] . "</td>"; 
            }
        ?>
        
        </table>
    </div>


    <?php
        }else {
            echo "0 itens";
        }

        $conn->close();
    ?>


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

    <script src="script.js"></script>
</body>
</html>