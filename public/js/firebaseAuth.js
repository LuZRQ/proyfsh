// Importar las funciones necesarias
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.14.1/firebase-app.js";
import { getAuth, GoogleAuthProvider, signInWithPopup } from "https://www.gstatic.com/firebasejs/10.14.1/firebase-auth.js";

// Configuración de Firebase
const firebaseConfig = {
    apiKey: "AIzaSyBZAfruTJjD7brAgadpp-K0526-QEE-kmw",
    authDomain: "sweethomeproy24.firebaseapp.com",
    projectId: "sweethomeproy24",
    storageBucket: "sweethomeproy24.appspot.com",
    messagingSenderId: "574365036726",
    appId: "1:574365036726:web:2b054364fe70f0b4d17617",
    measurementId: "G-SS7HQDBL2E"
};

// Inicializar Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
const provider = new GoogleAuthProvider();

// Función para iniciar sesión con Google
async function signInWithGoogle() {
    try {
        const result = await signInWithPopup(auth, provider); // Usa la función importada
        console.log('Usuario autenticado:', result.user);
        const user = result.user;
        document.getElementById('name').value = user.displayName; // Usa el nombre de Google
        nextStep(9); // Ir al último paso después de iniciar sesión con éxito

        // Mostrar mensaje de confirmación
        const messageElement = document.getElementById('registration-message');
        messageElement.style.display = 'block'; // Asegúrate de que esto esté aquí
        messageElement.textContent = '~Te has registrado exitosamente.'; // Establecer el texto
        alert('~Te has registrado exitosamente.~'); // Mostrar alerta de confirmación
    } catch (error) {
        console.error('Error al autenticar con Google:', error);
    }
}


// Verificar el estado de autenticación al cargar la página
auth.onAuthStateChanged((user) => {
    if (user) {
        console.log('Usuario ya autenticado:', user);
        // Aquí puedes redirigir o mostrar un mensaje
        document.getElementById('registration-message').style.display = 'block';
        document.getElementById('registration-message').textContent = 'Ya estás registrado como ' + user.displayName;
    } else {
        console.log('No hay usuario autenticado');
    }
});

// Asegúrate de que el botón de inicio de sesión se haya cargado antes de añadir el evento
document.addEventListener('DOMContentLoaded', () => {
    const googleLoginButton = document.getElementById('google-login');
    if (googleLoginButton) {
        googleLoginButton.addEventListener('click', signInWithGoogle);
    } else {
        console.error('Botón de inicio de sesión no encontrado');
    }
});
console.log('Mostrando mensaje de registro');
messageElement.style.display = 'block';

