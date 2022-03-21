//dom eventos

document
.getElementById("producto-formulario")
.addEventListener("submit",function(elemento){
    elemento.preventDefault();
    const nombre = document.getElementById("name").value,
    precio = document.getElementById("precio").value,
    año = document.getElementById("año").value;

    const producto = new Producto(nombre, precio, año);
    const usuario = new Usuario();

    if(nombre==="" || precio==="" || año ===""){
        usuario.showMessage("Por favor insertar nombre de usuario");
    }

    usuario.addProducto(producto);
    usuario.showMessage("Producto agregado correctamente");
    usuario.restetFrom();

}
);

document.getElementById("lista-producto").addEventListener("click", (elemento) => {
    const usuario= new Usuario();
    usuario.deleteproduct(elemento.target);
    elemento.preventDefault();

});

export class Producto{
    constructor(nombre,precio, año){
        this.nombre = nombre;
        this.precio = precio;
        this.año =  año;
    }
}

