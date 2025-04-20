let currentStep = 1;

function nextStep(step) {
    document.getElementById(`step-${currentStep}`).style.display = 'none'; // Ocultar paso actual
    currentStep = step; // Actualizar el paso actual
    document.getElementById(`step-${currentStep}`).style.display = 'block'; // Mostrar siguiente paso
    updateProgress(); // Actualizar la barra de progreso
}

function selectGoal(goal) {
    // Almacena el objetivo seleccionado
    console.log("Objetivo seleccionado:", goal);
    document.querySelectorAll('.goal-btn').forEach(btn => {
        btn.classList.remove('selected'); // Eliminar clase 'selected' de todos los botones
    });
    event.target.classList.add('selected'); // Añadir clase 'selected' al botón presionado
}

function selectGender(gender) {
    // Almacena el género seleccionado
    console.log("Género seleccionado:", gender);
    document.querySelectorAll('.gender-btn').forEach(btn => {
        btn.classList.remove('selected'); // Eliminar clase 'selected' de todos los botones
    });
    event.target.classList.add('selected'); // Añadir clase 'selected' al botón presionado
}

function selectActivity(activity) {
    // Almacena la actividad seleccionada
    console.log("Actividad seleccionada:", activity);
    document.querySelectorAll('.activity-btn').forEach(btn => {
        btn.classList.remove('selected'); // Eliminar clase 'selected' de todos los botones
    });
    event.target.classList.add('selected'); // Añadir clase 'selected' al botón presionado
}

function updateProgress() {
    const progressBar = document.getElementById('progress-bar');
    const percentage = (currentStep - 1) / 9 * 100; // Cambia el 8 por 9 para incluir el nuevo paso
    progressBar.style.width = percentage + '%'; // Actualizar el ancho de la barra de progreso
}

// Variable para almacenar la información del usuario de Google
let googleUser = null;

function submitForm() {
    const userData = {
        name: document.getElementById('name').value,
        birthdate: document.getElementById('birthdate').value,
        goal: document.querySelector('.goal-btn.selected')?.textContent || '',
        gender: document.querySelector('.gender-btn.selected')?.textContent || '',
        allergies: document.getElementById('allergies').value,
        condition: document.getElementById('condition').value,
        weight: document.getElementById('weight').value,
        height: document.getElementById('height').value,
        activityLevel: document.querySelector('.activity-btn.selected')?.textContent || '',
    };

    if (googleUser) {
        // Si el usuario está autenticado con Google, usa el UID de Google como ID en la base de datos
        const userId = googleUser.uid;
        console.log("Datos del usuario:", userData);
        console.log("ID de usuario (Google):", userId);
        // Aquí puedes agregar la lógica para guardar los datos en Firebase, usando el userId como identificador
    } else {
        console.log("El usuario no ha iniciado sesión con Google.");
        // Opcional: muestra un mensaje de error o realiza otra acción
    }
}

// Lógica de autenticación con Google
document.getElementById('google-login').addEventListener('click', () => {
    const provider = new firebase.auth.GoogleAuthProvider();
    firebase.auth().signInWithPopup(provider)
        .then((result) => {
            googleUser = result.user; // Guarda el usuario autenticado
            console.log('Usuario autenticado con Google:', googleUser);
            // Rellena el campo de nombre con el nombre del usuario de Google
            document.getElementById('name').value = googleUser.displayName;
            nextStep(2); // Pasar automáticamente al siguiente paso
        })
        .catch((error) => {
            console.error('Error al autenticar con Google:', error);
        });
});



function calculateAge(birthdate) {
    const birthDateObj = new Date(birthdate);
    const today = new Date();
    let age = today.getFullYear() - birthDateObj.getFullYear();
    const monthDiff = today.getMonth() - birthDateObj.getMonth();
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDateObj.getDate())) {
        age--;
    }
    return age;
}

