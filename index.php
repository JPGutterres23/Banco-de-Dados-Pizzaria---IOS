<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza dos Gurizes</title>
</head>

<header>
   <div class="interface">
        <nav class="menu-desktop">
            <ul>
                <li> <a href="">Bem-Vindo</a></li>
                <li> <a href="">Faça seu pedido</a></li>
                <li> <a href="">Cardápio</a></li>
            </ul>
        </nav>
</header>

<body>
  <div class="pedidos">
    <img class="logotipo2" src="imagens/logotipo-removebg-preview.png" alt="Logotipo da pizzaria">

    <h2>Bem-vindo a Pizzaria dos Gurizes! Conte com us guri para trazer a pizza mais saborosa para sua família ou entrega-la quentinha na nossa pizzaria!</h2>

    <h2>Escolha seu pedido:</h2>

    <div class="pedidos2">
    <h1>Delivery</h1>
    Rua:    <input type="text" name="rua" required autocomplete="off">
    Número: <input type="text" name="número" required autocomplete="off">
    Cidade: <input type="text" name="cidade" required autocomplete="off">
    Estado: <input type="text" name="estado" required autocomplete="off">
    Bairro: <input type="text" name="bairro" required autocomplete="off">
    Complemento: <input type="text" name="complemento" required autocomplete="off">
    </div>

   
    <h1>Retirar na Loja</h1>

    <form action="#">
    Nome: <input type="text" name="nome" required autocomplete="on">
    Endereço: <input type="text" name="endereço" required autocomplete="on">
    Telefone: <input type="text" name="telefone" required autocomplete="on">
    </form>
    </div>

</body>

<footer>
    Pizzaria dos Gurizes&copy; Todos os direitos reservados
</footer>
</html>