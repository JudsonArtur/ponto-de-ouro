<?php include_once('header.php') ?>
<section class="main_banner banner_altern" style="height:auto;">
    <div class="container">
        <header>
            <h2>Iluminarias</h2>
            <p><a href="#">Home</a><span class="icon ion-ios-arrow-forward"></span>
                <a href="#">Produtos</a><span class="icon ion-ios-arrow-forward"></span>
                <a>Capacetes Intern</a></p>
        </header>
        <div class="filters">
            <h3>Categoria<span class="icon ion-ios-add"></span></h3>
            <ul>
                <li>
                    <a href="#">Iluminarias</a>
                    <ul>
                        <li><a href="#">Lampadas Florescentes</a></li>
                        <li><a href="#">Candieiros Internos</a></li>
                        <li><a href="#">Candieiros Externos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Papeis de Parede</a>
                </li>
                <li>
                    <a href="#">Materiais de Construção</a>
                </li>
                <li>
                    <a href="#">Plasticinas</a>
                </li>
                <li>
                    <a href="#">Papeis de Parede</a>
                </li>
            </ul>
            <h3>Filtar<span class="icon ion-ios-add"></span></h3>
            <ul>
                <li><a href="#">Nome</a></li>
                <li><a href="#">Marcas</a></li>
            </ul>
            </ul>
        </div>
        <div class="lists_products">
            <div class="products_body">
                <?php for($i = 0; $i < 9; $i++){ ?>
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
                            <a class="btn btn_altern more_pro" style="border:1px solid #444;" >Ver mais Produtos</a>
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

                                </form>
                            </div>
                        </div>
                    </div>
                </article>
                <?php } ?>
                <ul class="paginator">
                    <li><a><span class="icon ion-md-arrow-back"></span></a></li>
                    <li><a class="active">1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                    <li><a><span class="icon ion-md-arrow-forward"></span></a></li>
                </ul>
            </div>

        </div>
    </div>


</section>
<?php include_once('footer.php')?>