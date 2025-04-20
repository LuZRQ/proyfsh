const portionCount = document.getElementById('portionCount');

// Ingredientes frescos
const huevo = document.getElementById('huevo');
const zumoLimon = document.getElementById('zumo-limon');
const limon = document.getElementById('limon');
const mantequilla = document.getElementById('mantequilla');

// Ingredientes de despensa
const azucar = document.getElementById('azucar');
const harinaTrigo = document.getElementById('harina-trigo');
const levadura = document.getElementById('levadura');

let portions = 1; // Inicializa en 1 porción

// Definir las cantidades base para cada ingrediente
const baseIngredients = {
    huevo: ["1/2", "1", "1 1/2", "2", "2 1/2", "3", "3 1/2", "4", "4 1/2", "5"], // en unidades
    zumoLimon: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100], // en mililitros
    limon: ["1/4", "1/2", "3/4", "1", "1 1/4", "1 1/2", "1 3/4", "2", "2 1/4", "2 1/2"], // en unidades
    mantequilla: [20, 40, 60, 80, 100, 120, 140, 160, 180, 200], // en gramos
    azucar: [33, 66, 99, 132, 165, 198, 231, 264, 297, 330], // en gramos
    harinaTrigo: [47, 94, 141, 188, 235, 282, 329, 376, 423, 470], // en gramos
    levadura: ["1/4", "1/2", "3/4", "1", "1 1/4", "1 1/2", "1 3/4", "2", "2 1/4", "2 1/2"] // en cucharaditas
};

// Función para actualizar las cantidades de los ingredientes
function updateIngredients() {
    huevo.textContent = baseIngredients.huevo[portions - 1] + ' unidad' + (baseIngredients.huevo[portions - 1] > 1 ? 'es' : '');
    zumoLimon.textContent = baseIngredients.zumoLimon[portions - 1] + ' mililitros';
    limon.textContent = baseIngredients.limon[portions - 1] + ' unidad' + (baseIngredients.limon[portions - 1] > 1 ? 'es' : '');
    mantequilla.textContent = baseIngredients.mantequilla[portions - 1] + ' gramos';
    azucar.textContent = baseIngredients.azucar[portions - 1] + ' gramos';
    harinaTrigo.textContent = baseIngredients.harinaTrigo[portions - 1] + ' gramos';
    levadura.textContent = baseIngredients.levadura[portions - 1] + ' cucharadita' + (baseIngredients.levadura[portions - 1] > 1 ? 's' : '');
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