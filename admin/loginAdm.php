<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Minha Agenda</title>

        <!-- CSS only -->
        <link rel="stylesheet" href="../css/reset.css">

    <link rel="stylesheet" href="../css/stely.css">
    <link rel="stylesheet" href="css/responsiv.css">
</head>
<body>

    <main>
    <section>
    <form id="loginForm" class="loginAdn" onsubmit="carregarLoginAdmin(); return false;">

        <div class="form-group col-md-6">
             <input type="email" id="email" name="email" placeholder="Informe seu E-mail" required>
        </div>

         <div class="form-group col-md-6">
            <input type="password" class="form-control2" id="password" name="password" placeholder="Informe sua Senha" required>
         </div>

           <!-- BTN COM O TIPO SUBMIT QUE IRÁ SUBMETER O FORMULÁRIO -->
           <button type="submit">Área de Login</button>

        <div class="msgLogin"></div>

    </form>
    </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="../javaScript/loginAd.js"></script>
 
</body>
</html>