var liConfianza = $('#liConfianza'),
    liCompromiso = $('#liCompromiso'),
    liPerseverancia = $('#liPerseverancia'),
    liRespeto = $('#liRespeto'),
    liEtica = $('#liEtica'),
    liTrabajo = $('#liTrabajo'),
    liExelencia = $('#liExelencia'),
    liLiderazgo = $('#liLiderazgo'),
    liEntusiasmo = $('#liEntusiasmo');
var menuCodigoConducta=$('#menuCodigoConducta');

    function mostrarTexto(valor, texto){
      vacSelect=$(this).attr('id');
      bootbox.dialog({
        title:'<div align="center"><strong>'+valor+'</strong></div>',
        message: '<div align="left"> '+texto+
                ' </div>',
        //closeButton: false,
        animate: true,
        onEscape: true,
        backdrop: true,
        buttons: {
          danger: {
          label: "Cerrar",
          className: "btn-default",
        },
        }
      });
    }

function confianza(){
  titulo = "Confianza";
  texto = "La confianza en sí mismo es el primer secreto del éxito. Emerson <br><br>"+
  "Cuando alguien te da su confianza, siempre te quedas en deuda con él. T. Capote. <br><br>"+
  "Si uno quiere despertar conf|ianza, debe ser digno de confianza. S. Covey.<br><br>"+
"La confianza viene de la disciplina y del entrenamiento. R. Kiyosaki.<br><br>"+
"Si no tienes confianza, siempre encontrarás una forma de no ganar. C. Lewis.<br><br>"+
"La confianza… prospera en la honestidad, el honor, en el carácter sagrado de las obligaciones, sobre la protección, y la fidelidad desinteresada en el rendimiento. Sin ellos no puedes vivir. F.D. Roosevelt <br><br>";
  mostrarTexto(titulo, texto)
}