function generateMondayPlan(userData) {
    const { goal, weight, height, activityLevel, age, allergies, condition, gender } = userData;

    // Ejemplo de cálculo de ingesta de agua
    const dailyWaterIntake = (weight * 35) / 1000; // En litros

    // Plan de dieta para un día basado en el objetivo y condiciones
    const dietPlan = {
        desayuno: goal === 'perder peso' ? "Avena con frutas y nueces" : goal === 'ganar músculo' ? "Tortilla de claras con espinacas" : "Yogur con granola",
        almuerzo: goal === 'perder peso' ? "Pollo a la plancha con ensalada verde" : goal === 'ganar músculo' ? "Pechuga de pollo con quinoa" : "Tacos de pollo con verduras",
        cena: goal === 'perder peso' ? "Verduras al vapor con arroz integral" : goal === 'ganar músculo' ? "Salmón a la plancha con verduras asadas" : "Pizza de vegetales",
        snacks: "Frutos secos (almendras, nueces), yogur griego con miel y 1 plátano"
    };

    // Personaliza el plan de dieta según alergias y condiciones
    if (allergies) {
        dietPlan.snacks = dietPlan.snacks.replace("almendras", "frutos secos permitidos");
    }
    if (condition.toLowerCase() === 'diabetes') {
        dietPlan.desayuno = "Yogur griego sin azúcar con fresas";
    }

    // Plan de ejercicios para un día basado en el nivel de actividad y género
    const exercisePlan = {
        cardio: activityLevel === 'sedentario' ? "30 minutos de caminata ligera" : 
                activityLevel === 'moderadamente activo' ? "30 minutos de trote ligero o bicicleta" : 
                activityLevel === 'activo' ? "45 minutos de entrenamiento de fuerza" : 
                "1 hora de entrenamiento de alta intensidad",
        fuerza: gender === 'masculino' ? ["3 sets de 20 sentadillas con peso", "3 sets de 12 flexiones", "3 sets de 25 abdominales"] :
                ["3 sets de 15 sentadillas", "3 sets de 10 flexiones", "3 sets de 20 abdominales"]
    };

    // Plan de hidratación para un día
    const hydrationPlan = {
        mañana: "1 vaso de agua al despertar, 1 vaso de agua antes del desayuno",
        mediodía: "1 vaso de agua antes de almorzar, 1 vaso de agua después de almorzar",
        tarde: "1 vaso de agua a media tarde, 1 vaso de agua antes de la cena",
        noche: "1 vaso de agua antes de dormir",
        totalDiario: `${dailyWaterIntake.toFixed(2)} litros`
    };

    return { dietPlan, exercisePlan, hydrationPlan, age }; // Incluimos la edad en el plan
}
function generateTuesdayPlan(userData) {
    const { goal, weight, height, activityLevel, age, allergies, condition, gender } = userData;

    // Ejemplo de cálculo de ingesta de agua
    const dailyWaterIntake = (weight * 35) / 1000; // En litros

    // Plan de dieta para el martes basado en el objetivo y condiciones
    const dietPlan = {
        desayuno: goal === 'perder peso' ? "Batido de proteínas con espinacas" : goal === 'ganar músculo' ? "Tortilla de huevo entero con aguacate" : "Tostadas integrales con mantequilla de almendra",
        almuerzo: goal === 'perder peso' ? "Ensalada de atún con verduras" : goal === 'ganar músculo' ? "Arroz integral con pollo y brócoli" : "Sushi de verduras",
        cena: goal === 'perder peso' ? "Pescado a la plancha con espárragos" : goal === 'ganar músculo' ? "Carne magra con puré de patatas" : "Ensalada César con pollo",
        snacks: "Palitos de zanahoria con hummus, 1 plátano y yogur natural"
    };

    // Personaliza el plan de dieta según alergias y condiciones
    if (allergies) {
        dietPlan.snacks = dietPlan.snacks.replace("palitos de zanahoria", "snacks permitidos");
    }
    if (condition.toLowerCase() === 'diabetes') {
        dietPlan.desayuno = "Batido de yogur griego sin azúcar con arándanos";
    }

    // Plan de ejercicios para el martes basado en el nivel de actividad y género
    const exercisePlan = {
        cardio: activityLevel === 'sedentario' ? "20 minutos de yoga" : 
                activityLevel === 'moderadamente activo' ? "45 minutos de natación" : 
                activityLevel === 'activo' ? "30 minutos de entrenamiento funcional" : 
                "1 hora de entrenamiento HIIT",
        fuerza: gender === 'masculino' ? ["4 sets de 15 flexiones", "3 sets de 20 sentadillas con peso", "3 sets de 15 peso muerto"] :
                ["3 sets de 12 flexiones", "4 sets de 15 sentadillas", "3 sets de 12 peso muerto"]
    };

    // Plan de hidratación para un día
    const hydrationPlan = {
        mañana: "1 vaso de agua al despertar, 1 vaso de agua antes del desayuno",
        mediodía: "1 vaso de agua antes de almorzar, 1 vaso de agua después de almorzar",
        tarde: "1 vaso de agua a media tarde, 1 vaso de agua antes de la cena",
        noche: "1 vaso de agua antes de dormir",
        totalDiario: `${dailyWaterIntake.toFixed(2)} litros`
    };

    return { dietPlan, exercisePlan, hydrationPlan, age }; // Incluimos la edad en el plan
}
function generateWednesdayPlan(userData) {
    const { goal, weight, height, activityLevel, age, allergies, condition, gender } = userData;

    // Ejemplo de cálculo de ingesta de agua
    const dailyWaterIntake = (weight * 35) / 1000; // En litros

    // Plan de dieta para el miércoles basado en el objetivo y condiciones
    const dietPlan = {
        desayuno: goal === 'perder peso' ? "Smoothie de plátano y espinacas" : goal === 'ganar músculo' ? "Tostadas de aguacate con huevo" : "Porridge de avena con frutas",
        almuerzo: goal === 'perder peso' ? "Pechuga de pollo a la parrilla con brócoli" : goal === 'ganar músculo' ? "Tazón de quinoa con salmón" : "Fajitas de pollo con pimientos",
        cena: goal === 'perder peso' ? "Sopa de verduras" : goal === 'ganar músculo' ? "Carne magra con verduras asadas" : "Pizza integral de pollo y verduras",
        snacks: "Yogur griego con miel, 1 manzana y frutos secos"
    };

    // Personaliza el plan de dieta según alergias y condiciones
    if (allergies) {
        dietPlan.snacks = dietPlan.snacks.replace("frutos secos", "snacks permitidos");
    }
    if (condition.toLowerCase() === 'diabetes') {
        dietPlan.desayuno = "Batido de yogur griego sin azúcar con frambuesas";
    }

    // Plan de ejercicios para el miércoles basado en el nivel de actividad y género
    const exercisePlan = {
        cardio: activityLevel === 'sedentario' ? "15 minutos de caminata suave" : 
                activityLevel === 'moderadamente activo' ? "40 minutos de ciclismo" : 
                activityLevel === 'activo' ? "30 minutos de HIIT" : 
                "1 hora de carrera",
        fuerza: gender === 'masculino' ? ["3 sets de 10 flexiones de brazos", "3 sets de 20 levantamientos de peso", "3 sets de 15 abdominales en plancha"] :
                ["3 sets de 12 flexiones de brazos", "3 sets de 15 levantamientos de peso", "3 sets de 12 abdominales en plancha"]
    };

    // Plan de hidratación para un día
    const hydrationPlan = {
        mañana: "1 vaso de agua al despertar, 1 vaso de agua antes del desayuno",
        mediodía: "1 vaso de agua antes de almorzar, 1 vaso de agua después de almorzar",
        tarde: "1 vaso de agua a media tarde, 1 vaso de agua antes de la cena",
        noche: "1 vaso de agua antes de dormir",
        totalDiario: `${dailyWaterIntake.toFixed(2)} litros`
    };

    return { dietPlan, exercisePlan, hydrationPlan, age }; // Incluimos la edad en el plan
}
function generateThursdayPlan(userData) {
    const { goal, weight, height, activityLevel, age, allergies, condition, gender } = userData;

    // Ejemplo de cálculo de ingesta de agua
    const dailyWaterIntake = (weight * 35) / 1000; // En litros

    // Plan de dieta para el jueves basado en el objetivo y condiciones
    const dietPlan = {
        desayuno: goal === 'perder peso' ? "Tostadas integrales con aguacate y tomate" : goal === 'ganar músculo' ? "Batido de proteínas con plátano" : "Yogur con granola y fresas",
        almuerzo: goal === 'perder peso' ? "Ensalada de atún con espinacas" : goal === 'ganar músculo' ? "Arroz integral con pollo y verduras" : "Sopa de lentejas con pan integral",
        cena: goal === 'perder peso' ? "Pescado al horno con verduras" : goal === 'ganar músculo' ? "Tacos de carne magra" : "Pasta integral con salsa de tomate y vegetales",
        snacks: "Barra de proteínas y un puñado de frutos secos"
    };

    // Personaliza el plan de dieta según alergias y condiciones
    if (allergies) {
        dietPlan.snacks = dietPlan.snacks.replace("frutos secos", "snacks permitidos");
    }
    if (condition.toLowerCase() === 'hipertensión') {
        dietPlan.almuerzo = "Pechuga de pollo al vapor con brócoli";
    }

    // Plan de ejercicios para el jueves basado en el nivel de actividad y género
    const exercisePlan = {
        cardio: activityLevel === 'sedentario' ? "20 minutos de caminata suave" : 
                activityLevel === 'moderadamente activo' ? "30 minutos de natación" : 
                activityLevel === 'activo' ? "40 minutos de spinning" : 
                "1 hora de entrenamiento de circuito",
        fuerza: gender === 'masculino' ? ["3 sets de 12 flexiones", "3 sets de 15 levantamientos de peso", "3 sets de 20 abdominales"] :
                ["3 sets de 10 flexiones", "3 sets de 12 levantamientos de peso", "3 sets de 15 abdominales"]
    };

    // Plan de hidratación para un día
    const hydrationPlan = {
        mañana: "1 vaso de agua al despertar, 1 vaso de agua antes del desayuno",
        mediodía: "1 vaso de agua antes de almorzar, 1 vaso de agua después de almorzar",
        tarde: "1 vaso de agua a media tarde, 1 vaso de agua antes de la cena",
        noche: "1 vaso de agua antes de dormir",
        totalDiario: `${dailyWaterIntake.toFixed(2)} litros`
    };

    return { dietPlan, exercisePlan, hydrationPlan, age }; // Incluimos la edad en el plan
}
function generateFridayPlan(userData) {
    const { goal, weight, height, activityLevel, age, allergies, condition, gender } = userData;

    // Ejemplo de cálculo de ingesta de agua
    const dailyWaterIntake = (weight * 35) / 1000; // En litros

    // Plan de dieta para el viernes basado en el objetivo y condiciones
    const dietPlan = {
        desayuno: goal === 'perder peso' ? "Batido verde de espinacas y plátano" : goal === 'ganar músculo' ? "Huevos revueltos con verduras" : "Porridge de avena con miel",
        almuerzo: goal === 'perder peso' ? "Ensalada de quinoa con vegetales" : goal === 'ganar músculo' ? "Pasta integral con pollo" : "Sushi variado",
        cena: goal === 'perder peso' ? "Sopa de verduras" : goal === 'ganar músculo' ? "Filete de ternera a la plancha" : "Tortilla española con ensalada",
        snacks: "Yogur natural con fruta"
    };

    // Personaliza el plan de dieta según alergias y condiciones
    if (allergies) {
        dietPlan.snacks = dietPlan.snacks.replace("fruta", "fruta permitida");
    }
    if (condition.toLowerCase() === 'colesterol alto') {
        dietPlan.desayuno = "Avena cocida con arándanos";
    }

    // Plan de ejercicios para el viernes basado en el nivel de actividad y género
    const exercisePlan = {
        cardio: activityLevel === 'sedentario' ? "15 minutos de caminata suave" : 
                activityLevel === 'moderadamente activo' ? "30 minutos de ciclismo" : 
                activityLevel === 'activo' ? "45 minutos de clases de baile" : 
                "1 hora de entrenamiento funcional",
        fuerza: gender === 'masculino' ? ["3 sets de 15 sentadillas", "3 sets de 12 flexiones", "3 sets de 15 levantamientos de peso"] :
                ["3 sets de 12 sentadillas", "3 sets de 10 flexiones", "3 sets de 12 levantamientos de peso"]
    };

    // Plan de hidratación para un día
    const hydrationPlan = {
        mañana: "1 vaso de agua al despertar, 1 vaso de agua antes del desayuno",
        mediodía: "1 vaso de agua antes de almorzar, 1 vaso de agua después de almorzar",
        tarde: "1 vaso de agua a media tarde, 1 vaso de agua antes de la cena",
        noche: "1 vaso de agua antes de dormir",
        totalDiario: `${dailyWaterIntake.toFixed(2)} litros`
    };

    return { dietPlan, exercisePlan, hydrationPlan, age }; // Incluimos la edad en el plan
}
function generateSaturdayPlan(userData) {
    const { goal, weight, height, activityLevel, age, allergies, condition, gender } = userData;

    // Ejemplo de cálculo de ingesta de agua
    const dailyWaterIntake = (weight * 35) / 1000; // En litros

    // Plan de dieta para el sábado basado en el objetivo y condiciones
    const dietPlan = {
        desayuno: goal === 'perder peso' ? "Tostadas integrales con aguacate" : goal === 'ganar músculo' ? "Smoothie de proteínas" : "Panqueques de avena con frutas",
        almuerzo: goal === 'perder peso' ? "Salmón al horno con espárragos" : goal === 'ganar músculo' ? "Arroz integral con ternera" : "Pizza de verduras casera",
        cena: goal === 'perder peso' ? "Ensalada de garbanzos" : goal === 'ganar músculo' ? "Pechuga de pavo con batatas" : "Fajitas de pollo",
        snacks: "Barritas de cereal"
    };

    // Personaliza el plan de dieta según alergias y condiciones
    if (allergies) {
        dietPlan.snacks = dietPlan.snacks.replace("Barritas de cereal", "Barritas permitidas");
    }
    if (condition.toLowerCase() === 'hipertensión') {
        dietPlan.desayuno = "Avena con frutas y canela";
    }

    // Plan de ejercicios para el sábado basado en el nivel de actividad y género
    const exercisePlan = {
        cardio: activityLevel === 'sedentario' ? "20 minutos de yoga" : 
                activityLevel === 'moderadamente activo' ? "40 minutos de natación" : 
                activityLevel === 'activo' ? "1 hora de senderismo" : 
                "45 minutos de entrenamiento funcional",
        fuerza: gender === 'masculino' ? ["3 sets de 15 press de banca", "3 sets de 20 levantamientos de peso", "3 sets de 12 dominadas"] :
                ["3 sets de 12 press de banca", "3 sets de 15 levantamientos de peso", "3 sets de 10 dominadas"]
    };

    // Plan de hidratación para un día
    const hydrationPlan = {
        mañana: "1 vaso de agua al despertar, 1 vaso de agua antes del desayuno",
        mediodía: "1 vaso de agua antes de almorzar, 1 vaso de agua después de almorzar",
        tarde: "1 vaso de agua a media tarde, 1 vaso de agua antes de la cena",
        noche: "1 vaso de agua antes de dormir",
        totalDiario: `${dailyWaterIntake.toFixed(2)} litros`
    };

    return { dietPlan, exercisePlan, hydrationPlan, age }; // Incluimos la edad en el plan
}
function generateSundayPlan(userData) {
    const { goal, weight, height, activityLevel, age, allergies, condition, gender } = userData;

    // Ejemplo de cálculo de ingesta de agua
    const dailyWaterIntake = (weight * 35) / 1000; // En litros

    // Plan de dieta para el domingo basado en el objetivo y condiciones
    const dietPlan = {
        desayuno: goal === 'perder peso' ? "Smoothie verde con espinacas" : goal === 'ganar músculo' ? "Tortilla de huevo con champiñones" : "Crepas de avena con frutas",
        almuerzo: goal === 'perder peso' ? "Ensalada de atún con garbanzos" : goal === 'ganar músculo' ? "Pasta integral con pollo" : "Bowl de quinoa con verduras asadas",
        cena: goal === 'perder peso' ? "Sopa de verduras" : goal === 'ganar músculo' ? "Filete de res a la parrilla con puré de patatas" : "Tacos de pescado",
        snacks: "Yogur griego con frutas"
    };

    // Personaliza el plan de dieta según alergias y condiciones
    if (allergies) {
        dietPlan.snacks = dietPlan.snacks.replace("Yogur griego con frutas", "Yogur permitido con frutas");
    }
    if (condition.toLowerCase() === 'colesterol alto') {
        dietPlan.desayuno = "Avena cocida con leche de almendra y frutas";
    }

    // Plan de ejercicios para el domingo basado en el nivel de actividad y género
    const exercisePlan = {
        cardio: activityLevel === 'sedentario' ? "15 minutos de estiramientos" : 
                activityLevel === 'moderadamente activo' ? "30 minutos de ciclismo" : 
                activityLevel === 'activo' ? "1 hora de clases de baile" : 
                "1 hora de entrenamiento de resistencia",
        fuerza: gender === 'masculino' ? ["3 sets de 12 dominadas", "3 sets de 15 press militar", "3 sets de 20 abdominales"] :
                ["3 sets de 10 dominadas", "3 sets de 12 press militar", "3 sets de 15 abdominales"]
    };

    // Plan de hidratación para un día
    const hydrationPlan = {
        mañana: "1 vaso de agua al despertar, 1 vaso de agua antes del desayuno",
        mediodía: "1 vaso de agua antes de almorzar, 1 vaso de agua después de almorzar",
        tarde: "1 vaso de agua a media tarde, 1 vaso de agua antes de la cena",
        noche: "1 vaso de agua antes de dormir",
        totalDiario: `${dailyWaterIntake.toFixed(2)} litros`
    };

    return { dietPlan, exercisePlan, hydrationPlan, age }; // Incluimos la edad en el plan
}




