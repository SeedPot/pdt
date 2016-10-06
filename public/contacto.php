<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/flexboxgrid.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contacto.css">    
</head>
<body>  

<header>
    <div id="header" style="background-color: rgba(0,0,0,.4);">
        <?php include_once 'header.php'; ?>
    </div>
</header>

<main class="contacto-img">
    <div class="row no-margin center-xs">
        <div class="col-xs-12 col-md-5">
            <form action="mail.php" method="POST" id="ajax-contact" class="pdt-contact-container">   
                <div class="row center-xs box">
                    <div class="col-xs-12">
                        <h1>CONTÁCTANOS</h1>
                    </div>
                </div>
                <div class="row start-xs center-md box">
                    <div class="col-xs-10 col-xs-offset-1 col-md-1 col-md-offset-0 text-margin">
                        Nombre:
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-md-7">
                        <input name="name" id="name" type="text">
                    </div>
                </div>

                <div class="row start-xs center-md box">
                    <div class="col-xs-10 col-xs-offset-1 col-md-1 col-md-offset-0 text-margin">
                        Email:
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-md-7">
                        <input name="email" id="email" type="email">
                    </div>
                </div>

                <div class="row start-xs center-md box">
                    <div class="col-xs-10 col-xs-offset-1 col-md-1 col-md-offset-0 text-margin">
                        Pregunta:
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-md-7">
                        <textarea name="message" id="message" name="consulta" rows="5"></textarea>
                    </div>
                </div>
                <div class="row center-xs box-boton">
                    <div class="col-xs-10 col-md-4">
                            <input type="submit" class="boton">
                    </div>
                </div>
                <div class="row center-xs">
                    <div id="form-messages" class="col-xs-6"></div>
                </div>
            </form>                    
        </div>

        <div class="col-xs-12 col-md-5">
            <div id="map" class="map-container">

            </div>
        </div>
    </div>
</main>

<div class="megafooter">
    <footer id="footer"><?php include_once 'footer.php' ?></footer>

    <section class="pretzel no-margin row center-xs middle-xs">
        <div class="col-xs-6">
            <p>Pretzel Studio<sup>&reg;</sup> 2016</p>
        </div>
    </section>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/app.js"></script>
<script>
    var map;
    function initMap() {
        var dharma = {lat: -20.210831, lng: -70.149565}
        var image = 'images/logo_opt.png';
        var contentString = '<h3>Support Consultores</h3><br><p>Sotomayor #575</p><p>Edificio Dharma 5° piso</p>'

        map = new google.maps.Map(document.getElementById('map'), {
            center: dharma,
            zoom: 20,
        });               

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        

        var marker = new google.maps.Marker({
            position: dharma,
            map: map,
            title: 'Support Consultores',
            icon: image,
            animation: google.maps.Animation.BOUNCE
        });

        infowindow.open(map, marker);

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
    }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeecT9iXPgBUDhR14jM2qAaH2_qlKByB8&callback=initMap">
</script>    

</body>
</html>