let persona = {
    nombre: "",
    apellido1: "",
    apellido2: "",
    dni: "",
    fechaNacimiento: new Date(),


    getNombre: function() {
        return this.nombre;
    },
    setNombre: function(value) {
        this.nombre = value;
    },
    getapellido1: function() {
        return this.apellido1;
    },
    setApellido1: function(value) {
        this.apellido1 = value;
    },
    getApellido2: function() {
        return this.apellido2;
    },
    setApellido2: function(value) {
        this.apellido2 = value;
    },
    getDni: function() {
        return this.dni;
    },
    setDni: function(value) {
        this.dni = value;
    },
    getFechaNacimiento: function() {
        return this.fechaNacimiento;
    },
    setFechaNacimiento: function(value) {
        this.fechaNacimiento = value;
    },


    calcularLetra: function() {

        let letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
        let letra = letras[this.dni % 23];
        return letra;
    },
    saludar: function() {
        let saludo = "";
        if (this.nombre != undefined && this.nombre != "") {
            saludo = "mi nombre es " + this.nombre;
        }
        if (this.apellido1 != undefined && this.apellido1 != "") {
            saludo += " " + this.apellido1;
        }
        if (this.apellido2 != undefined && this.apellido1 != "") {
            saludo += " " + this.apellido2;
        }
        if (this.dni != undefined && this.dni != "") {
            saludo += " con DNI :" + this.dni + this.calcularLetra();
        }

        if (this.calcularEdad != NaN) {
            saludo += this.calcularEdad();
        }
        return saludo;
    },
    calcularEdad() {
        let hoy = new Date();
        console.log(hoy.getFullYear());
        let aux = new Date();
        aux.setFullYear(this.fechaNacimiento.getFullYear());
        console.log(aux);
        if (aux > this.fechaNacimiento) {
            return "Tienes una edad de :" + hoy.getFullYear() - this.fechaNacimiento.getFullYear();
        } else if (aux < this.getfechaNacimiento) {
            return "Tienes una edad de :" + ((hoy.getFullYear() - this.fechaNacimiento.getFullYear()) + 1);
        } else {
            return "Feliz cumpleaños hoy cumples :" + ((hoy.getFullYear() - this.fechaNacimiento.getFullYear()) + 1);
        }

    },
}