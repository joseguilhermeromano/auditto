<header id="header">
    <h2>Processo Seletivo AUDITTO 2023</h2>
</header>
<section>
    <nav>
        <ul>
            <li><a href="/index.php">Home</a></li>
        </ul>
    </nav>
    <article>
        <h3>Questão 01</h3>
        <p>De acordo com o código abaixo, crie um Ajax mandando os dados para a url:</p>
        <p> <b>teste/cliente.php</b> usando JQuery:</p>
        <pre>
            <form id="formulario" method="POST">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" value="Robson"><br>
                <label for="nome">Sobrenome:</label><br>
                <input type="text" id="sobreNome" name="sobreNome" value="Silva">

                <input type="submit" value="submit">
            </form>
        </pre>

        <h3>Questão 02</h3>
        <p>Quando entramos em um site via CURL as vezes ele retorna o texto do lado esquerdo e as vezes o texto do lado direito,</p>
        <p>crie em php uma função que retorne: 1 - identifica se o texto é o do lado esquerdo ou direito. </p>
        <p>2 - quantas palavras tem esse texto. 3 - O texto de traz para frente</p>

        <img src="assets/img/auditto.png">

        <br><br>

        <button id="button">Clique para analisar a página Auditto.com.br/solucoes</button>

        <br><br>

        <h3>Questão 03</h3>
        <p>Visualizando a imagem abaixo, faça uma Query onde traga os dados que tenham a data de emissão entre 14/10/2020 </p>
        <p>e 30/10/2020 e que não traga o queijo, essa query vai servir para entrada de novos dados, futuramente pode ter outros queijos:</p>

        <img src="assets/img/produtos.png">

        <br><br>

        <button id="buttonQuery">Clique aqui para executar a query</button>

        <div id="tabela"></div>

    </article>
</section>
<footer id="footer">
    <p>Todos os direitos reservados. Projeto para o processo seletivo AUDITTO 2023</p>
</footer>