function compromiso(){
  titulo = "Compromiso";
  texto = "Cuando estás rodeado de personas que comparten un compromiso apasionado en torno a un propósito común, todo es posible. H. Schultz. <br><br>"+
  "	No hay éxito duradero sin compromiso. T. Robbins. <br><br>"+
  "	Del compromiso individual al esfuerzo grupal, eso es lo que hace funcionar a un equipo, a una compañía o a una civilización. V. Lombardi. <br><br>"+
  " El carácter nos saca de la cama, el compromiso nos mueve a la acción y la disciplina nos permite continuar. Z. Ziglar. <br><br>"+
  "	Disciplina es pagar el precio para traer esa visión a la realidad. Es abordar los hechos duros, pragmáticos y brutales de la realidad y hacer lo que haga falta para que ocurran las cosas. La disciplina surge cuando la visión se une al compromiso. S. Covey <br><br>";

  mostrarTexto(titulo, texto)
}
function perseverancia(){
  titulo = "Perseverancia";
  texto = "	La marca esencial que distingue a un hombre digno de llamarse así, es la perseverancia en las situaciones adversas y difíciles. Beethoven <br><br>"+
  "	Es intentando lo imposible como se realiza lo posible. H. Barbusse. <br><br>"+
  "	Si se siembra la semilla con fe y se cuida con perseverancia, sólo será cuestión de tiempo recoger sus frutos. T. Carlyle. <br><br>"+
  "	No son los golpes, ni las caídas las que hacen fracasar al hombre; sino su falta de voluntad para levantarse y seguir adelante. Anónimo. <br><br>"+
  "	Los grandes trabajos no son hechos por la fuerza, sino por la perseverancia. S. Johnson. <br><br>"+
  "	La constancia es un puente entre el deseo y la realización. L. Señor <br><br>"+
  "	Solo triunfa en el mundo quien se levanta y busca a las circunstancias, creándolas si no las encuentra. G. B. Shaw. <br><br>"+
  "	La diferencia entre ganar y perder, a menudo consiste en no abandonar. W. Disney. <br><br>";
  mostrarTexto(titulo, texto)
}
function respeto(){
  titulo = "Respeto";
  texto = "	El respeto es una calle de dos vías, si lo quieres recibir, lo tienes que dar. R.G. Risch. <br><br>"+
  "	La Virtud reside en lo que das, no en lo que recibes. Por ello, cuando los sabios quieren ser valorados por otros, primero valoran a los demás; cuando quieren ser respetados por otros, primero los respetan. Cuando quieren superar a otras personas, primero se superan a sí mismos. Lao Tse <br><br>"+
  "	El valor más importante en un ser humano es el respeto, cuando una persona tiene respeto el resto de los valores se dan solos, si respetas brindas libertad, si respetas vives mejor con las personas que te rodean, por eso vamos a practicar el respeto, vamos a dejar de hacer esas cosas que violan la dignidad de los demás y a vivir mejor. B. Juárez <br><br>"+
  "	Respeto no significa temor y sumisa reverencia; denota, de acuerdo con la raíz de la palabra (respicere: mirar), la capacidad de ver a una persona tal cual es, tener conciencia de su individualidad única. Respetar significa preocuparse por que la otra persona crezca y se desarrolle tal como es. De ese modo, el respeto implica la ausencia de explotación. E. Fromm. <br><br>"+
  "	Siempre es más valioso tener el respeto que la admiración de las personas. J.J. Rousseau <br><br>"+
  "	Comprensión y respeto, eso es lo importante para convivir con los demás y sobre todo, no creer que uno es mejor que los demás. Anónimo. <br><br>"+
  "	No hay respeto para los demás, sin humildad en uno mismo. H.F. Amiel <br><br>"+
  "	Las diferencias nos enriquecen, pero solo el respeto nos une. Anónimo. <br><br>";
  mostrarTexto(titulo, texto)
}
function etica(){
  titulo = "Ética Profesional";
  texto = "	La integridad no tiene necesidad de reglas. A. Camus. <br><br>"+
  "	La ley, la moral y la ética, tres pilares de una decisión. Dochanlu. <br><br>"+
  "	Aún el más racional pensamiento de ética es indefenso si no existe la voluntad de hacer lo correcto. A. Solzhenitsyn. <br><br>"+
  "En el momento en que un hombre acepta la responsabilidad para otros hombres, y solo en la medida que hace eso, se halla de pleno en la realidad se origina la auténtica situación ética, que, en verdad, se diferencia esencialmente de la abstracción, en cuyo interior el hombre intenta dominar lo ético. El sujeto de la acción ya no es el individuo aislado, sino aquel que es responsable para otros hombres; entonces, la norma de la acción no es un principio universalmente válido, sino el prójimo concreto, tal como me ha sido dado. D. Bonhoeffer. <br><br>"+
  "	Las necesidades de una sociedad determinan su ética. M. Angelou. <br><br>"+
  "	La moral es la ciencia por excelencia; es el arte de vivir bien y de ser dichoso. B. Pascal. <br><br>"+
  "El objetivo de la ética en el terreno de la práctica profesional, es principalmente, la aplicación de las normas morales, fundadas en la honradez, la cortesía y el honor. Anónimo <br><br>"
;
  mostrarTexto(titulo, texto)
}
function trabajo(){
  titulo = "Trabajo en Equipo";
  texto = "	El talento gana partidos, pero el trabajo en equipo y la inteligencia ganan campeonatos. M. Jordán. <br><br>"+
  "	Trabajar en equipo divide el trabajo y multiplica los resultados” Anónimo. <br><br>"+
  "	Los logros de una organización son los resultados del esfuerzo combinado de cada individuo. V. Lombardi. <br><br>"+
  "	Ninguno de nosotros es tan bueno como todos nosotros juntos. R. Kroc. <br><br>"+
  "	El espíritu de equipo es lo que da a muchas empresas una ventaja sobre sus competidores. G. Clements. <br><br>"+
  "	El trabajo en equipo es la habilidad para trabajar juntos hacia una visión común. La habilidad de dirigir logros individuales hacia objetivos organizacionales. Es el combustible que permite a la gente común conseguir resultados poco comunes. A. Carnegie. <br><br>",
  "	Si un equipo quiere alcanzar su potencial, cada miembro debe estar dispuesto a subordinar sus metas personales para el bien del equipo. B. Wilkinson.<br><br>"+
  "	Personas interdependientes combinan sus propios esfuerzos con los esfuerzos de otros para conseguir sus mayores éxitos. S. Covey.<br><br>"+
  "	Del compromiso individual al esfuerzo de un equipo, eso hace que un equipo funcione, que una compañía funciona, que una sociedad y civilización funcionen. V. Lombardi.<br><br>"+
  "	No somos un equipo porque trabajamos juntos, somos un equipo porque nos respetamos, confiamos y preocupamos por los demás. Anónimo.<br><br>";
  mostrarTexto(titulo, texto)
}
function exelencia(){
  titulo = "Exelencia";
  texto = "	Junto a la excelencia, viene el reconocimiento. W. Thackeray.  <br><br>"+
  "	A la excelencia difícilmente se llega paseando a ritmo demasiado sosegado. Los triunfadores se apoderan de las oportunidades y les dan forma. Viven como obsesionados por las maravillosas ocasiones de cada día, convencidos de que lo único que no le sobra a nadie es el tiempo.  Robbins <br><br>"+
  "	Somos lo que hacemos día a día. De modo que la excelencia no es un acto sino un hábito. Aristóteles. <br><br>"+
  "	El precio de la grandeza es la responsabilidad. W. Churchill.<br><br>"+
  "	La perfección no es un fin, es un camino que se llama excelencia. Anónimo.<br><br>"+
  "	La perfeccion, no es alcanzable, pero si perseguimos la perfeccion, podemos alcanzar la excelencia. V. Lombardi. <br><br>"+
  "	Nunca pares, nunca te conformes, hasta que lo bueno sea mejor y lo mejor excelente. Anónimo <br><br>"+
  "	La voluntad de ganar, el deseo de tener éxito, la necesidad de llegar a tu máximo potencial… estas son las llaves que abrirán las llaves a la excelencia personal. Confucio.";
  mostrarTexto(titulo, texto)
}
function liderazgo(){
  titulo = "Liderazgo";
  texto = "Un líder es un negociador de esperanzas. N. Bonaparte <br><br>"+
  "	Gestión es hacer las cosas bien, Liderazgo es hacer  las cosas. P. Drucker. <br><br>"+
  "	Mi trabajo no es ser complaciente con las personas. Mi trabajo es empujar a estos grandes trabajadores que tenemos y hacerlos aún mejores. S. Jobs.<br><br>"+
  "	Los líderes no nacen, se hacen. Y  se hacen de la misma manera que todo lo demás: a través del trabajo duro. V. Lombardi.<br><br> "+
  "	Si tus acciones crean un legado que inspira a otros a soñar más, aprender más, hacer más y ser algo más, entonces eres un gran líder. D. Parton.<br><br>"+
  "	El liderazgo es la capacidad de traducir la visión en realidad. W. Bennis.<br><br>"+
  "	El liderazgo efectivo es poner primero lo primero. La dirección efectiva es la disciplina llevada a cabo. S. Covey.<br><br>";
  mostrarTexto(titulo, texto)
}
function entusiasmo(){
  titulo = "Entusiasmo";
  texto = "	El entusiasmo es emoción con inspiración, motivación, y una pizca de creatividad. Bennett. <br><br>"+
  "	Hay una magia real en el entusiasmo, en ella se explica la diferencia entre la mediocridad y los logros. N.V. Peale. <br><br>"+
  "	Si no sientes entusiasmo por lo que estás haciendo, probablemente deberías estar haciendo otra cosa, ya que el entusiasmo es la clave del éxito. C. Pulsifer. <br><br>"+
  "	No dejes apagar el entusiasmo, virtud tan valiosa como necesaria; trabaja, aspira, tiende siempre hacia la altura. R. Darío. <br><br>"+
  "	Ningún arte ni aprendizaje se puede cultivar sin entusiasmo. M. Shikibu. <br><br>";
  mostrarTexto(titulo, texto)
}

$( document ).ready(function() {
    menuCodigoConducta.addClass('hidden');
});

liConfianza.on('click',confianza);
liCompromiso.on('click',compromiso);
liPerseverancia.on('click',perseverancia);
liRespeto.on('click',respeto);
liEtica.on('click',etica);
liTrabajo.on('click',trabajo);
liExelencia.on('click',exelencia);
liLiderazgo.on('click',liderazgo);
liEntusiasmo.on('click',entusiasmo);
