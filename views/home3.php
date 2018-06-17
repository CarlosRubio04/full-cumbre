<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<!-- <section class="ruta u-color-contraste">
    <div class="content-wrapper">
        <div class="title">
            <h1 class="text-center animated fadeInDown">Bienvenidos</h1>
        </div>
        <p class="text-center animated fadeInUp">
            Hola equipos, bienvenidos a esta aventura de subir a la cumbre del trabajo en equipo. <br/>
            En esta travesía vamos a llevarlos por diferentes etapas para consolidar su gestión como equipo de alto desempeño.<br/>
            Por ello, bienvenidos y disfruten el proceso.
        </p>
    </div>
</section> -->

<section class="rutaVirtual">
    
    <div class="rutaVirtualElementos">
        <div class="item">
            <img src="img/svg/mapa.svg" alt="mapa">
        </div>
        <div class="item">
            <img src="img/svg/botas.svg" alt="mapa">
        </div>
        <div class="item">
            <img src="img/svg/brujula.svg" alt="mapa">
        </div>
    </div>


    <div class="rutaVirtualTeams">
        
        <div class="teamsContainer">
            
            <div class="team">
                <div class="teamShield">
                    <img src="img/svg/escudo.svg" alt="escudo">
                    <span>Nombre Equipo</span>
                </div>
                <div class="teamBar" style="height: 848px">
                    <p>848 Metros</p>
                </div>
            </div>
            
            <div class="team">
                <div class="teamShield">
                    <img src="img/svg/escudo.svg" alt="escudo">
                    <span>Nombre Equipo</span>
                </div>
                <div class="teamBar" style="height: 748px">
                    <p>748 Metros</p>
                </div>
            </div>

            <div class="team">
                <div class="teamShield">
                    <img src="img/svg/escudo.svg" alt="escudo">
                    <span>Nombre Equipo</span>
                </div>
                <div class="teamBar" style="height: 648px">
                    <p>648 Metros</p>
                </div>
            </div>

            <div class="team">
                <div class="teamShield">
                    <img src="img/svg/escudo.svg" alt="escudo">
                    <span>Nombre Equipo</span>
                </div>
                <div class="teamBar" style="height: 548px">
                    <p>548 Metros</p>
                </div>
            </div>



        </div>


        <div class="rule">
            <img src="img/svg/regla.svg">
        </div>
    </div>

    <div class="rutaVirtualClouds">
        <?php  require_once('views/clouds.php'); ?>
    </div>

    <div class="rutaVirtualBack">
        <img src="img/ruta-virtual.png" alt="Ruta Virtual">
    </div>
</section>


