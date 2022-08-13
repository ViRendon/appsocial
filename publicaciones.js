fetch("https://jsonplaceholder.typicode.com/posts")
.then(respuesta => respuesta.json())
.then(mostrar_publicaciones);

function mostrar_publicaciones(respuesta){
    let publicaciones = document.querySelector("#publicaciones");
    for(let i=0; i<respuesta.length; i++){
        let publicacion = `<div class="publicacion_user"><img src="https://picsum.photos/40/40" alt=""> nombre de usuario</div>
        <div class="publicacion_contenido">${respuesta[i].body}</div>`;
        let contenedor = document.createElement("div");
        contenedor.innerHTML = publicacion;

        publicaciones.appendChild(contenedor);
    }
}