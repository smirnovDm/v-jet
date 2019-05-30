<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <title>v-jet</title>
        <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
        <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="my.js"></script>
        <style>
            .text{
                text-align: center;
            }
        </style>
    </head>


    <body>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#createNote">Create note</a>
            </li>
        </ul>
        <h1 align="center">Mini-blog</h1>
        <hr>
        <main>
            <?php include_once 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $content_view . '.php'; ?>
        </main>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>  

        <script>

            $('.slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });
            $(".content").text(function (i, text) {

                if (text.length >= 50) {
                    text = text.substring(0, 50);
                    var lastIndex = text.lastIndexOf(" ");       
                    text = text.substring(0, lastIndex) + '...'; 
                }

                $(this).text(text);

            });

        </script>
    </body>
</html>

