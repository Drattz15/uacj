function validarFormulario() {
    const nombre = document.getElementById('nombre').value.trim();
    const email = document.getElementById('email').value.trim();
    const contrasena = document.getElementById('contrasena').value.trim();
    const telefono = document.getElementById('telefono').value.trim();

    // Validar nombre (solo letras y espacios)
    const nombreRegex = /^[a-zA-Z\s]+$/;
    if (!nombreRegex.test(nombre)) {
        alert("El nombre solo puede contener letras y espacios.");
        return false;
    }

    // Validar email con una expresión regular
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Por favor, introduce un correo electrónico válido.");
        return false;
    }

    // Validar contraseña (mínimo 8 caracteres)
    if (contrasena.length < 8) {
        alert("La contraseña debe tener al menos 8 caracteres.");
        return false;
    }

    // Validar teléfono (solo 9 dígitos)
    const telefonoRegex = /^[0-9]{9}$/;
    if (!telefonoRegex.test(telefono)) {
        alert("El teléfono debe contener 9 dígitos numéricos.");
        return false;
    }

    return true;
}
