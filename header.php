<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ponto de Ouro</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;1,400&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="main_header">
        <div class="container flex_between">
            <div class="logo"><img src="img/logocp1.png"></div>
            <input type="checkbox" id="control_menu" style="display:none">
            <label for="control_menu">
                <span class="open_menu" id="open">
                    <span class="hamburger"></span>
                </span>
            </label>
            <ul id="menu">
                <li class="item_menu"><a href="index.php">Home</a></li>
                <li class="item_menu">
                    <a href="#">Produtos</a>
                    <ul>
                        <li><a href="#"><span class="ion-md-pricetags"></span>Prateleiras</a> </li>
                        <li><a href="products.php"><span class="ion-md-pricetags"></span>Iluminarias</a> </li>
                        <li><a href="#"><span class="ion-md-pricetags"></span>Papeis de Parede</a> </li>
                        <li><a href="#"><span class="ion-md-pricetags"></span>Materias de Construção</a> </li>
                        <li><a href="#"><span class="ion-md-pricetags"></span>Materias de Construção</a> </li>
                    </ul>
                </li>
                <li class="item_menu"><a href="#">Servicos</a>
                    <ul class="serv">
                        <li><a href="#"><span class="ion-md-pricetags"></span>Prateleiras</a> </li>
                        <li><a href="services.php"><span class="ion-md-pricetags"></span>Iluminarias</a> </li>
                        <li><a href="#"><span class="ion-md-pricetags"></span>Papeis de Parede</a> </li>
                        <li><a href="#"><span class="ion-md-pricetags"></span>Materias de Construção</a> </li>
                        <li><a href="#"><span class="ion-md-pricetags"></span>Materias de Construção</a> </li>
                    </ul>
                </li>
                <li class="item_menu"><a href="atividades.php">Actividades</a></li>
                <li class="item_menu"><a href="contacto.php">Contacto</a></li>
                <li class="item_menu"><a class="menu_search"><span class="icon ion-ios-search"></span></a></li>
                <li class="item_menu"><a href="cart.php"><span class="icon ion-md-cart"></span><span
                            class="cart_number">0</span></a></li>
            </ul>
        </div>
    </header>
    <div class="modal_search">
        <div class="modal_search__body">
            <span class="icon ion-ios-close close" style="color:#fff;"></span>
            <form>
                <input type="text" name="search"><button>Buscar </button>
            </form>
            <div class="search_result">
                <div class="products_body">

                </div>
            </div>
        </div>
    </div>

    <main>