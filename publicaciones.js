fetch("http://appsocial.test/api/publicaciones/read")
.then(respuesta => respuesta.json())
.then(mostrar_publicaciones);

function mostrar_publicaciones(respuesta){
    let publicaciones = document.querySelector("#publicaciones");
    for(let i=0; i<respuesta.length; i++){
        let publicacion = `
            <div class="publicacion_user"><img src="https://picsum.photos/40/40" alt=""> nombre de usuario</div>
            <div>
                <a href="api/publicaciones/delete?id=${respuesta[i].id}">eliminar</a> 
                <button type="button" class="btneditar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18.311 2.828l2.861 2.861-15.033 15.032-2.859-2.862 15.031-15.031zm0-2.828l-16.873 16.872-1.438 7.127 7.127-1.437 16.873-16.873-5.689-5.689z"/></svg> </button>
            </div>
            <div class="publicacion_contenido">${respuesta[i].contenido}</div>
            <form class="container my-3 d-none formeditar" action="api/publicaciones/update?id=${respuesta[i].id}" method="post" >
                <div><textarea class="form-control" name="contenido">${respuesta[i].contenido}</textarea></div>
                <div><button class="btn btn-primary">publicar</button></div>
            </form>
        `;
        let contenedor = document.createElement("div");
        contenedor.innerHTML = publicacion;

        publicaciones.appendChild(contenedor);

        let btneditar = contenedor.querySelector(".btneditar");
        let formeditar = contenedor.querySelector(".formeditar");

        btneditar.addEventListener("click", function(){
            formeditar.classList.toggle("d-none");
        })
    }
}