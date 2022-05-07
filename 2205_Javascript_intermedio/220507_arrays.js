let b = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//let b = new Array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
//let c = a.slice();


function sumarElementosArra(a) {
    let resultado = 0;
    for (let i = 0; i < a.lenght; i++) {
        resultado = resultado + a[i];
    }
    return resultado;
}

function imprimirParesArra(a) {
    for (let i = 0; i < a.lenght; i++) {
        if (a[i] % 2 == 0) {
            console.log(a[i]);
        }
    }
}

function imprimirArra(a) {
    for (let i = 0; i < a.length; i++) {
        console.log(a[i]);
    }

}

imprimirArra(b);
imprimirParesArra(b);
console.log(sumarElementosArra(b));