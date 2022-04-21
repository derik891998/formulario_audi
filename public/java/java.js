var inputs = document.getElementsByClassName('formulario__input');
for(var i=0; i < inputs.length; i++) {
    inputs[i].addEventListener('blur', function(){
        if(this.value.length<=2) {
            this.classList.add('error-color');
            document.getElementById('btn').classList.add('deshabilitar');
        }
        else {
            this.classList.remove('error-color');
        }
    });
}

var inputs = document.getElementsByClassName('formulario__documento');
for(var i=0; i < inputs.length; i++) {
    inputs[i].addEventListener('keyup', function(){
        if(this.value.length>=1) {
            this.nextElementSibling.classList.add('borrar');
        }
        else {
            this.nextElementSibling.classList.remove('borrar');
        }
    });
}

const formulario = document.getElementById('formulario');
const capture = document.querySelectorAll('#formulario input');

const expresiones = {
    nombres: /^.{0,2}$/,
    apellidos: /^.{0,2}$/,
    documento: /^\d{8,8}$/,
    celular: /^\d{9,9}$/,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z-.]+$/
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "nombres":
        if(expresiones.nombres.test(e.target.value)) {
            document.getElementById('nombre__label').classList.add('error-color');
            document.getElementById('nombre__color').classList.add('error-activo', 'span-fijar');
            document.getElementById('nombre__input').classList.add('error-color');
            document.getElementById('btn').classList.add('deshabilitar');
        }
        else{
            document.getElementById('nombre__label').classList.remove('error-color');
            document.getElementById('nombre__color').classList.remove('error-activo','span-fijar');
            document.getElementById('nombre__input').classList.remove('error-color');
            document.getElementById('btn').classList.remove('deshabilitar');
        }
        break;

        case "apellidos":
        if(expresiones.apellidos.test(e.target.value)) {
            document.getElementById('apellido__label').classList.add('error-color');
            document.getElementById('apellido__color').classList.add('error-activo','span-fijar');
            document.getElementById('apellido__input').classList.add('error-color');
            document.getElementById('btn').classList.add('deshabilitar');
        }
        else{
            document.getElementById('apellido__label').classList.remove('error-color');
            document.getElementById('apellido__color').classList.remove('error-activo','span-fijar');
            document.getElementById('apellido__input').classList.remove('error-color');
            document.getElementById('btn').classList.remove('deshabilitar');
        }
        break;

        case "documento"://Este está al revés
        if(expresiones.documento.test(e.target.value)) {
            document.getElementById('documento__label').classList.remove('error-color');
            document.getElementById('documento__color').classList.remove('doc_error-activo');
            document.getElementById('documento__input').classList.remove('error-color');
        }
        else{
            document.getElementById('documento__label').classList.add('error-color');
            document.getElementById('documento__color').classList.add('doc_error-activo','doc_span-fijar');
            document.getElementById('documento__input').classList.add('error-color');
            document.getElementById('btn').classList.add('deshabilitar');

        }
        break;

        case "celular": //Este está al revés
        if(expresiones.celular.test(e.target.value)) {
            document.getElementById('celular__label').classList.remove('error-color');
            document.getElementById('celular__color').classList.remove('error-activo','span-fijar');
            document.getElementById('celular__input').classList.remove('error-color');
        }
        else{
            document.getElementById('celular__label').classList.add('error-color');
            document.getElementById('celular__color').classList.add('error-activo','span-fijar');
            document.getElementById('celular__input').classList.add('error-color');
            document.getElementById('btn').classList.add('deshabilitar');

        }
        break;

        case "email": //Este está al revés
        if(expresiones.email.test(e.target.value)) {
            document.getElementById('email__label').classList.remove('error-color');
            document.getElementById('email__color').classList.remove('error-activo','span-fijar');
            document.getElementById('email__input').classList.remove('error-color');
            document.getElementById('btn').classList.remove('deshabilitar');
        }
        else {
            document.getElementById('email__label').classList.add('error-color');
            document.getElementById('email__color').classList.add('error-activo','span-fijar');
            document.getElementById('email__input').classList.add('error-color');
            document.getElementById('btn').classList.add('deshabilitar');
        }
        break;
    }
}

capture.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {e.preventDefault();
})
