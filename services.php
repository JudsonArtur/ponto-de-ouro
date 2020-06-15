<?php include_once('header.php') ?>
<section class="main_banner banner_altern" style="height:auto;">
    <div class="container">
        <header style="text-align:center">
            <h2>Montagem de Item </h2>
            <p><a href="#">Home</a><span class="icon ion-ios-arrow-forward"></span>
                <a href="#">Services</a><span class="icon ion-ios-arrow-forward"></span>
                <a>Montagem Intern</a></p>
        </header>
        <div class="services_img">
           <span class="icon ion-ios-arrow-back"></span>
           <span class="icon ion-ios-arrow-forward"></span>
           <img src="./img/mc.png">
          
        </div>
        <div class="services_content">
           <div class="items active" id="description">
                <h2>Descricão do Serviço.</h2>
                 <div>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cupiditate dolor quae distinctio magni porro quod culpa sint officia? Blanditiis, assumenda? Asperiores maiores architecto adipisci est saepe officia laboriosam illum.</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, aut molestiae quam voluptates dolor earum veritatis velit enim asperiores consequatur non voluptatem facilis at voluptate ullam blanditiis, expedita optio suscipit.</p>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum maxime officia reprehenderit, sunt, facere repellendus doloribus sint voluptate molestias beatae ad ratione ipsa aliquid eveniet velit accusamus consequuntur corporis libero.</p>
                 </div>

           </div>
           <div class="items" id="study_case">
               <h2>Clientes  Satisfeitos</h2>
                <ul>
                    <li><span class="icon ion-ios-checkbox-outline"></span>Kiquim Immanent</li>
                    <li><span class="icon ion-ios-checkbox-outline"></span>Luanda Sport Center</li>
                    <li><span class="icon ion-ios-checkbox-outline"></span>Banco Kieve </li>
                    <li><span class="icon ion-ios-checkbox-outline"></span>Zartur academy</li>
                    <li><span class="icon ion-ios-checkbox-outline"></span>CapSoft Inc </li>
                </ul>
           </div>
           <div class="items" id="made">
               <h2>Montagem Item em numeros</h2>
               <div>
                   <span class="number">53<i>+</i></span><span class="title">Realizados</span>
               </div>
               <div>
                   <span class="number">12<i>+</i></span><span class="title">por Realizar</span>
               </div>
               <div>
                   <span class="number">65<i>+</i></span><span class="title">Total  de Realizados</span>
               </div>
           </div>
           <ul class="tab">
               <li class="active" data-target ="description">Descrição</li>
               <li data-target ="study_case">Caso de Estudo.</li>
               <li data-target ="made">Realizações</li>
           </ul>
        </div>
        <a href="#" class="btn btn_default" style="margin:0 auto 50px ; text-align:center">Pedir Proposta</a>
    </div>
</section>
<?php include_once('footer.php')?>