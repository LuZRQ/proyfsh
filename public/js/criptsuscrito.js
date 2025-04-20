// Maneja el evento de envío del formulario
        document.getElementById('newsletter-form').addEventListener('submit', (e) => {
            e.preventDefault(); // Previene el envío del formulario
            const email = document.getElementById('email').value;

            // Aquí puedes guardar el correo en Firestore
            // Asegúrate de que el usuario esté autenticado antes de guardar
            const user = auth.currentUser;
            if (user) {
                // Guardar el correo en Firestore
                db.collection('newsletters').add({
                    email: email,
                    userId: user.uid
                })
                .then(() => {
                    alert('Te has suscrito al newsletter!');
                    // Limpia el formulario
                    document.getElementById('newsletter-form').reset();
                })
                .catch((error) => {
                    console.error("Error al guardar el correo:", error);
                });
            } else {
                alert('Por favor, inicie sesión con Google primero.');
            }
        });

        // Lógica de autenticación con Google
        document.getElementById('google-login-newsletter').addEventListener('click', () => {
            const provider = new firebase.auth.GoogleAuthProvider();
            auth.signInWithPopup(provider)
                .then((result) => {
                    const user = result.user;
                    console.log('Usuario autenticado con Google:', user);
                    // Rellena el campo de correo electrónico con el correo del usuario de Google
                    document.getElementById('email').value = user.email;
                })
                .catch((error) => {
                    console.error('Error al autenticar con Google:', error);
                });
        });