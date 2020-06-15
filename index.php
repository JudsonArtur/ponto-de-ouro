<?php include_once('header.php') ?>
<section class="main_banner" style="background-image:url('img/de3.jpg.svg');">
    <div class="container">
        <div class="banner_text flex_center">
            <h2>Faça já o seu Orçamento de forma rápida e Segura</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit, Distinctio excepturi rerum eos tempore
                saepe!</p>
            <div class="flex_vertical">
                <a class="btn btn_default">Pedir Orçamento</a>
                <a class="flex_center" href="#"><span class="icon ion-logo-facebook"></span></a>
                <a class="flex_center" href="#"><span class="icon ion-logo-linkedin"></span></a>
                <a class="flex_center" href="#"><span class="icon ion-logo-youtube"></span></a>
            </div>
        </div>
        <div class="banner_img__last">
            <img src="img/fundo4.svg">
        </div>
    </div>
</section>
<section class="up_and_bottom_space products">
    <div class="container">
        <header>
            <h2>Productos</h2>
        </header>
        <div class="products_body">
            <?php for($i = 0; $i < 3; $i++){ ?>
            <article class="products_items">
                <a class="image more_info">
                    <img src="./img/icon_test.jpg">
                </a>
                <div class="item_body">
                    <h2>Capacete Amarelo Dalevis</h2>
                    <span class="more_info">Mais Detalhes e Imagens </span>
                    <div>
                        <span class="budget" role="button">Pedir Orçamento</span>
                        <span class="flex_center icon ion-md-cart add_cart"></span>
                    </div>
                </div>
                <div class="modal_sell">
                    <div class="modal_sell__body">
                        <strong>Adicionou o seguinte produto ao orçamento</strong>
                        <img src="./img/icon_test.jpg">
                        <p>Capacete Amarelo Dalevis</p>
                        <a class="btn btn_default" href="#">Ver Orçamento</a>
                        <a class="btn btn_altern more_pro" style="border:1px solid #444;">Ver mais Produtos</a>
                    </div>
                </div>

                <div class="modal_product">
                    <div class="modal_product__body">
                        <span class="close ion-ios-close"></span>
                        <div class="modal_side__image">
                            <div class="main_image">
                                <img src="img/icon_test.jpg">
                            </div>
                            <div class="secundary_imagen">
                                <img src="img/linkedin-sales-navigator-EI50ZDA-l8Y-unsplash.jpg">
                                <img src="img/mc.png">
                                <img src="img/sss.jpeg">
                                <img src="img/linkedin-sales-navigator-EI50ZDA-l8Y-unsplash.jpg">
                                <img src="img/mc.png">

                            </div>
                        </div>
                        <div class="modal_side_text">
                            <h2>Capacete Amarelo Dalevis</h2>
                            <ul>
                                <li data-target="modal-desc"><a class="active">Descrição</a></li>
                                <li data-target="modal-espec"><a>Especificação</a></li>
                            </ul>
                            <div class="modal_item active" id="modal-desc">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio illo
                                    tempora, laborum officia dolorum ex. Nemo ipsa delectus, temporibus perferendis
                                    aspernatur amet repellendus, dolorum illum adipisci nam perspiciatis accusamus
                                    dolor?
                                </p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis culpa
                                    voluptatibus aperiam at facere id iure, eius repellat libero eaque doloremque
                                    ipsum non vel assumenda ea nam! Esse, ipsam amet!
                                </p>
                            </div>
                            <div class="modal_item" id="modal-espec">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio illo
                                    tempora, laborum officia dolorum ex. Nemo ipsa delectus, temporibus perferendis
                                    aspernatur amet repellendus, dolorum illum adipisci nam perspiciatis accusamus
                                    dolor?
                                </p>
                            </div>
                            <form>
                                <button class="btn btn_default" style="margin-right:10px">Pedir Orçamento</button>
                                <button class="btn btn_altern add_btn btn_rem">
                                    <span class="ion-ios-remove"></span>
                                </button>
                                <input type="number" class="qtd" value="1">
                                <button class="btn btn_altern add_btn btn_add">
                                    <span class="ion-ios-add"></span>
                                </button>
                                <a class="flex_center" href="#"><span class="icon ion-logo-facebook"></span></a>
                                <a class="flex_center" href="#"><span class="icon ion-logo-linkedin"></span></a>
                                <a class="flex_center" href="#"><span class="icon ion-logo-youtube"></span></a>

                            </form>
                        </div>
                    </div>
                </div>
            </article>
            <?php } ?>
        </div>
        <a class="view btn btn_altern"> Ver Mais Produtos</a>
    </div>
</section>
<section class="about_us up_and_bottom_space">
    <div class="container">
        <header>
            <h2>Sobre nós</h2>
        </header>
        <div class="about_us__body">
            <article>
                <h2><span class="flex_center icon ion-md-people"></span>Quem Somos</h2>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est adipisci magnam suscipit, ad
                        inventore optio harum aliquid maxime quidem, beatae tempore voluptatum cumque animi aliquam, in
                        voluptatem ratione quae facilis.</p>
                </div>
            </article>
            <article>
                <h2><span class="flex_center icon ion-md-people"></span>Missão</h2>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est adipisci magnam suscipit, ad
                        inventore optio harum aliquid maxime quidem, beatae tempore voluptatum cumque animi aliquam, in
                        voluptatem ratione quae facilis.</p>
                </div>
            </article>
            <article>
                <h2><span class="flex_center icon ion-md-people"></span>Visão</h2>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est adipisci magnam suscipit, ad
                        inventore optio harum aliquid maxime quidem, beatae tempore voluptatum cumque animi aliquam, in
                        voluptatem ratione quae facilis.</p>
                </div>
            </article>
            <article>
                <h2><span class="flex_center icon ion-md-people"></span>Valores</h2>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est adipisci magnam suscipit, ad
                        inventore optio harum aliquid maxime quidem, beatae tempore voluptatum cumque animi aliquam, in
                        voluptatem ratione quae facilis.</p>
                </div>
            </article>
        </div>
        <article class="about_contact">
            <div class="img_about">
                <img src="./img/contact_s.svg" alt="ddd">
            </div>
            <div class="text_about">
                <h2>Pronto para Fornecimento e Parceria </h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam nihil enim corrupti distinctio
                    reprehenderit? Excepturi vero ex ab autem.</p>
                <a href="#" class="btn btn_altern_2">Entre em Contacto</a>
            </div>
        </article>
    </div>
</section>
<section class="how_works up_and_bottom_space">
    <div class="container">
        <header>
            <h2>Como Funciona</h2>
            <p>Faça já o teu orçamento em 3 simples paços, com rapidez e eficácia.</p>
        </header>
        <div class="img_works">
            <img src="./img/step_1.svg" class="img_steps active" id="step_1" alt="Selectionar o Produto">
        </div>
        <div class="text_works">
            <article>
                <h2 class="active"><span class="flex_center active">1</span>Selecionar Produtos</h2>
                <p class="active">
                    Lorem ipsum, dolor sit amet consectetur adipisiciconsectetur quaerat doloremque nihil culpa sit?
                </p>
            </article>
            <article>
                <h2><span class="flex_center">2</span>Verificar a lista de Orçamento</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisiciconsectetur quaerat doloremque nihil culpa sit?
                </p>
            </article>
            <article>
                <h2><span class="flex_center">3</span>Preencher o formulário e Enviar</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisiciconsectetur quaerat doloremque nihil culpa sit?
                </p>
            </article>
        </div>
    </div>
</section>
<?php include_once('footer.php')?>