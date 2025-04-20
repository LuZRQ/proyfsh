
const preguntas = [
  {
    texto: "¿El pan integral engorda menos que el blanco?",
    respuestaCorrecta: "falso",
    explicacion: "Falso. La diferencia está en la fibra, no en las calorías."
  },
  {
    texto: "¿Las frutas contienen azúcar natural?",
    respuestaCorrecta: "verdadero",
    explicacion: "Verdadero. Es fructosa, un tipo de azúcar natural y saludable en cantidades moderadas."
  },
  {
    texto: "¿Tomar agua ayuda a tener mejor concentración?",
    respuestaCorrecta: "verdadero",
    explicacion: "Verdadero. La hidratación mejora el rendimiento físico y mental."
  },
  {
    texto: "¿El chocolate siempre es malo para la salud?",
    respuestaCorrecta: "falso",
    explicacion: "Falso. El chocolate oscuro en moderación puede ser beneficioso."
  }
  // puedes agregar más preguntas
];

let preguntaActual = 0;
let puntaje = 0;

function mostrarPregunta() {
  const pregunta = preguntas[preguntaActual];
  document.getElementById('pregunta').innerText = pregunta.texto;
  document.getElementById('respuesta').innerText = "";
  document.getElementById('botonSiguiente').classList.add('hidden');
  document.getElementById('final').classList.add('hidden');
}

function verificarRespuesta(seleccion) {
  const pregunta = preguntas[preguntaActual];
  const respuesta = document.getElementById('respuesta');

  if (seleccion === pregunta.respuestaCorrecta) {
    respuesta.innerHTML = `✅ ¡Correcto! ${pregunta.explicacion}`;
    respuesta.style.color = 'green';
    puntaje++;
  } else {
    respuesta.innerHTML = `❌ Incorrecto. ${pregunta.explicacion}`;
    respuesta.style.color = 'red';
  }

  document.getElementById('botonSiguiente').classList.remove('hidden');
}

function siguientePregunta() {
  preguntaActual++;

  if (preguntaActual < preguntas.length) {
    mostrarPregunta();
  } else {
    mostrarResultado();
  }
}

function mostrarResultado() {
  document.getElementById('pregunta').innerText = "¡Juego Terminado!";
  document.getElementById('respuesta').innerText = "";
  document.getElementById('botonSiguiente').classList.add('hidden');
  document.getElementById('final').classList.remove('hidden');

  let mensaje = "";
  if (puntaje === preguntas.length) {
    mensaje = `🎉 ¡Perfecto! Acertaste todas las preguntas (${puntaje}/${preguntas.length}) 🏆`;
  } else if (puntaje >= preguntas.length / 2) {
    mensaje = `😊 ¡Muy bien! Acertaste ${puntaje} de ${preguntas.length} preguntas. ¡Sigue aprendiendo!`;
  } else {
    mensaje = `💡 Acertaste ${puntaje} de ${preguntas.length}. ¡Sigue practicando para ser un experto saludable!`;
  }

  document.getElementById('mensajeFinal').innerText = mensaje;
}

function reiniciarJuego() {
  preguntaActual = 0;
  puntaje = 0;
  mostrarPregunta();
}

document.addEventListener('DOMContentLoaded', mostrarPregunta);

