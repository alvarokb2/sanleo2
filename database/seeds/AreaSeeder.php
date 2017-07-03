<?php

use Illuminate\Database\Seeder;
use Sanleo\Informe;
use Sanleo\Area;
use Sanleo\Subarea;
use Sanleo\Indicador;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $informe = Informe::create([
          'year'=> 2017,
          'periodo'=> 1,
      ]);
      $informe->save();

      /*areas*/

      $area = Area::create([
      'name'=> 'ACERCAMIENTO AL APRENDIZAJE',
      ]);
      $area ->save();
      $informe->areas()->save($area);

      $area1 = Area::create([
      'name'=> 'DESARROLLO SOCIAL Y EMOCIONAL',
      ]);
      $area1 ->save();
      $informe->areas()->save($area1);

      $area2 = Area::create([
      'name'=> 'DESARROLLO FISICO Y SALUD',
      ]);
      $area2 ->save();
      $informe->areas()->save($area2);

      $area3 = Area::create([
      'name'=> 'LENGUAJE Y COMUNICACIÓN',
      ]);
      $area3 ->save();
      $informe->areas()->save($area3);

      $area4 = Area::create([
      'name'=> 'MATEMÁTICAS',
      ]);
      $area4 ->save();
      $informe->areas()->save($area4);

      $area5 = Area::create([
      'name'=> 'ARTES CREATIVAS',
      ]);
      $area5 ->save();
      $informe->areas()->save($area5);

      $area6 = Area::create([
      'name'=> 'CIENCIA Y TECNOLOGÍA',
      ]);
      $area6 ->save();
      $informe->areas()->save($area6);

      $area7 = Area::create([
      'name'=> 'ESTUDIOS SOCIALES',
      ]);
      $area7 ->save();
      $informe->areas()->save($area7);

      $area8 = Area::create([
      'name'=> 'APRENDIZAJE DEL IDIOMA INGLÉS',
      ]);
      $area8 ->save();
      $informe->areas()->save($area8);


      /*subareas de area 1*/

      $subarea = Subarea::create([
      'name'=> 'Iniciativa y Planificación',
      ]);
      $subarea ->save();
      $area->subareas()->save($subarea);

      $subarea2 = Subarea::create([
      'name'=> 'Resolución de problemas con materiales',
      ]);
      $subarea2->save();
      $area->subareas()->save($subarea2);

      $subarea3 = Subarea::create([
      'name'=> 'Reflexión',
      ]);
      $subarea3 ->save();
      $area->subareas()->save($subarea3);

      /*subareas de area 2*/

      $subarea4 = Subarea::create([
      'name'=> 'Emociones',
      ]);
      $subarea4 ->save();
      $area1->subareas()->save($subarea4);

      $subarea5 = Subarea::create([
      'name'=> 'Desarrollar relaciones con adultos',
      ]);
      $subarea5 ->save();
      $area1->subareas()->save($subarea5);

      $subarea6 = Subarea::create([
      'name'=> 'Construir relaciones con otros niños',
      ]);
      $subarea6 ->save();
      $area1->subareas()->save($subarea6);

      $subarea7 = Subarea::create([
      'name'=> 'Comunidad',
      ]);
      $subarea7 ->save();
      $area1->subareas()->save($subarea7);

      $subarea8 = Subarea::create([
      'name'=> 'Resolución de conflictos',
      ]);
      $subarea8 ->save();
      $area1->subareas()->save($subarea8);

      /*subareas de area 3*/

      $subarea9 = Subarea::create([
      'name'=> 'Habilidades de motricidad gruesa',
      ]);
      $subarea9 ->save();
      $area2->subareas()->save($subarea9);

      $subarea10 = Subarea::create([
      'name'=> 'Habilidades motoras finas',
      ]);
      $subarea10 ->save();
      $area2->subareas()->save($subarea10);

      $subarea11 = Subarea::create([
      'name'=> 'Cuidado personal y comportamiento saludable',
      ]);
      $subarea11 ->save();
      $area2->subareas()->save($subarea11);

      /*subareas de area 4*/

      $subarea12 = Subarea::create([
      'name'=> 'Hablar',
      ]);
      $subarea12 ->save();
      $area3->subareas()->save($subarea12);

      $subarea13 = Subarea::create([
      'name'=> 'Escuchar y comprender',
      ]);
      $subarea13 ->save();
      $area3->subareas()->save($subarea13);

      $subarea14 = Subarea::create([
      'name'=> 'Conciencia fonológica',
      ]);
      $subarea14 ->save();
      $area3->subareas()->save($subarea14);

      $subarea15 = Subarea::create([
      'name'=> 'Conocimiento del alfabeto',
      ]);
      $subarea15 ->save();
      $area3->subareas()->save($subarea15);

      $subarea16 = Subarea::create([
      'name'=> 'Lectura',
      ]);
      $subarea16 ->save();
      $area3->subareas()->save($subarea16);

      $subarea17 = Subarea::create([
      'name'=> 'Disfrute y conocimiento de los libros',
      ]);
      $subarea17 ->save();
      $area3->subareas()->save($subarea17);

      $subarea18 = Subarea::create([
      'name'=> 'Escritura',
      ]);
      $subarea18 ->save();
      $area3->subareas()->save($subarea18);

      /*subareas de area 5*/

      $subarea19 = Subarea::create([
      'name'=> 'Números y contar',
      ]);
      $subarea19 ->save();
      $area4->subareas()->save($subarea19);

      $subarea20 = Subarea::create([
      'name'=> 'Geometría, formas y comprensión espacial.',
      ]);
      $subarea20 ->save();
      $area4->subareas()->save($subarea20);

      $subarea21 = Subarea::create([
      'name'=> 'Medición',
      ]);
      $subarea21 ->save();
      $area4->subareas()->save($subarea21);

      $subarea22 = Subarea::create([
      'name'=> 'Patrones',
      ]);
      $subarea22 ->save();
      $area4->subareas()->save($subarea22);

      $subarea23 = Subarea::create([
      'name'=> 'Análisis de datos',
      ]);
      $subarea23 ->save();
      $area4->subareas()->save($subarea23);

      /*subareas de area 6*/

      $subarea24 = Subarea::create([
      'name'=> 'Arte',
      ]);
      $subarea24 ->save();
      $area5->subareas()->save($subarea24);

      $subarea25 = Subarea::create([
      'name'=> 'Música',
      ]);
      $subarea25 ->save();
      $area5->subareas()->save($subarea25);

      $subarea26 = Subarea::create([
      'name'=> 'Movimiento',
      ]);
      $subarea26 ->save();
      $area5->subareas()->save($subarea26);

      $subarea27 = Subarea::create([
      'name'=> 'Juego de roles',
      ]);
      $subarea27 ->save();
      $area5->subareas()->save($subarea27);

      /*subareas de area 7*/

      $subarea28 = Subarea::create([
      'name'=> 'Observar y clasificar',
      ]);
      $subarea28 ->save();
      $area6->subareas()->save($subarea28);

      $subarea29 = Subarea::create([
      'name'=> 'Experimentar, predecir y sacar conclusiones.',
      ]);
      $subarea29 ->save();
      $area6->subareas()->save($subarea29);

      $subarea30 = Subarea::create([
      'name'=> 'Mundo natural y físico.',
      ]);
      $subarea30 ->save();
      $area6->subareas()->save($subarea30);

      $subarea31 = Subarea::create([
      'name'=> 'Herramientas y tecnología.',
      ]);
      $subarea31 ->save();
      $area6->subareas()->save($subarea31);

      /*subareas de area 8*/

      $subarea32 = Subarea::create([
      'name'=> 'Conocimiento propio y de los demás.',
      ]);
      $subarea32 ->save();
      $area7->subareas()->save($subarea32);

      $subarea33 = Subarea::create([
      'name'=> 'Geografía',
      ]);
      $subarea33 ->save();
      $area7->subareas()->save($subarea33);

      $subarea34 = Subarea::create([
      'name'=> 'Historia',
      ]);
      $subarea34 ->save();
      $area7->subareas()->save($subarea34);

      /*subareas de area 9*/

      $subarea35 = Subarea::create([
      'name'=> 'Escuchar y comprender inglés',
      ]);
      $subarea35 ->save();
      $area8->subareas()->save($subarea35);

      $subarea36 = Subarea::create([
      'name'=> 'Hablar el inglés.',
      ]);
      $subarea36 ->save();
      $area8->subareas()->save($subarea36);



      /*Indicadores de subarea 1*/

      $indicador = Indicador::create([
      'name'=> '1. El niño se acerca o se aleja de un objeto o una persona. ',
      ]);
      $indicador ->save();
      $subarea->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño se mueve con persistencia hasta alcanzar un objeto o una persona deseados.',
      ]);
      $indicador1 ->save();
      $subarea->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño demuestra una intención con una o dos palabras.',
      ]);
      $indicador2 ->save();
      $subarea->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño expresa un plan con una oración simple y lo sigue.',
      ]);
      $indicador3 ->save();
      $subarea->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño hace y sigue dos o más planes sin relación entre sí.',
      ]);
      $indicador4 ->save();
      $subarea->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño se atiene a su plan durante una parte sustancial (al menos 20 minutos) del tiempo de trabajo (periodo de elección, periodo de juego libre).',
      ]);
      $indicador5 ->save();
      $subarea->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño planifica y sigue con un proyecto que toma más de dos días completar.',
      ]);
      $indicador6 ->save();
      $subarea->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño usa recursos externos para recopilar información necesaria para completar su plan.',
      ]);
      $indicador7 ->save();
      $subarea->indicadores()->save($indicador7);

      /*Indicadores de subarea 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño mueve los ojos, cabeza o manos hacia un objeto o persona deseados. ',
      ]);
      $indicador ->save();
      $subarea2->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño repite una acción, aunque no funcione, para resolver un problema.',
      ]);
      $indicador1 ->save();
      $subarea2->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño pide ayuda para resolver un problema con materiales.',
      ]);
      $indicador2 ->save();
      $subarea2->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño identifica verbalmente un problema con materiales.',
      ]);
      $indicador3 ->save();
      $subarea2->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño persiste en una idea o intenta varias ideas, hasta que tiene éxito al resolver un problema simple con materiales',
      ]);
      $indicador4 ->save();
      $subarea2->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño ayuda a otro niño a resolver un problema con materiales.',
      ]);
      $indicador5 ->save();
      $subarea2->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño anticipa problemas potenciales con materiales durante el juego e identifica posibles soluciones.',
      ]);
      $indicador6 ->save();
      $subarea2->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño coordina múltiples recursos (materiales y/o personas) para resolver un problema complejo con materiales.',
      ]);
      $indicador7 ->save();
      $subarea2->indicadores()->save($indicador7);


      /*Indicadores de subarea 3 - area 1*/

      $indicador = Indicador::create([
      'name'=> '1. El niño vuelve a poner su atención en un objeto o evento que le interesa.',
      ]);
      $indicador ->save();
      $subarea3->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño demuestra que quiere que algo vuelva a suceder.',
      ]);
      $indicador1 ->save();
      $subarea3->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño vuelve al lugar donde se encuentra algo que quiere o con lo que ha jugado.',
      ]);
      $indicador2 ->save();
      $subarea3->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño dice una cosa que hizo justo después del evento.',
      ]);
      $indicador3 ->save();
      $subarea3->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño recuerda 3 o más cosas que hizo y/o detalles de algo que sucedió.',
      ]);
      $indicador4 ->save();
      $subarea3->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño recuerda, sin indicaciones, la secuencia de 3 o más cosas que hizo o que sucedieron. ',
      ]);
      $indicador5 ->save();
      $subarea3->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño indica por qué pasó por cierta experiencia y qué haría de la misma manera o diferente la próxima vez.',
      ]);
      $indicador6 ->save();
      $subarea3->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño recuerda la experiencia de otra persona y usa lo que observó en una situación similar.',
      ]);
      $indicador7 ->save();
      $subarea3->indicadores()->save($indicador7);


      /*Indicadores de subarea 4 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño expresa una emoción con el rostro y/o el cuerpo.',
      ]);
      $indicador ->save();
      $subarea4->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño inicia contacto físico con otra persona para expresar una emoción..',
      ]);
      $indicador1 ->save();
      $subarea4->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño nombra emociones.',
      ]);
      $indicador2 ->save();
      $subarea4->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño explica la razón detrás de una emoción.',
      ]);
      $indicador3 ->save();
      $subarea4->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño intenta primero controlar la forma en que expresa las emociones, pero luego recurre a la expresión física.',
      ]);
      $indicador4 ->save();
      $subarea4->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño controla la expresión de sus sentimientos. ',
      ]);
      $indicador5 ->save();
      $subarea4->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño usa un rango más amplio de palabras para describir sus propias emociones.',
      ]);
      $indicador6 ->save();
      $subarea4->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño describe y da una razón por la que la gente se siente diferente ante la misma situación.',
      ]);
      $indicador7 ->save();
      $subarea4->indicadores()->save($indicador7);


      /*Indicadores de subarea 5 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño mira, le sonríe, le habla o hace caras a un responsable de cuidados.',
      ]);
      $indicador ->save();
      $subarea5->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño utiliza un adulto familiar como base segura desde la cual explorar, y regresa a él periódicamente.',
      ]);
      $indicador1 ->save();
      $subarea5->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño busca un adulto que le resulta familiar para comunicar una necesidad o un deseo simples, usando al menos una palabra.',
      ]);
      $indicador2 ->save();
      $subarea5->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño pide a un adulto que juegue con él o que comparta una actividad.',
      ]);
      $indicador3 ->save();
      $subarea5->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño entabla una conversación con un adulto y toma dos o más turnos.',
      ]);
      $indicador4 ->save();
      $subarea5->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño hace participar a un adulto en una actividad durante un periodo extendido al asignarle una tarea o un papel al adulto, trabajar con el adulto para alcanzar una meta que el niño tenga en mente, o dirigir al adulto a una situación compleja de juego de simulación. ',
      ]);
      $indicador5 ->save();
      $subarea5->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño le hace una pregunta a un adulto sobre los conocimientos o la experiencia del adulto para aprender más de lo que se cubre en un debate de grupo o de aula.  ',
      ]);
      $indicador6 ->save();
      $subarea5->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño sigue una conversación con un adulto para aprender o compartir más información.',
      ]);
      $indicador7 ->save();
      $subarea5->indicadores()->save($indicador7);


      /*Indicadores de subarea 6 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño observa a otro niño.',
      ]);
      $indicador ->save();
      $subarea6->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño trae de manera espontánea un objeto o muestra afecto hacia otro niño.',
      ]);
      $indicador1 ->save();
      $subarea6->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño juega y trabaja junto con otros niños.',
      ]);
      $indicador2 ->save();
      $subarea6->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño hace un comentario directamente a otro niño.',
      ]);
      $indicador3 ->save();
      $subarea6->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño muestra preferencia hacia uno o más amigos.',
      ]);
      $indicador4 ->save();
      $subarea6->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño juega en colaboración con dos o más niños al contribuir ideas y/0 incorporar ideas de otros niños en su juego.',
      ]);
      $indicador5 ->save();
      $subarea6->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño participa en conversaciones personales y reciprocas sostenidas con un amigo.',
      ]);
      $indicador6 ->save();
      $subarea6->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño hace un seguimiento (pregunta) sobre algo personal que un amigo compartió previamente con él.',
      ]);
      $indicador7 ->save();
      $subarea6->indicadores()->save($indicador7);


      /*Indicadores de subarea 7 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño se mantiene en alerta respecto de lo que sucede a su alrededor.',
      ]);
      $indicador ->save();
      $subarea7->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño participa en una parte de la rutina diaria, cuando un adulto lo dirige o lo asiste.',
      ]);
      $indicador1 ->save();
      $subarea7->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño intenta, por si solo una tarea simple que se relaciona con parte de la rutina diaria.',
      ]);
      $indicador2 ->save();
      $subarea7->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño pasa de una parte a otra de la rutina diaria.',
      ]);
      $indicador3 ->save();
      $subarea7->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño recuerda a otros, las rutinas del aula y las expectativas sociales.',
      ]);
      $indicador4 ->save();
      $subarea7->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño realiza una acción por sí solo que ayuda a la comunidad escolar, independientemente de las reglas, tareas o expectativas rutinarias del aula.',
      ]);
      $indicador5 ->save();
      $subarea7->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño distingue si las acciones de otros son intencionales o accidentales.',
      ]);
      $indicador6 ->save();
      $subarea7->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño reconoce por iniciativa propia, cómo su comportamiento afecta a los demás y actúa para corregirlo según sea necesario.',
      ]);
      $indicador7 ->save();
      $subarea7->indicadores()->save($indicador7);


      /*Indicadores de subarea 8 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño continúa con su acción en una situación de conflicto.',
      ]);
      $indicador ->save();
      $subarea8->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño reacciona a un conflicto al retraerse, llorar, golpear, o patear o morder.',
      ]);
      $indicador1 ->save();
      $subarea8->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño intenta lidiar con un conflicto de manera simple.',
      ]);
      $indicador2 ->save();
      $subarea8->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño solicita ayuda de un adulto para resolver un conflicto con otro niño.',
      ]);
      $indicador3 ->save();
      $subarea8->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño participa en la resolución de un conflicto (con apoyo de un adulto)  al ofrecer una solución y acordar una solución.',
      ]);
      $indicador4 ->save();
      $subarea8->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño negocia una solución a un conflicto con otro niño por si solo (sin la ayuda de un adulto).',
      ]);
      $indicador5 ->save();
      $subarea8->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño anticipa, si una solución a un conflicto funcionará o no y explica por qué.',
      ]);
      $indicador6 ->save();
      $subarea8->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño ayuda a mediar en conflictos entre otros niños.',
      ]);
      $indicador7 ->save();
      $subarea8->indicadores()->save($indicador7);


      /*Indicadores de subarea 9 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño mueve todo el cuerpo',
      ]);
      $indicador ->save();
      $subarea9->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño camina',
      ]);
      $indicador1 ->save();
      $subarea9->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño sube o baja una escalera, corre mientras se mueve alrededor de personas y objetos, o marcha.',
      ]);
      $indicador2 ->save();
      $subarea9->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño sube o baja escaleras alternando los pies, salta con ambos pies del piso, o galopa.',
      ]);
      $indicador3 ->save();
      $subarea9->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño golpea un objeto grande en movimiento con su mano o pie.',
      ]);
      $indicador4 ->save();
      $subarea9->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño salta durante ocho repeticiones o más veces (salta en hilera)',
      ]);
      $indicador5 ->save();
      $subarea9->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño golpea una pelota pequeña en movimiento con una paleta, una raqueta o un bate..',
      ]);
      $indicador6 ->save();
      $subarea9->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño combina una serie de movimientos en una acción fluida y en secuencia.',
      ]);
      $indicador7 ->save();
      $subarea9->indicadores()->save($indicador7);


      /*Indicadores de subarea 10 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño abre y cierra su mano',
      ]);
      $indicador ->save();
      $subarea10->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño utiliza músculos pequeños para manipular o levantar objetos.',
      ]);
      $indicador1 ->save();
      $subarea10->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño une o separa materiales',
      ]);
      $indicador2 ->save();
      $subarea10->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño utiliza músculos pequeños en control moderado.',
      ]);
      $indicador3 ->save();
      $subarea10->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño manipula objetos pequeños con destreza y precisión.',
      ]);
      $indicador4 ->save();
      $subarea10->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño usa el agarre de trípode (pulgar y dos dedos) para escribir o dibujar una letra, un numeral o una forma cerrada.',
      ]);
      $indicador5 ->save();
      $subarea10->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño realiza acciones precisas con movimientos opuestos de las manos.',
      ]);
      $indicador6 ->save();
      $subarea10->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño usa la destreza y la fuerza de sus dedos para completar una tarea de varios pasos.',
      ]);
      $indicador7 ->save();
      $subarea10->indicadores()->save($indicador7);


      /*Indicadores de subarea 11- area 3*/

      $indicador = Indicador::create([
      'name'=> '1. El niño expresa necesidades físicas básicas.',
      ]);
      $indicador ->save();
      $subarea11->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño se alimenta solo con alimento que se toman con la mano.',
      ]);
      $indicador1 ->save();
      $subarea11->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño menciona partes básicas de su cuerpo.',
      ]);
      $indicador2 ->save();
      $subarea11->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño lleva a cabo una tarea de cuidado personal con asistencia.',
      ]);
      $indicador3 ->save();
      $subarea11->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño lleva a cabo una tarea de cuidado personal en forma independiente',
      ]);
      $indicador4 ->save();
      $subarea11->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño toma una decisión saludable y explica por qué es buena para él.',
      ]);
      $indicador5 ->save();
      $subarea11->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño explica la razón detrás de una regla de seguridad.',
      ]);
      $indicador6 ->save();
      $subarea11->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño explica cómo y por qué las gente debe cuidar su cuerpo.',
      ]);
      $indicador7 ->save();
      $subarea11->indicadores()->save($indicador7);


      /*Indicadores de subarea 12 - area 4*/

      $indicador = Indicador::create([
      'name'=> '1. El niño hace sonidos verbales tales como gorjeos y balbuceo.',
      ]);
      $indicador ->save();
      $subarea12->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño dice (o hace gestos de) una única palabra para hacer referencia a una persona, animal, objeto o acción.',
      ]);
      $indicador1 ->save();
      $subarea12->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño dice una frase de dos o tres palabras para hacer referencia a una persona, animal, objeto o acción.',
      ]);
      $indicador2 ->save();
      $subarea12->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño habla de personas u objetos reales que no están presentes.',
      ]);
      $indicador3 ->save();
      $subarea12->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño usa los pronombres, él, ella y suyo correctamente.',
      ]);
      $indicador4 ->save();
      $subarea12->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño usa cláusulas que empiezan con: cuando, si o ya que en oraciones complejas.',
      ]);
      $indicador5 ->save();
      $subarea12->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño dice “qué pasaría si” o “supón qué” para iniciar una conversación sobre posibilidades.',
      ]);
      $indicador6 ->save();
      $subarea12->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño participa en un debate en colaboración con otro niño, sobre contenido específico relacionado con la escuela.',
      ]);
      $indicador7 ->save();
      $subarea12->indicadores()->save($indicador7);


      /*Indicadores de subarea 13 - area 4*/

      $indicador = Indicador::create([
      'name'=> '1. El niño responde a una voz girando su cabeza, estableciendo contacto visual o sonriendo.',
      ]);
      $indicador ->save();
      $subarea13->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño responde en forma no verbal a afirmaciones o solicitudes simples.',
      ]);
      $indicador1 ->save();
      $subarea13->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño responde en forma verbal a afirmaciones o preguntas simples.',
      ]);
      $indicador2 ->save();
      $subarea13->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño aporta a una conversación al conectar el tema a su propia experiencia.',
      ]);
      $indicador3 ->save();
      $subarea13->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño vuelve a contar (recuerda) tres o más detalles de una historia o libro.',
      ]);
      $indicador4 ->save();
      $subarea13->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño predice lo que sucederá a continuación en una historia o libro desconocidos y da una razón basada en lo que pasó anteriormente en un libro o en su propia experiencia.',
      ]);
      $indicador5 ->save();
      $subarea13->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño demuestra que comprende la información de contenido (el tema), al formular y/o responder preguntas aclaratorias sobre puntos claves presentados de forma oral o de forma escrita.',
      ]);
      $indicador6 ->save();
      $subarea13->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño compara y contrasta relaciones entre personajes, eventos y temáticas en un libro o historia.',
      ]);
      $indicador7 ->save();
      $subarea13->indicadores()->save($indicador7);


      /*Indicadores de subarea 14 - area 4*/

      $indicador = Indicador::create([
      'name'=> '1. El niño responde (se voltea, mira, patea, se sobresalta o se calla) a un sonido del entorno.',
      ]);
      $indicador ->save();
      $subarea14->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño hace sonidos de animales, vehículos u otros objetos familiares.',
      ]);
      $indicador1 ->save();
      $subarea14->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño repite o se une a otros para decir partes de rimas simples.',
      ]);
      $indicador2 ->save();
      $subarea14->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño espontáneamente dice palabras que riman, ya sean reales o inventadas.',
      ]);
      $indicador3 ->save();
      $subarea14->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño señala que dos palabras no riman.',
      ]);
      $indicador4 ->save();
      $subarea14->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño destaca que dos palabras (reales o inventadas) comienzan con el mismo sonido.',
      ]);
      $indicador5 ->save();
      $subarea14->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño identifica fonemas al comienzo y al final de una palabra.',
      ]);
      $indicador6 ->save();
      $subarea14->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño divide en segmentos o combina una palabra compuesta de tres o más fonemas.',
      ]);
      $indicador7 ->save();
      $subarea14->indicadores()->save($indicador7);


      /*Indicadores de subarea 15 - area 4*/

      $indicador = Indicador::create([
      'name'=> '1. El niño presta atención a imágenes visuales.',
      ]);
      $indicador ->save();
      $subarea15->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño juega con materiales tridimensionales que tienen las características de letras.',
      ]);
      $indicador1 ->save();
      $subarea15->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño dice o canta una letra',
      ]);
      $indicador2 ->save();
      $subarea15->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño identifica una letra',
      ]);
      $indicador3 ->save();
      $subarea15->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño identifica 10 o más letras',
      ]);
      $indicador4 ->save();
      $subarea15->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño utiliza usa un deletreo inventado para decir palabras nuevas sin indicaciones de un adulto.',
      ]);
      $indicador5 ->save();
      $subarea15->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño identifica todas las letras.',
      ]);
      $indicador6 ->save();
      $subarea15->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño identifica al menos 2 grupos consonánticos o dos sonidos vocálicos.',
      ]);
      $indicador7 ->save();
      $subarea15->indicadores()->save($indicador7);


      /*Indicadores de subarea 16 - area 4*/

      $indicador = Indicador::create([
      'name'=> '1. El niño observa una imagen de un libro',
      ]);
      $indicador ->save();
      $subarea16->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño señala objetos familiares en ilustraciones y fotografías.',
      ]);
      $indicador1 ->save();
      $subarea16->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño “lee” una imagen al identificar lo que ve.',
      ]);
      $indicador2 ->save();
      $subarea16->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño identifica lo que representa un símbolo común.',
      ]);
      $indicador3 ->save();
      $subarea16->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño lee dos o más palabras',
      ]);
      $indicador4 ->save();
      $subarea16->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño lee tres o más palabras en letra imprenta (que no sean su propio nombre, familia y/o amigos)',
      ]);
      $indicador5 ->save();
      $subarea16->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño lee distintas palabras al seguir un texto, leyendo palabras nuevas y utilizando sonidos de letras. (Principio alfabético) Claves visuales (contexto visual), patrones del lenguaje (sintaxis), y/o vocabulario (semántica).',
      ]);
      $indicador6 ->save();
      $subarea16->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño decodifica (lee) una palabra de dos silabas, separando la palabra en silabas',
      ]);
      $indicador7 ->save();
      $subarea16->indicadores()->save($indicador7);


      /*Indicadores de subarea 17 - area 4*/

      $indicador = Indicador::create([
      'name'=> '1. El niño toca, toma o muerde un libro',
      ]);
      $indicador ->save();
      $subarea17->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño pasa las páginas de un libro',
      ]);
      $indicador1 ->save();
      $subarea17->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño mira la tapa y la parte de atrás de un libro y da vueltas las paginas una a la vez',
      ]);
      $indicador2 ->save();
      $subarea17->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño usa una frase u oración para referirse a una persona, animal, objeto, o incluso un evento representado en una imagen del libro.',
      ]);
      $indicador3 ->save();
      $subarea17->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño selecciona o pide un libro en particular.',
      ]);
      $indicador4 ->save();
      $subarea17->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño explica el por qué le gustan un libro o una serie de libros en particular.',
      ]);
      $indicador5 ->save();
      $subarea17->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño cuenta una serie secuenciada de cuatro o más eventos en una historia o libro.',
      ]);
      $indicador6 ->save();
      $subarea17->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño resume un libro basado en los elementos de la historia: personajes, escenografías, y eventos (trama).',
      ]);
      $indicador7 ->save();
      $subarea17->indicadores()->save($indicador7);


      /*Indicadores de subarea 18 - area 4*/

      $indicador = Indicador::create([
      'name'=> '1. El niño toma objetos.',
      ]);
      $indicador ->save();
      $subarea18->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño realiza marcas en una superficie de escritura.',
      ]);
      $indicador1 ->save();
      $subarea18->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño hace esbozos de escritura (garabatos)',
      ]);
      $indicador2 ->save();
      $subarea18->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño escribe formas tipo de letras distintas.',
      ]);
      $indicador3 ->save();
      $subarea18->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño escribe cinco o más letras o números reconocibles.',
      ]);
      $indicador4 ->save();
      $subarea18->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño combina letras para formar palabras (además de su propio nombre) con un propósito.',
      ]);
      $indicador5 ->save();
      $subarea18->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño escribe una oración separando las palabras con espacios.',
      ]);
      $indicador6 ->save();
      $subarea18->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño usa convenciones de escritura (en español) al escribir varias oraciones de izquierda a derecha y en líneas horizontales.',
      ]);
      $indicador7 ->save();
      $subarea18->indicadores()->save($indicador7);


      /*Indicadores de subarea 19 - area 5*/

      $indicador = Indicador::create([
      'name'=> '1. El niño mira, toca o manipula un único objeto.',
      ]);
      $indicador ->save();
      $subarea19->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño usa una palabra, señal, o frase para pedir “más”.',
      ]);
      $indicador1 ->save();
      $subarea19->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño nombra los números y cuenta de memoria.',
      ]);
      $indicador2 ->save();
      $subarea19->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño cuenta de manera sistemática (con correspondencia uno a uno) hasta 10 objetos.',
      ]);
      $indicador3 ->save();
      $subarea19->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño identifica cuatro o más numerales de un solo digito.',
      ]);
      $indicador4 ->save();
      $subarea19->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño cuenta (con correspondencia uno a uno) más de 10 objetos y dice que el último número contado, indica la cantidad.',
      ]);
      $indicador5 ->save();
      $subarea19->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño dice cuántos objetos más o menos hay en un conjunto comparado con otro.',
      ]);
      $indicador6 ->save();
      $subarea19->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño compone y descompone un numero en 2 o más formas.',
      ]);
      $indicador7 ->save();
      $subarea19->indicadores()->save($indicador7);


      /*Indicadores de subarea 20 - area 5*/

      $indicador = Indicador::create([
      'name'=> '1. E niño sigue un objeto en movimiento.',
      ]);
      $indicador ->save();
      $subarea20->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño coloca un objeto dentro de una abertura que es del tamaño correcto.',
      ]);
      $indicador1 ->save();
      $subarea20->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño se mueve o mueve objetos respondiendo a una posición simple o una orden.',
      ]);
      $indicador2 ->save();
      $subarea20->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño reconoce y nombra formas bidimensionales (circulo, triangulo, cuadrado, rectángulo)',
      ]);
      $indicador3 ->save();
      $subarea20->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño transforma (compone y descompone) formas e identifica las formas resultantes.',
      ]);
      $indicador4 ->save();
      $subarea20->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño describe qué hace que una forma sea una forma (identifica sus atributos).',
      ]);
      $indicador5 ->save();
      $subarea20->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño nombra una forma tridimensional (cubo, cilindro, pirámide)',
      ]);
      $indicador6 ->save();
      $subarea20->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño describe las formas tridimensionales y compara sus similitudes y diferencias.',
      ]);
      $indicador7 ->save();
      $subarea20->indicadores()->save($indicador7);


      /*Indicadores de subarea 21 - area 5*/

      $indicador = Indicador::create([
      'name'=> '1. El niño explora (mira, toca, manipula) uno o más objetos con atributos medibles (tamaño y peso)',
      ]);
      $indicador ->save();
      $subarea21->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño llena un recipiente.',
      ]);
      $indicador1 ->save();
      $subarea21->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño clasifica o apila cuatro o más objetos según su tamaño.',
      ]);
      $indicador2 ->save();
      $subarea21->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño usa un término de medida.',
      ]);
      $indicador3 ->save();
      $subarea21->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño compara u ordena directamente cosas basado en los atributos medibles y usa la palabra igual y palabras como mayor/menor que o más/menos que.',
      ]);
      $indicador4 ->save();
      $subarea21->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño utiliza procedimientos de medición estándar.',
      ]);
      $indicador5 ->save();
      $subarea21->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño mide algo usando dos unidades diferentes y explica por qué el resultado es diferente.',
      ]);
      $indicador6 ->save();
      $subarea21->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño, por sí mismo, mide correctamente usando unidades de medidas estándar y dice cuánto mide la unidad',
      ]);
      $indicador7 ->save();
      $subarea21->indicadores()->save($indicador7);


      /*Indicadores de subarea 22 - area 5*/

      $indicador = Indicador::create([
      'name'=> '1. El niño mira o manipula un objeto y luego otro.',
      ]);
      $indicador ->save();
      $subarea22->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño reúne tres o más objetos.',
      ]);
      $indicador1 ->save();
      $subarea22->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño alinea tres o más objetos uno detrás del otro.',
      ]);
      $indicador2 ->save();
      $subarea22->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño reconoce, copia o extiende un patrón simple existente (como ABABAB o AABBAABBAABB).',
      ]);
      $indicador3 ->save();
      $subarea22->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño crea un patrón único (no copiado) simple con al menos 3 repeticiones.',
      ]);
      $indicador4 ->save();
      $subarea22->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño crea su propio patrón complejo (no copiado) como AABAABAAB o ABCABCABC, con al menos 3 repeticiones.',
      ]);
      $indicador5 ->save();
      $subarea22->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño traduce, por sí mismo, un patrón en sonidos, símbolos, movimientos y objetos físicos.',
      ]);
      $indicador6 ->save();
      $subarea22->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño explica cómo funciona el aumento y la disminución de patrones.',
      ]);
      $indicador7 ->save();
      $subarea22->indicadores()->save($indicador7);


      /*Indicadores de subarea 23 */

      $indicador = Indicador::create([
      'name'=> '1. El niño muestra interés (mira, toca y toma) en un objeto de una colección de objetos.',
      ]);
      $indicador ->save();
      $subarea23->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño reúne objetos.',
      ]);
      $indicador1 ->save();
      $subarea23->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño agrupa cosas en dos o más colecciones.',
      ]);
      $indicador2 ->save();
      $subarea23->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño representa información (datos) en forma concreta',
      ]);
      $indicador3 ->save();
      $subarea23->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño representa información (datos) en forma abstracta',
      ]);
      $indicador4 ->save();
      $subarea23->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño interpreta información (datos) de una representación.',
      ]);
      $indicador5 ->save();
      $subarea23->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño aplica información (datos) de una representación.',
      ]);
      $indicador6 ->save();
      $subarea23->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño realiza una pregunta de interés y recopila e interpreta información (datos) para llegar a la respuesta.',
      ]);
      $indicador7 ->save();
      $subarea23->indicadores()->save($indicador7);


      /*Indicadores de subarea 24 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño explora materiales con diferentes texturas y colores',
      ]);
      $indicador ->save();
      $subarea24->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño explora materiales de arte',
      ]);
      $indicador1 ->save();
      $subarea24->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño usa materiales de arte para construir, hacer marcas distintas o moldear o aplanar.',
      ]);
      $indicador2 ->save();
      $subarea24->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño usa materiales de arte, nota un resultado accidental y dice a qué se parece.',
      ]);
      $indicador3 ->save();
      $subarea24->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño hace representaciones simples con algunos detalles',
      ]);
      $indicador4 ->save();
      $subarea24->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño hace representaciones complejas con muchos detalles.',
      ]);
      $indicador5 ->save();
      $subarea24->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño nota cómo las características artísticas (como color, línea y la textura) se conectan con sentimientos e ideas',
      ]);
      $indicador6 ->save();
      $subarea24->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño explica cómo usa un elemento de arte para crear efectos artísticos o expresar sentimientos e ideas.',
      ]);
      $indicador7 ->save();
      $subarea24->indicadores()->save($indicador7);


      /*Indicadores de subarea 25 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño se calma o se pone en alerta con  sonidos ante sonidos, tonos o música.',
      ]);
      $indicador ->save();
      $subarea25->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño responde a otras personas que cantan , al unírseles con vocalizaciones o movimientos correspondientes.',
      ]);
      $indicador1 ->save();
      $subarea25->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño solicita una canción usando una palabra o un gesto.',
      ]);
      $indicador2 ->save();
      $subarea25->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño modifica su voz cuando canta partes de una canción.',
      ]);
      $indicador3 ->save();
      $subarea25->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño explora el sonido de un instrumento rítmico sencillo de tres o más maneras.',
      ]);
      $indicador4 ->save();
      $subarea25->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño canta la letra completa de una canción familiar.',
      ]);
      $indicador5 ->save();
      $subarea25->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño canta todo o parte del estribillo y los versos no repetitivos de una canción compleja',
      ]);
      $indicador6 ->save();
      $subarea25->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño reconoce los sonidos y usa los nombres de los instrumentos musicales.',
      ]);
      $indicador7 ->save();
      $subarea25->indicadores()->save($indicador7);


      /*Indicadores de subarea 26 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño voltea la cabeza, agita los brazos o mueve las piernas mientras está recostado de espalda',
      ]);
      $indicador ->save();
      $subarea26->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño se pone de pie y salta en respuesta a la música',
      ]);
      $indicador1 ->save();
      $subarea26->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño se mueve activamente con la música.',
      ]);
      $indicador2 ->save();
      $subarea26->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño nombra y hace un movimiento.',
      ]);
      $indicador3 ->save();
      $subarea26->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño mantiene un ritmo constante al menos 8 tiempos',
      ]);
      $indicador4 ->save();
      $subarea26->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño describe cómo su movimiento está conectado a un aspecto musical (ritmo, pulso, melodía)',
      ]);
      $indicador5 ->save();
      $subarea26->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño crea su propio baile o series de movimientos (incluyendo al menos 4 movimientos distintos) y repite la secuencia',
      ]);
      $indicador6 ->save();
      $subarea26->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño aprende un baile sencillo y lo repite con un ritmo constante',
      ]);
      $indicador7 ->save();
      $subarea26->indicadores()->save($indicador7);


      /*Indicadores de subarea 27 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño observa y escucha a otra persona',
      ]);
      $indicador ->save();
      $subarea27->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño imita una acción de un animal, un objeto o una persona',
      ]);
      $indicador1 ->save();
      $subarea27->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño usa un objeto en representación de otro objeto.',
      ]);
      $indicador2 ->save();
      $subarea27->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño simula, al usar palabras y acciones, asumir el papel de un personaje o animal o una figura',
      ]);
      $indicador3 ->save();
      $subarea27->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño participa en escenarios de juegos de roles repetitivos',
      ]);
      $indicador4 ->save();
      $subarea27->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño juega con dos o más niños, saliendo del juego de roles, para dar instrucciones a otra persona.',
      ]);
      $indicador5 ->save();
      $subarea27->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño crea un disfraz especifico que tenga 5 o más detalles para apoyar y extender el juego de roles.',
      ]);
      $indicador6 ->save();
      $subarea27->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño actúa en una dramatización de una historia familiar, mito o fabula, agregando sus propias ideas.',
      ]);
      $indicador7 ->save();
      $subarea27->indicadores()->save($indicador7);


      /*Indicadores de subarea 28 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño explora objetos utilizando diferentes sentidos',
      ]);
      $indicador ->save();
      $subarea28->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño usa un sonido o gesto con la mano para nombrar un objeto.',
      ]);
      $indicador1 ->save();
      $subarea28->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño usa la misma palabra para nombrar más de un objeto.',
      ]);
      $indicador2 ->save();
      $subarea28->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño clasifica o correlaciona cosas y puede identificar cosas como iguales o diferentes.',
      ]);
      $indicador3 ->save();
      $subarea28->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño clasifica cosas basado en una característica (atributo) y describe la razón.',
      ]);
      $indicador4 ->save();
      $subarea28->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño clasifica basado en dos características y da la razón.',
      ]);
      $indicador5 ->save();
      $subarea28->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño observa atenta o repetidamente algo y describe sus descubrimientos en detalle.',
      ]);
      $indicador6 ->save();
      $subarea28->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño divide una categoría en conjuntos, divide los conjuntos en subconjuntos y describe las características de cada subconjuntos y cómo se relaciona a la categoría original y los otros subconjuntos.',
      ]);
      $indicador7 ->save();
      $subarea28->indicadores()->save($indicador7);


      /*Indicadores de subarea 29 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño realiza una acción espontanea.',
      ]);
      $indicador ->save();
      $subarea29->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño realiza una acción con un objeto.',
      ]);
      $indicador1 ->save();
      $subarea29->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño usa prueba y error para investigar un material en sí mismo y/o una idea.',
      ]);
      $indicador2 ->save();
      $subarea29->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño describe un cambio en un objeto o situación.',
      ]);
      $indicador3 ->save();
      $subarea29->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño hace una predicción en forma verbal al azar..',
      ]);
      $indicador4 ->save();
      $subarea29->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño explica la razón de los resultados de su experimento.',
      ]);
      $indicador5 ->save();
      $subarea29->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño aplica una conclusión a la que llegó usando una experiencia previa a la nueva situación.',
      ]);
      $indicador6 ->save();
      $subarea29->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño formula una pregunta y sistemáticamente prueba posibles respuestas.',
      ]);
      $indicador7 ->save();
      $subarea29->indicadores()->save($indicador7);


      /*Indicadores de subarea 30 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño responde a una experiencia sensorial en el mundo natural.',
      ]);
      $indicador ->save();
      $subarea30->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño levanta, examina o usa un objeto o material natural.',
      ]);
      $indicador1 ->save();
      $subarea30->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño nombra un objeto o evento en el mundo natural y físico.',
      ]);
      $indicador2 ->save();
      $subarea30->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño indica o habla acerca de realizar una acción beneficiosa para las plantas o animales.',
      ]);
      $indicador3 ->save();
      $subarea30->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño habla sobre donde viven o donde se encuentran diferentes tipos de animales (hábitats).',
      ]);
      $indicador4 ->save();
      $subarea30->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño identifica un cambio en la materia o el ambiente y una posible causa.',
      ]);
      $indicador5 ->save();
      $subarea30->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño explica cómo y por qué la conducta de las personas puede ser dañina al ambiente y da una idea para ayudar.',
      ]);
      $indicador6 ->save();
      $subarea30->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño identifica y describe un ciclo o sistema.',
      ]);
      $indicador7 ->save();
      $subarea30->indicadores()->save($indicador7);


      /*Indicadores de subarea 31 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño responde (se lleva a la boca, alcanza, se gira hacia, toca) a un objeto.',
      ]);
      $indicador ->save();
      $subarea31->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño explora una herramienta en su juego.',
      ]);
      $indicador1 ->save();
      $subarea31->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño explora aparatos tecnológicos.',
      ]);
      $indicador2 ->save();
      $subarea31->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño utiliza herramientas para apoyar su juego.',
      ]);
      $indicador3 ->save();
      $subarea31->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño explica de manera simple cómo una herramienta funciona.',
      ]);
      $indicador4 ->save();
      $subarea31->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño explica de manera simple cómo hacer que una pieza tecnológica funcione.',
      ]);
      $indicador5 ->save();
      $subarea31->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño explica cómo las herramientas y la tecnología ayudan en las tareas del diario vivir.',
      ]);
      $indicador6 ->save();
      $subarea31->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño utiliza tecnología para buscar información en la cual está interesado.',
      ]);
      $indicador7 ->save();
      $subarea31->indicadores()->save($indicador7);


      /*Indicadores de subarea 32 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño pone sus propios dedos pulgares y pie en su boca.',
      ]);
      $indicador ->save();
      $subarea32->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño indica y dice un objeto es mío.',
      ]);
      $indicador1 ->save();
      $subarea32->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño espontáneamente se identifica en un espejo o foto.',
      ]);
      $indicador2 ->save();
      $subarea32->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño juega o habla acerca de roles en la familia o comunidad.',
      ]);
      $indicador3 ->save();
      $subarea32->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño identifica similitudes o diferencias en las características personales de la gente.',
      ]);
      $indicador4 ->save();
      $subarea32->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño compara las características de su propia familia con las de otros.',
      ]);
      $indicador5 ->save();
      $subarea32->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño expresa un sentimiento de pertenencia a la comunidad.',
      ]);
      $indicador6 ->save();
      $subarea32->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño toma responsabilidad personal de asegurarse que otros sean tratados justamente y con respeto.',
      ]);
      $indicador7 ->save();
      $subarea32->indicadores()->save($indicador7);


      /*Indicadores de subarea 33- area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño mira detenidamente un objeto en una ubicación física.',
      ]);
      $indicador ->save();
      $subarea33->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño mueve un objeto para obtener acceso a otro objeto.',
      ]);
      $indicador1 ->save();
      $subarea33->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño muestra dónde deben ir los objetos o dónde suceden eventos en el entorno inmediato.',
      ]);
      $indicador2 ->save();
      $subarea33->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño usa símbolos para ayudar a recoger o guardar materiales o para identificar la ubicación real de áreas de interés.',
      ]);
      $indicador3 ->save();
      $subarea33->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño lee un mapa familiar simple, como un mapa del aula.',
      ]);
      $indicador4 ->save();
      $subarea33->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño sabe desplazarse en un edificio que le resulta familiar.',
      ]);
      $indicador5 ->save();
      $subarea33->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño describe la ubicación de hitos familiares.',
      ]);
      $indicador6 ->save();
      $subarea33->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño interpreta un mapa de una ubicación desconocida.',
      ]);
      $indicador7 ->save();
      $subarea33->indicadores()->save($indicador7);


      /*Indicadores de subarea 34 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. El niño participa en una acción voluntaria.',
      ]);
      $indicador ->save();
      $subarea34->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. El niño indica el final de un evento.',
      ]);
      $indicador1 ->save();
      $subarea34->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño anticipa el siguiente evento en una secuencia familiar.',
      ]);
      $indicador2 ->save();
      $subarea34->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño usa palabras tales como “ayer o mañana” para referirse en forma general a cosas en el pasado o futuro.',
      ]);
      $indicador3 ->save();
      $subarea34->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño usa correctamente palabras tales como “ayer o mañana”.',
      ]);
      $indicador4 ->save();
      $subarea34->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño comparte una historia sobre él o su familia que sucedió hace bastante tiempo, no en el pasado inmediato',
      ]);
      $indicador5 ->save();
      $subarea34->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño interpreta fotos o ilustraciones que representan periodos del pasado o futuros.',
      ]);
      $indicador6 ->save();
      $subarea34->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño crea (dibuja y/o escribe) una línea de tiempo para mostrar eventos personales en secuencia.',
      ]);
      $indicador7 ->save();
      $subarea34->indicadores()->save($indicador7);


      /*Indicadores de subarea 35 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. No aplica',
      ]);
      $indicador ->save();
      $subarea35->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. No aplica',
      ]);
      $indicador1 ->save();
      $subarea35->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño continúa con sus acciones cuando se le habla en inglés.',
      ]);
      $indicador2 ->save();
      $subarea35->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño observa (mira y escucha) a otros conversar en inglés.',
      ]);
      $indicador3 ->save();
      $subarea35->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño usa indicios en el entorno para seguir rutinas e instrucciones.',
      ]);
      $indicador4 ->save();
      $subarea35->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño responde a palabras y frases simples en inglés solo, sin necesidad de indicios visuales.',
      ]);
      $indicador5 ->save();
      $subarea35->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño responde a una frase compleja en inglés.',
      ]);
      $indicador6 ->save();
      $subarea35->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño sigue una conversación en inglés entre dos o más personas.',
      ]);
      $indicador7 ->save();
      $subarea35->indicadores()->save($indicador7);


      /*Indicadores de subarea 36 - area 2*/

      $indicador = Indicador::create([
      'name'=> '1. No aplica',
      ]);
      $indicador ->save();
      $subarea36->indicadores()->save($indicador);

      $indicador1 = Indicador::create([
      'name'=> '2. No aplica',
      ]);
      $indicador1 ->save();
      $subarea36->indicadores()->save($indicador1);

      $indicador2 = Indicador::create([
      'name'=> '3. El niño, si habla, usa un idioma distinto del inglés.',
      ]);
      $indicador2 ->save();
      $subarea36->indicadores()->save($indicador2);

      $indicador3 = Indicador::create([
      'name'=> '4. El niño imita y/o repite sonidos, palabras y frases en inglés; puede que no se exprese con claridad.',
      ]);
      $indicador3 ->save();
      $subarea36->indicadores()->save($indicador3);

      $indicador4 = Indicador::create([
      'name'=> '5. El niño nombra un objeto o una acción familiar en inglés por sí mismo y/o usa una frase común en inglés.',
      ]);
      $indicador4 ->save();
      $subarea36->indicadores()->save($indicador4);

      $indicador5 = Indicador::create([
      'name'=> '6. El niño dice, en inglés, una frase breve que incluye un verbo; puede combinar palabras en inglés con el idioma que se habla en su hogar en la misma frase.',
      ]);
      $indicador5 ->save();
      $subarea36->indicadores()->save($indicador5);

      $indicador6 = Indicador::create([
      'name'=> '7. El niño habla inglés en oraciones que incluyen frases no estandarizadas; puede cometer errores gramaticales que provienen del idioma de la casa o que son típicos de niños pequeños.',
      ]);
      $indicador6 ->save();
      $subarea36->indicadores()->save($indicador6);

      $indicador7 = Indicador::create([
      'name'=> '8. El niño habla inglés en oraciones completas, usando el orden de las palabras y las construcciones adecuadas.',
      ]);
      $indicador7 ->save();
      $subarea36->indicadores()->save($indicador7);


    }
}
