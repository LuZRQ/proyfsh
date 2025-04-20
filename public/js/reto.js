// Lógica para manejar el progreso del desafío
let puntos = 0;
let estrellas = 0;
let diasCompletados = 0;  // Contador de los días completados

// Función que se activa cuando el usuario acepta el desafío
function aceptarDesafio() {
  // Si el desafío ya ha comenzado, solo sumamos un día
  if (diasCompletados < 7) {
    diasCompletados++;
    puntos++;

    // Actualizar los días completados en la interfaz
    document.getElementById('diasCompletados').innerText = `Días completados: ${diasCompletados} de 7`;

    // Verificar si el usuario ha completado la semana
    if (diasCompletados === 7) {
      // Gana una estrella
      estrellas++;
      document.getElementById('stars').innerText = '⭐'.repeat(estrellas);

      // Mostrar mensaje motivacional de logro
      document.getElementById('mensajeMotivacional').innerText = "¡Felicidades, has completado el desafío de la semana! 🎉";

      // Aquí podrías hacer que el botón de aceptar desaparezca si ya completaron la semana
      document.querySelector("button").disabled = true;
      document.querySelector("button").innerText = "¡Desafío Completado!";
    } else {
      document.getElementById('mensajeMotivacional').innerText = `¡Vas bien! Solo te quedan ${7 - diasCompletados} días para completar el desafío.`;
    }
  }
}