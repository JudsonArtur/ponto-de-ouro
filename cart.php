<?php include_once('header.php') ?>
<section class="main_banner banner_altern" style="height:auto; ">
    <div class="container">
        <header style="margin-bottom:20px;">
            <h2>O meu Orçamento.</h2>
            <p>
                <a href="#">Home</a><span class="icon ion-ios-arrow-forward"></span>
                <a>Pedido de Orçamento</a>
            </p>
        </header>
        <div class="read_at" style="margin-bottom:55px;">
            <table>
                <thead>
                    <th class="tbl_img">Imagem</th>
                    <th class="tbl_pdt">Produto</th>
                    <th class="tbl_tam">Tamanho</th>
                    <th class="tbl_peso">Peso</th>
                    <th class="tbl_qtd">Quantidade</th>
                    <th class="tbl_op">Opções</th>
                </thead>
                <tbody>
                    <?php for($i = 0; $i < 5; $i++): ?>
                    <tr>
                        <td class="tbl_img"><img src="./img/icon_test.jpg"></td>
                        <td class="tbl_pdt">Capacete Amarelo Dalevis </td>
                        <td class="tbl_tam">52 - 61 cm</td>
                        <td class="tbl_peso">2 kg</td>
                        <td class="tbl_qtd">
                            <button class="btn btn_altern add_btn btn_rem">
                                <span class="ion-ios-remove"></span>
                            </button>
                            <input min='1' type="number" class="qtd" value="1">
                            <button class="btn btn_altern add_btn btn_add">
                                <span class="ion-ios-add"></span>
                            </button></td>
                        <td class="tbl_op"><span class="eliminar ion-ios-trash"></span></td>
                    </tr>
                    <?php endfor;?>
                </tbody>
            </table>
            <a class="btn btn_altern" style="border:1px solid #444;" href="#">Adicionar mais Produtos</a>
            <a class="btn btn_default" href="#">Prosseguir com o Pedido</a>
        </div>
    </div>
</section>
<?php include_once('footer.php')?>