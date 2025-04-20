document.getElementById('commentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    let name = document.getElementById('name').value;
    let comment = document.getElementById('comment').value;
    
    if (name && comment) {
        let newComment = { name: name, comment: comment, date: new Date().toLocaleString() };
        
        // Obtener comentarios almacenados y añadir el nuevo
        let comments = JSON.parse(localStorage.getItem('comments')) || [];
        comments.push(newComment);
        localStorage.setItem('comments', JSON.stringify(comments));
        
        // Limpiar el formulario
        document.getElementById('name').value = '';
        document.getElementById('comment').value = '';
        
        // Mostrar los comentarios actualizados
        displayComments();
    }
});

function displayComments() {
    let comments = JSON.parse(localStorage.getItem('comments')) || [];
    let commentList = document.getElementById('commentList');
    
    // Limpiar lista de comentarios
    commentList.innerHTML = '';
    
    // Mostrar los 3 comentarios más recientes
    comments.slice(-3).reverse().forEach(function(comment) {
        let li = document.createElement('li');
        li.innerHTML = `<strong>${comment.name}</strong> (${comment.date}):<br> ${comment.comment}`;
        commentList.appendChild(li);
    });
}

// Mostrar comentarios al cargar la página
window.onload = displayComments;
