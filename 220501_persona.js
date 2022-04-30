/*
    Vale esto en si no es una clase, es un objeto no se si es lo que estabas buscando, digo por la sintaxis.
    En cualquier caso la declaración es buena y deberia funcionar todo.

    Si quisieras hacerlo con una clase sería algo asi

    class persona{
        constructor(arg1,arg2,...){
            this.nombre = arg1... etc
        }

        y los metodos como tienes
    }
*/

let persona = {
    nombre: "cesar",
    apellido1: "Bouzas",
    apellido2: "Soto",
    DNI: "34896415x",
    cambiarNombre: function(nom) {
        this.nombre = nom;
        return this.saludar();
    },
    saludar: function() {
        return "hola mi nombre es " + this.nombre;
    },
}