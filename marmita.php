<?php
include("dados.php");
?>


<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebSite">

<head>
    <title>Marmitas da Dona Rita</title>
    <meta charset="UTF-8">

    <link href="_cdn/boot.css" rel="stylesheet" type="text/css" />
    <link href="_cdn/estilo.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <header class="main_header">
        <div class="main_header_content">
            <a href="#" class="logo">
                <img src="#" alt="">
            </a>

            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Conheça mais sobre Dona Rita</a></li>
                    <li><a href="#">Contatos</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <section class="main_blog_exemplo">
        <?php
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            // echo $_GET['id'];

            $id = $_GET['id'];
            foreach ($cardapio as $key => $value) {
                if ($value['id'] == $id) {

        ?>
                    <article>
                        <!--Alterar o tamanho da imagem -->
                        <img src=<?= $value['imagem'] ?> alt=<?= $value['nome'] ?> title=<?= $value['nome'] ?> itemprop="image">
                        <h2><span itemprop="headline"><?= $value['nome'] ?></span></h1>
                            <p><?= $value['ingredientes'] ?></p>
                            <h2>
                                <span> Preço: <span itemprop="price"> R$ <?= $value['preco'] ?></span></span><br />
                                <span> Tamanho:<span itemprop="size"><?= $value['tamanho'] ?></span>
                                    </h3>
                    </article>
            <?php
                }
            }
        } else {
            ?>
            <h1>Sinto muito, essa marmita não está disponivel!</h1>
        <?php
        }
        ?>
    </section>

    <section class="main_blog">
        <header class="main_blog_header">
            <h1 class="icon-blog"> Confira nossas outras opções!</h1>
            <p>Aqui voce encontra o nosso cardápio das nossas marmitas.</p>
        </header>

        <?php
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            foreach ($cardapio as $key => $value) {
                if ($value['id'] != $id) {
        ?>
                    <article>
                        <a href="marmita.php?id=<?= $value['id'] ?>" itemprop="mainEntityOfPage">
                            <img src=<?= $value['imagem'] ?> alt=<?= $value['nome'] ?> title=<?= $value['nome'] ?> itemprop="image">
                        </a>
                        <h2><a href="#" class="title"><span itemprop="headline"><?= $value['nome'] ?></span></a></h2>
                        <p><?= substr($value['ingredientes'], 0, 100); ?></p>
                        <h3>
                            <span itemscope> Preço:<span itemprop="preço">R$<?= $value['preco'] ?></span></span><br />
                        </h3>

                    </article>

                <?php
                }
            }
        } else {
            foreach ($cardapio as $key => $value) {

                ?>
                <article>
                    <a href="marmita.php?id=<?= $value['id'] ?>" itemprop="mainEntityOfPage">
                        <img src=<?= $value['imagem'] ?> alt=<?= $value['nome'] ?> title=<?= $value['nome'] ?> itemprop="image">
                    </a>
                    <h2><a href="#" class="title"><span itemprop="headline"><?= $value['nome'] ?></span></a></h2>
                    <p><?= substr($value['ingredientes'], 0, 100); ?></p>
                    <h3>
                        <span itemscope> Preço:<span itemprop="preço">R$<?= $value['preco'] ?></span></span><br />
                    </h3>

                </article>
        <?php
            }
        }
        ?>
    </section>
    <section class="main_footer">
        <header>
            <h1>Quer saber mais ?</h1>
        </header>
        <article class="main_footer_our_class">
            <header>
                <h2>Nossas Paginas</h2>
            </header>

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Conheça mais sobre Dona Rita</a></li>
                <li><a href="#">Contatos</a></li>
            </ul>

        </article>

        <article class="main_footer_links">
            <header>
                <h2>Links Uteis</h2>
            </header>

            <ul>
                <li><a href="#">Politicas de Privacidades</a></li>
                <li><a href="#">Avisos Legais</a></li><!-- comment -->
                <li><a href="#">Termos de Uso</a></li>
            </ul>
        </article>

        <article class="main_footer_about">
            <header>
                <h2>Sobre o Projeto</h2>
            </header>
            <p>Peça já! O que você esta esperando ?</p>
        </article>

    </section>

    <footer class="main_footer_rights">
        <p>Todos os Direitos Reservavos a Lucas Meireles F Lima</p>
    </footer>



</body>

</html>