<header>
    <nav>
        <div class="botao-logo">
            <a class="nome-botoes" href="../index.php"><img class="imagem-logo" src="../Imagens/Logo-OurZoo.png" alt="Our Zoo"></a>
        </div>
        <div class="botoes-menu">
            <a class="nome-botoes"><span>Visitar</span></a>
            <div class="menu-baixo">
                <a href="../Apresentacoes-Atracoes.php">Apresentações</a>
                <a href="../Precos.php">Preços</a>
                <a href="../Planear-Visita.php">Planear Visita</a>
                <a href="../horarios.php">Horários</a>
                <a href="../Bilheteira.php">Bilheteira</a>
                <a href="../Sugestao-visita.php">Sugestão Visita</a>
                <a href="../Novidades.php">Novidades</a>
                <a href="../Localizacao.php">Localização</a>
            </div>
        </div>
        <div class="botoes-menu">
            <a class="nome-botoes"><span>Conhecer</span></a>
            <div class="menu-baixo">
                <a href="../Animais.php">Animais</a>
                <a href="../Plantas.php">Plantas</a>
                <a href="../Mapa.php">Mapa do Zoo</a>
                <?php
                $sessao_vazia = isset($sessao);
                if($sessao_vazia == true){
                    echo "<a href='../Administracoes/AdicionarAnimal.php'>Adicionar Animal</a>";
                    echo "<a href='../Administracoes/Lista_animais.php'>Lista Animais</a>";
                }
                ?>
            </div>
        </div>
        <div class="botoes-menu">
            <a class="nome-botoes"><span>Educar</span></a>
            <div class="menu-baixo">
                <a href="../Escolas.php">Escolas</a>
                <a href="../Centro-Pedagogico.php">Centro Pedagógico</a>
            </div>
        </div>
        <div class="botoes-menu">
            <a class="nome-botoes"><span>Viver</span></a>
            <div class="menu-baixo">
                <a href="../Festas-Aniversario.php">Aniversários</a>
                <a href="../Sabado-Selvagem.php">Sábado Selvagem</a>
                <a href="../Eventos.php">Eventos</a>
                <a href="../Zookids.php">ZooKids</a>
            </div>
        </div>
        <div class="botoes-menu">
            <a class="nome-botoes"><span>Apoiar</span></a>
            <div class="menu-baixo" style="min-width: 125%;">
                <a href="../Apadrinhar.php" style="width: 100%;">Apadrinhar</a>
                <a href="../Administracoes/Login.php" style="width: 100%;">Login</a>
                <?php
                if($sessao_vazia ==true){
                    echo "<a href='../Administracoes/index_admin.php'>Opções Animais</a>";
                }
                ?>
            </div>
        </div>
    </nav>
</header>

