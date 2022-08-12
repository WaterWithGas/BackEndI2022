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

    <main>
        <div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Aqui você encontra a melhor refeição do seu dia!</h1>
                    </header>

                    <p>Veja já o nosso cardápio</p>
                    <p><a href="#" class="btn"> Saiba Mais </a>
                    <p>
                </div>
            </article>
        </div>



        <section class="main_blog">
            <header class="main_blog_header">
                <h1 class="icon-blog"> Confira nossas marmitas !</h1>
                <p>Aqui voce encontra o nosso cardápio dsa marmitas.</p>
            </header>

            <?php
            foreach ($cardapio as $key => $value) {
            ?>

                <article>
                    <a href="marmita.php?id=<?= $value['id'] ?>" itemprop="mainEntityOfPage">
                        <img src=<?= $value['imagem'] ?> alt=<?= $value['nome'] ?> title=<?= $value['nome'] ?> itemprop="image">
                    </a>
                    <h2><a href="#" class="title"><span itemprop="headline"><?= $value['nome'] ?></span></a></h2>
                    <p><?= substr($value['ingredientes'], 0, 100); ?>...</p>
                    <h3>
                        <span> Preço: <span itemprop="price"> R$ <?= $value['preco'] ?></span></span><br />
                    </h3>

                </article>

            <?php
            }
            ?>
        </section>

    </main>

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
        <article class="main_footer_links">
            <header>
                <h2>Credito das imagens</h2>
            </header>

            <ul>
                <li><a href="https://br.freepik.com/fotos-vetores-gratis/marmita">Marmita foto criado por freepik - br.freepik.com</a></li><!-- comment -->
                <li><a href="https://br.freepik.com/fotos-vetores-gratis/marmita-fitness">Marmita fitness foto criado por timolina - br.freepik.com</a></li>
                <li><a href="https://www.freepik.com/photos/food-top-view">Food top view photo created by timolina - www.freepik.com</a></li><!-- comment -->
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