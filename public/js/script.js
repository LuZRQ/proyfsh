const portionCount = document.getElementById('portionCount');
const espinaca = document.getElementById('espinaca');
const agua = document.getElementById('agua');
const naranja = document.getElementById('naranja');
const apio = document.getElementById('apio');
const platano = document.getElementById('platano');
const pina = document.getElementById('pina');

let portions = 1; // Inicializa en 1 porción

// Definir las cantidades base para cada ingrediente como fracciones
const baseIngredients = {
    espinaca: ["1/2", "1", "1 1/2", "2", "2 1/2", "3", "3 1/2", "4", "4 1/2", "5", "5 1/2", "6", "6 1/2", "7", "7 1/2", "8", "8 1/2", "9", "9 1/2", "10", "10 1/2", "11", "11 1/2", "12", "12 1/2", "13", "13 1/2", "14", "14 1/2", "15"], // en tazas
    agua: ["1/4", "1/2", "3/4", "1", "1 1/4", "1 1/2", "1 3/4", "2", "2 1/4", "2 1/2", "2 3/4", "3", "3 1/4", "3 1/2", "3 3/4", "4", "4 1/4", "4 1/2", "4 3/4", "5", "5 1/4", "5 1/2", "5 3/4", "6", "6 1/4", "6 1/2", "6 3/4", "7", "7 1/4", "7 1/2"], // en tazas
    naranja: ["1/2", "1", "1 1/2", "2", "2 1/2", "3", "3 1/2", "4", "4 1/2", "5", "5 1/2", "6", "6 1/2", "7", "7 1/2", "8", "8 1/2", "9", "9 1/2", "10", "10 1/2", "11", "11 1/2", "12", "12 1/2", "13", "13 1/2", "14", "14 1/2", "15"], // en unidades
    apio: ["1/2", "1", "1 1/2", "2", "2 1/2", "3", "3 1/2", "4", "4 1/2", "5", "5 1/2", "6", "6 1/2", "7", "7 1/2", "8", "8 1/2", "9", "9 1/2", "10", "10 1/2", "11", "11 1/2", "12", "12 1/2", "13", "13 1/2", "14", "14 1/2", "15"], // en ramas
    platano: ["1/2", "1", "1 1/2", "2", "2 1/2", "3", "3 1/2", "4", "4 1/2", "5", "5 1/2", "6", "6 1/2", "7", "7 1/2", "8", "8 1/2", "9", "9 1/2", "10", "10 1/2", "11", "11 1/2", "12", "12 1/2", "13", "13 1/2", "14", "14 1/2", "15"], // en unidades
    pina: [50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750, 800, 850, 900, 950, 1000, 1050, 1100, 1150, 1200, 1250, 1300, 1350, 1400, 1450, 1500, 1550] // en gramos
};

// Función para actualizar las cantidades de los ingredientes
function updateIngredients() {
    espinaca.textContent = baseIngredients.espinaca[portions - 1] + ' taza' + (baseIngredients.espinaca[portions - 1] > 1 ? 's' : '');
    agua.textContent = baseIngredients.agua[portions - 1] + ' taza' + (baseIngredients.agua[portions - 1] > 1 ? 's' : '');
    naranja.textContent = baseIngredients.naranja[portions - 1] + ' unidad' + (baseIngredients.naranja[portions - 1] > 1 ? 'es' : '');
    apio.textContent = baseIngredients.apio[portions - 1] + ' rama' + (baseIngredients.apio[portions - 1] > 1 ? 's' : '');
    platano.textContent = baseIngredients.platano[portions - 1] + ' unidad' + (baseIngredients.platano[portions - 1] > 1 ? 'es' : '');
    pina.textContent = baseIngredients.pina[portions - 1] + ' gramos';
}

// Manejar el evento de aumento de porciones
document.getElementById('increase').addEventListener('click', () => {
    if (portions < 30) { // Limitar a un máximo de 30 porciones
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