function submitForm() {
    const userData = {
        name: document.getElementById('name').value,
        birthdate: document.getElementById('birthdate').value,
        goal: document.querySelector('.goal-btn.selected')?.textContent || '',
        gender: document.querySelector('.gender-btn.selected')?.textContent || '',
        allergies: document.getElementById('allergies').value,
        condition: document.getElementById('condition').value,
        weight: document.getElementById('weight').value,
        height: document.getElementById('height').value,
        activityLevel: document.querySelector('.activity-btn.selected')?.textContent || '',
    };

    // Genera el plan personalizado basado en los datos del usuario
    const dayOfWeek = new Date().getDay();
    let dailyPlan;

    switch (dayOfWeek) {
        case 0:
            dailyPlan = generateSundayPlan(userData);
            break;
        case 1:
            dailyPlan = generateMondayPlan(userData);
            break;
        case 2:
            dailyPlan = generateTuesdayPlan(userData);
            break;
        case 3:
            dailyPlan = generateWednesdayPlan(userData);
            break;
        case 4:
            dailyPlan = generateThursdayPlan(userData);
            break;
        case 5:
            dailyPlan = generateFridayPlan(userData);
            break;
        case 6:
            dailyPlan = generateSaturdayPlan(userData);
            break;
    }

    // Guarda el plan personalizado en el localStorage
    localStorage.setItem('personalPlan', JSON.stringify(dailyPlan));

    // Redirige a la página planPersonalizado.html
    window.location.href = 'planPersonalizado.html';
}

