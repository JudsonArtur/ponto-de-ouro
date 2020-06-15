<?php include_once('header.php') ?>
<section class="main_banner banner_altern banner_alt " style="height:auto; ">
    <div class="container">
        <header style="margin-bottom:20px">
            <h2>Nossas Actividades </h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis temporibus perspiciatis.</p>
        </header>
    </div>
    <div class="events">
        <?php for($i = 0; $i < 8; $i++){?>

        <article class="event_items" style="background-image:url('./img/sss.jpeg')">
            <div class="opacity"></div>
            <h2><span class="icon ion-md-paper"></span>Actividade Solidaria</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, voluptatibus aspernatur! Itaque
                obcaecati ex excepturi
              
            </p>
            <a href="#" class="btn btn_altern">Saiba mais</a>  <span class="date"> 10 / 06 / 2020</span>
        </article>
        <?php }?>
    </div>


</section>
<?php include_once('footer.php')?>