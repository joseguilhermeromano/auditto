<header id="header">
    <h1>Processo Seletivo AUDITTO 2023</h1>
</header>
<section>
    <nav>
        <ul>
            <li><span class="fa fa-house" style="color:blue"></span>&nbsp;<a href="/index.php">Home</a></li>
        </ul>
    </nav>
    <article>
        <h3>Questão 01</h3><hr>
        <p>De acordo com o código abaixo, crie um Ajax mandando os dados para a url:</p>
        <p> <b>teste/cliente.php</b> usando JQuery:</p>
        
        <form id="formulario" method="POST">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" value="Robson"><br><br>
            <label for="nome">Sobrenome:</label><br>
            <input type="text" id="sobreNome" name="sobreNome" value="Silva"><br><br>

            <button type="submit" class="btn btn-primary"><span class="fa fa-paper-plane"></span>&nbsp;Enviar</button><br><br>
        </form>

        <h3>Questão 02</h3><hr>
        <p>Quando entramos em um site via CURL as vezes ele retorna o texto do lado esquerdo e as vezes o texto do lado direito,</p>
        <p>crie em php uma função que retorne: 1 - identifica se o texto é o do lado esquerdo ou direito. </p>
        <p>2 - quantas palavras tem esse texto. 3 - O texto de traz para frente</p>

        <img src="assets/img/auditto.png">

        <br><br>

        <button id="button" class="btn btn-primary">
            <span class="fa fa-eye"></span>&nbsp;Clique para analisar a página Auditto.com.br/solucoes
        </button>

        <br><br>

        <h3>Questão 03</h3><hr>
        <p>Visualizando a imagem abaixo, faça uma Query onde traga os dados que tenham a data de emissão entre 14/10/2020 </p>
        <p>e 30/10/2020 e que não traga o queijo, essa query vai servir para entrada de novos dados, futuramente pode ter outros queijos:</p>

        <img src="assets/img/produtos.png">

        <br><br>

        <button id="buttonQuery" class="btn btn-primary">
            <span class="fa fa-database"></span>&nbsp;Clique aqui para executar a query
        </button>

        <div id="tabela"></div><br>

        <h3>Questão 04</h3><hr>
        <p>Visualizando o código abaixo, crie uma função em javascript </p>
        <p>que guarde o título e a descrição em um array usando jquery:</p>

        <img src="assets/img/codigo.png">

        <br><br>

        <h2>Código utilizado na minha solução:</h2>

        <div class="et_pb_blurb_container">
            <div class="et_pb_blurb_description">
                <h1>Auditoria</h1>
                <p><span>Dashboards  que mostram a auditoria completa</span><p>
            </div>
        </div>

        <div class="et_pb_blurb_container">
            <div class="et_pb_blurb_description">
                <h1>Fiscalização</h1>
                <p><span>Dashboards  que mostram a fiscalização completa</span><p>
            </div>
        </div>

        <div class="et_pb_blurb_container">
            <div class="et_pb_blurb_description">
                <h1>Processo</h1>
                <p><span>Dashboards  que mostram o processo completo</span><p>
            </div>
        </div>

        <div class="et_pb_blurb_container">
            <div class="et_pb_blurb_description">
                <h1>Operação</h1>
                <p><span>Dashboards  que mostram a operação completa</span><p>
            </div>
        </div>

        <div class="et_pb_blurb_container">
            <div class="et_pb_blurb_description">
                <h1>Financeira</h1>
                <p><span>Dashboards  que mostram a área financeira completa</span><p>
            </div>
        </div>

        <br><br>

        <button id="buttonArray" class="btn btn-primary"><span class="fa fa-list"></span>&nbsp;Clique aqui para ver o resultado</button>

        <br><br>

        <div id="resultado"></div>

        <br><br>

        <h3>Questão 05</h3><hr>
        <p>Uma empresa decide dar um reajuste a seus funcionários de acordo com os seguintes critérios:</p>
        <p>1- 50% para aqueles que ganham menos de R$ 3.000,00;</p>
        <p>2- 20% para aqueles que ganham entre R$ 3.000,01 e R$ 10.000 e;</p>
        <p>3- 15% para os demais.</p> 
        <p>Escreva um algoritmo em PHP para calcular e retornar o valor do salário reajustado de cada funcionário da empresa.</p>

        <br><br>

        <form id="formularioSalario" method="POST">
            <div class="col-sm-2">
                <label for="nome">Salário:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">R$</div>
                    </div>
                    <input  type="text" class="form-control" name="salario" id="money-field1">
                </div>
            </div>
           <br><br>

            <button type="submit" class="btn btn-primary"><span class="fa fa-paper-plane"></span>&nbsp;Enviar</button>
        </form><br><br>

    </article>
</section>
<footer id="footer">
    <p>Todos os direitos reservados. Projeto para o processo seletivo AUDITTO 2023</p>
</footer>