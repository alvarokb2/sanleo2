<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COR Advantage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

      <div align="left"><img src="img/sanleo1.redimensionado.jpg" align="right"><img src="img/índice.jpg"></div>
         <div class="content">
              <div class="jumbotron">

<br/>
<br/>
<br/>

				<h2>
					Bienvenidos al Cor Advantage del Jardin Infantil San Leonardo
				</h2>


				<h4><p>
					COR Advantage evalúa el desarrollo de la primera infancia del niño y la niña, desde que nace y durante los años de jardin, en ocho áreas de contenido.
					<br><br>Cada área de contenido comprende puntos que abordan conceptos clave del aprendizaje temprano.
				  <br><br>A partir de notas anecdóticas objetivas sobre el niño y la niña, registradas por las educadoras, cada punto del COR Advantage se califica con una escala de ocho niveles.<br> Con esto, padres y apoderados podran ver de manera confiable en que nivel se encuentra cada niño y niña.
				</p></h4>
<br/>
<br/>
<br/>

    @if (Route::has('login'))
        <div class="top-center links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">INGRESAR</a>
            @endif
        </div>
    @endif


    </body>


</html>
