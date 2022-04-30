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