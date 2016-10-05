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

        <main>
        <form action="send.php" method="POST" class="pdt-contact-container">   
            <div class="row center-xs box">
                <div class="col-xs-12">
                    <h1>CONTÁCTANOS</h1>
                </div>
            </div>
            <div class="row start-xs center-md box">
                <div class="col-xs-10 col-xs-offset-1 col-md-1 col-md-offset-0">
                    Nombre:
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-7">
                    <input type="text">
                </div>
            </div>

            <div class="row start-xs center-md box">
                <div class="col-xs-10 col-xs-offset-1 col-md-1 col-md-offset-0">
                    Email:
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-7">
                    <input type="email">
                </div>
            </div>

            <div class="row start-xs center-md box">
                <div class="col-xs-10 col-xs-offset-1 col-md-1 col-md-offset-0">
                    Pregunta:
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-7">
                    <textarea name="consulta" rows="5"></textarea>
                </div>
            </div>
            <div class="row center-xs box">
                <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0">
                        <input type="submit" class="boton">
                </div>
            </div>
        </form>

        </main>
        <div class="megafooter">
            <footer id="footer"><?php include_once 'footer.php' ?></footer>

            <section class="pretzel no-margin row center-xs middle-xs">
                <div class="col-xs-6">
                    <p>Pretzel Studio<sup>&reg;</sup> 2016</p>
                </div>
            </section>
        </div>
        <script></script>    
    </body>
</html>