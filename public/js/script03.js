const portionCount = document.getElementById('portionCount');
const espinaca = document.getElementById('espinaca');
const quesocheddar = document.getElementById('quesocheddar');
const cebolla = document.getElementById('cebolla');
const quesorallado = document.getElementById('quesorallado');
const aceiteoliva = document.getElementById('aceiteoliva');
const salsabechamel = document.getElementById('salsabechamel');
const laminalasaña = document.getElementById('laminalasaña');

let portions = 1; // Inicializa en 1 porción

// Definir las cantidades base para cada ingrediente
const baseIngredients = {
    espinaca: [75, 150, 225, 300, 375, 450, 525, 600, 675, 750], // en gramos
    quesocheddar: [25, 50, 75, 100, 125, 150, 175, 200, 225, 250], // en gramos
    cebolla: [25, 50, 75, 100, 125, 150, 175, 200, 225, 250], // en gramos
    quesorallado: ["3/4 puñado", "1 1/2 puñados", "2 1/4 puñados", "3 puñados", "3 3/4 puñados", "4 1/2 puñados", "5 1/4 puñados", "6 puñados", "6 3/4 puñados", "7 1/2 puñados"], // en puñados
    aceiteoliva: ["1/2 cucharada", "1 cucharada", "1 1/2 cucharadas", "2 cucharadas", "2 1/2 cucharadas", "3 cucharadas", "3 1/2 cucharadas", "4 cucharadas", "4 1/2 cucharadas", "5 cucharadas"], // en cucharadas
    salsabechamel: ["1/4 bote pequeño", "1/2 bote pequeño", "3/4 bote pequeño", "1 bote pequeño", "1 1/4 bote pequeño", "1 1/2 bote pequeño", "1 3/4 bote pequeño", "2 botes pequeños", "2 1/4 botes pequeños", "2 1/2 botes pequeños"], // en botes pequeños
    laminalasaña: [1.5, 3, 4.5, 6, 7.5, 9, 10.5, 12, 13.5, 15] // en unidades
};

// Función para actualizar las cantidades de los ingredientes
function updateIngredients() {
    espinaca.textContent = baseIngredients.espinaca[portions - 1] + ' gramos';
    quesocheddar.textContent = baseIngredients.quesocheddar[portions - 1] + ' gramos';
    cebolla.textContent = baseIngredients.cebolla[portions - 1] + ' gramos';
    quesorallado.textContent = baseIngredients.quesorallado[portions - 1];
    aceiteoliva.textContent = baseIngredients.aceiteoliva[portions - 1];
    salsabechamel.textContent = baseIngredients.salsabechamel[portions - 1];
    laminalasaña.textContent = baseIngredients.laminalasaña[portions - 1] + ' unidades';
}

// Manejar el evento de aumento de porciones
document.getElementById('increase').addEventListener('click', () => {
    if (portions < 30) { 
        portions++;
        portionCount.textContent = portions;
        updateIngredients();
    }
});

// Manejar el evento de disminución de porciones
document.getElementById('decrease').addEventListener('click', () => {
    if (portions > 1) { // Limitar a un mínimo de 1 porción
        portions--;
        portionCount.textContent = portions;
        updateIngredients();
    }
});

updateIngredients();
