<?php
    include_once 'contador.php';
?>
<div class="footer-container">
        <div class="row around-xs">

            <div class="footer-ul col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <p class="footer-title">CONTÁCTANOS</p>
                <ul>
                    <li class="footer-li">
                        <img src="icon/address.png" alt="">
                        <a href="#">
                            Sotomayor #575
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/address.png" alt="">
                        <a href="#">
                            Edificio Dharma, 5° piso
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/phone.png" alt="">
                        <a href="#">
                            Teléfono2
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-ul col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <p class="footer-title">NAVEGACIÓN</p>
                <ul>
                    <li class="footer-li">
                        <img src="icon/home.png" alt="">
                        <a href="index.php">
                            Inicio
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/email.png" alt="">
                        <a href="contacto.php">
                            Contacto
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/timeline.png" alt="">
                        <a href="actividades.php">
                            Actividades
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-ul col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <p class="footer-title">MÁS SOBRE EL PDT</p>
                <ul>
                    <li class="footer-li">
                        <img src="icon/news.png" alt="">
                        <a href="#">
                            Enertar Iquique 2016
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/news.png" alt="">
                        <a href="#">
                            La Estrella de Iquique
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/news.png" alt="">
                        <a href="#">
                            El Longino
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/news.png" alt="">
                        <a href="#">
                            Ministerio de Energía
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-ul col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <img class="footer-logo" src="images/logo_support.png" alt="">
            </div>            
        </div>
        <div class="row center-xs footer-visitas">
            <div class="col-xs-12">
                <p>Visitas: <?php echo visitas() ?></p>
            </div>
        </div>

    </div>