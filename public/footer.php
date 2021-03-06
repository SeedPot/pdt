<?php
    include_once 'contador.php';
?>
<div class="footer-container">
        <div class="row center-xs">

            <div class="footer-ul col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <p class="footer-title">CONTÁCTANOS</p>
                <ul>
                    <li class="footer-li">
                        <img src="icon/address.png" alt="">
                        <span class="li-text">
                            Sotomayor #575
                        </span>
                    </li>
                    <li class="footer-li">
                        <img src="icon/building.png" alt="">
                        <span class="li-text">
                            Oficina 504 - Edificio Dharma
                        </span>
                    </li>
                    <li class="footer-li">
                        <img src="icon/phone.png" alt="">
                        <span class="li-text">
                            (57) 2 717379
                        </span>
                    </li>
                    <li class="footer-li">
                        <img src="icon/cellphone.png" alt="">
                        <span class="li-text">
                            4 259 4985
                        </span>
                    </li>
                </ul>
            </div>

            <div class="footer-ul col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <p class="footer-title">NAVEGACIÓN</p>
                <ul>
                    <li class="footer-li">
                        <img src="icon/home.png" alt="">
                        <a class="li-text" href="index.php">
                            Inicio
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/panel.png" alt="">
                        <a class="li-text" href="contacto.php">
                            Programa
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/timeline.png" alt="">
                        <a class="li-text" href="actividades.php">
                            Actividades
                        </a>
                    </li>

                    <li class="footer-li">
                        <img src="icon/email.png" alt="">
                        <a class="li-text" href="contacto.php">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-ul col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <p class="footer-title">MÁS SOBRE EL PDT</p>
                <ul>
                    <li class="footer-li">
                        <img src="icon/news.png" alt="">
                        <a class="li-text" href="http://expoenergiatarapaca.cl/">
                            Enertar Iquique 2016
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/news.png" alt="">
                        <a class="li-text" href="http://www.estrellaiquique.cl/">
                            La Estrella de Iquique
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/news.png" alt="">
                        <a class="li-text" href="http://diariolongino.cl/">
                            El Longino
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/news.png" alt="">
                        <a class="li-text" href="http://www.energia.gob.cl/">
                            Ministerio de Energía
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-ul col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <img class="footer-logo" src="images/logo_support.png" alt="">
            </div>            
        </div>
        <div class="row center-xs footer-visitas">
            <div class="col-xs-12">
                <p>Visitas: <?php echo visitas() ?></p>
            </div>
        </div>

    </div>