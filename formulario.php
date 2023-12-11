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

    <link rel="stylesheet" href="form.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">    

</head>
<body>

    
    
    <!-- HEADER -->

    <div class="bg-home">
        <header>


            <div class="form">
                <form action="agendamento.php" method="post" class="agenda">
                    <legend>AGENDE SEU HORÁRIO</legend>
                
                    <div class="inp">
                        <label for="">
                            <input type="text" name="nome" placeholder="Digite seu nome">
                        </label>
                        <label for="">
                            <input type="text"
                            name="horario" placeholder="Digite seu horário">
                        </label>
                        <label for="">
                            <input type="text"
                            name="dia" placeholder="Digite o dia">
                        </label>
                        <label for="">
                            <input type="text"
                            name="corte" placeholder="Digite seu corte">
                        </label>
                    </div>

                    <div class="btn">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>

        </header>


        
    </div>


   