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
                            Dirección
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/phone.png" alt="">
                        <a href="#">
                            Teléfono1
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/phone.png" alt="">
                        <a href="#">
                            Teléfono2
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/email.png" alt="">
                        <a href="#">
                            Enviar mensaje
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-ul col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <p class="footer-title">NAVEGACIÓN</p>
                <ul>
                    <li class="footer-li">
                        <img src="icon/home.png" alt="">
                        <a href="index.html">
                            Inicio
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/panel.png" alt="">
                        <a href="programa.html">
                            Programa
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/timeline.png" alt="">
                        <a href="actividades.html">
                            Actividades
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-ul col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <p class="footer-title">MÁS SOBRE EL PDT</p>
                <ul>
                    <li class="footer-li">
                        <img src="icon/home.png" alt="">
                        <a href="#">
                            Enertar Iquique 2016
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/panel.png" alt="">
                        <a href="#">
                            La Estrella de Iquique
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/timeline.png" alt="">
                        <a href="#">
                            El Longino
                        </a>
                    </li>
                    <li class="footer-li">
                        <img src="icon/timeline.png" alt="">
                        <a href="#">
                            Ministerio de Energía
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-ul col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <img class="footer-logo" src="images/logo_support.png" alt="">
            </div>
            <p>Visitas: <?php echo visitas() ?></p>
        </div>
    </div>