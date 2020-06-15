<?php include_once('header.php') ?>
<section class="main_banner banner_altern" style="height:auto; ">
    <div class="container">
        <header style="margin-bottom:50px; text-align:center">
            <h2>Finalizar o Orçamento.</h2>
            <p>
                <a href="#">Home</a><span class="icon ion-ios-arrow-forward"></span>
                <a>Finalizar - Orçamento</a>
            </p>
        </header>
        <div class="read_at finish" style="margin-bottom:55px;">
            <p>Insira os seus dados pessoais para receber um pedido de orçamento para os produtos selecionados.</p>
            <div class="forms">
                <h3>Dados do Cliente</h3>
                <form>
                    <div class="item_input">
                        <span class="icon ion-ios-person"></span><input type="text" name="name"
                            placeholder="Nome ">
                    </div>
                    <div class="item_input">
                        <span class="icon ion-ios-cube"></span><input type="text" name="empresa" placeholder="Empresa">
                    </div>
                    <div class="item_input">
                        <span class="icon ion-md-flag"></span><input type="text" name="nif" placeholder="NIF">
                    </div>
                    <div class="item_input">
                        <span class="icon ion-ios-pin"></span><input type="text" name="morada"
                            placeholder="Endereço">
                    </div>
                    <div class="item_input">
                        <span class="icon ion-ios-at"></span><input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="item_input">
                        <span class="icon ion-md-call"></span><input type="tel" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="item_input">
                        <span class="icon ion-md-mail"></span>
                        <textarea rows="5" placeholder="Mensagem"></textarea>
                    </div>
                    <button class="btn btn_default">Enviar <i class="icon ion-md-send"></i></button>
                    <a class="btn btn_altern" style="border:1px solid #444;" href="#" >
                    <i style="margin: 0 6px 0 0" class="icon ion-md-arrow-back"></i>
                    Voltar</a>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once('footer.php')?>