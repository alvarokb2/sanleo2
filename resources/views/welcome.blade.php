<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COR Advantage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=eraslght:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #080707;
                font-family: 'eras light itc';
                font-weight: 100;
                height: 100vh;
                margin: 30px;
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
                color: #080707;
                padding: 0 25px;
                font-size: 16px;
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
         <div class="content">

				<h3>
					¿ Por qué nuestro jardín infantil utiliza el Curriculum High Scope ?
				</h3>


				<h4><p>
          <em>"Reconocemos que la capacidad de aprender reside en el niño y la niña
            y de ahí que nos centramos en prácticas de aprendizaje activo.”</em></p>
        <br/>

          <p align="justify">La piedra angular del enfoque High Scope sobre la educación en la primera infancia
            es la convicción de que el aprendizaje activo-participativo resulta fundamental
          para el desarrollo de las potencialidades humanas y que esto ocurre de manera más efectiva
            bajo entornos que brindan oportunidades de aprendizajes adecuados para el desarrollo.</p>

          <p align="justify">Para  lograrlo, se parte de las siguientes creencias básicas sobre el desarrollo humano :</p>
          <p align="justify">*Los seres humanos desarrollan  sus capacidades en secuencias predecibles a lo largo de su vida.
            A medida que las personas maduran, surgen nuevas capacidades.</p>
          <p align="justify">*El aprendizaje siempre ocurre en el contexto  de las características, habilidades y  oportunidades
              propias de cada persona.</p>
          <p align="justify">*Hay periodos durante el ciclo de vida en que ciertas cosas se aprenden mejor
            o de forma  más eficiente, y existen  métodos de enseñanza más adecuados que  otros en determinadas
            etapas del desarrollo.</p>
            <br>


          <p><u>¿Por qué Aprendizaje activo  participativo ?</u></p>

          <p align="justify">Las experiencias inmediatas y directas con objetos, personas, ideas y sucesos es una condición necesaria
             de la reestructuración cognitiva y, por lo tanto, del desarrollo. Dicho de manera sencilla,  los niños  pequeños  aprenden
             conceptos, se forman ideas y crean  sus propios símbolos  y abstracciones mediante actividades que provienen
             de su iniciativa:
             moverse, escuchar, buscar, sentir, manipular. Esta actividad, llevada a cabo  en un contexto social
             en el que un adulto alerta y sensible es un  observador  y guía  participante, posibilita al niño vivir experiencias
             intrínsecamente interesantes que puedan llevarlo a conclusiones contradictorias y a  una consiguiente
             reorganización de la comprensión de su mundo.</p>

          <p align="justify">Los niños pequeños en acción  desarrollan su  iniciativa, curiosidad, ingenio  y seguridad
             en sí  mismos, cualidades que le resultan  útiles durante toda la vida.</p>
             <br>

          <p><u>¿Cómo evalúan los educadores High Scope ?</u></p>

          <p align="justify">En nuestro  Currículum  High Scope, la observación individual, cuidadosa, de los intereses
            e intenciones de los niños, es un paso necesario para entender su nivel de desarrollo y para planear y llevar
            a cabo interacciones apropiadas. Es esta observación individual, cuidadosa, la que permite al educador descubrir
            y apoyar los talentos personales, las maneras específicas de cómo cada  uno de los niños entiende el mundo que lo rodea.
            Información que  es utilizada por el educador para planificar las nuevas experiencias.  </p>

          <p align="justify"> Una anécdota nos ayuda a identificar las experiencias de aprendizaje en las que el niño se involucra,
            por ejemplo: <em>En área de  arte, ”Carmen confecciona una muñeca, el cuerpo es de arcilla, coloca ojos, nariz y boca
            con porotos“.</em> (Carmen logra  hacer representaciones simples con algunos detalles) Enfocarnos de esta manera en lo
            que los niños hacen, ayuda al educador a centrarse en ellos, obteniéndose valiosa información que puede orientar las
            decisiones posteriores para apoyar al niño a extender sus aprendizajes. Por ejemplo, agregar otros materiales al  á
            rea que pueden ser usados por Carmen para complementar sus creaciones como  por ejemplo  botones, pedacitos de género,
            lana, etc.  </p>

          <p align="justify">Los registros de  observación son un excelente instrumento para descubrir y apoyar la diversidad
            de intereses, talentos, niveles de desarrollo y patrones culturales que muestran los niños.
          De ésta manera a través del instrumento de evaluación  llamado  Cor advantage,
          los educadores  H/S evalúan de forma confiable  y válida a cada uno de los niños  de su sala.
          Es importante entender que a través de este  instrumento de evaluación se registra en qué se encuentra cada niño
          y niña  y sus desafíos propios, respetando ritmos de aprendizajes.</p>
          <br>
          Cor advantage, muestra los diferentes grados de desarrollo desde los 0 a las 7 años.
          Esta dividido en nueve categorías de aprendizaje.
          Cada área de contenido  comprende  puntos que abordan conceptos clave del aprendizaje temprano.
</h4>
<br/>
<br/>
<br/>

    @if (Route::has('login'))
         <div class="top-center links">
            @if (Auth::check())
                <a href="{{ url('/home') }}" class="btn btn-primary">Volver al COR ADVANTAGE</a>
            @else
                <input type ='button' value = 'IR A COR ADVANTAGE ONLINE' onclick="window.location = 'login';"/>
            @endif
        </div>
    @endif
<div align="right"><img src="img/índice.jpg"></div>

    </body>


</html>
