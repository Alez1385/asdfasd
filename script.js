function validateForm() {
    const form = document.getElementById('contactForm');
    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const phone = form.phone.value.trim();
    const dob = form.dob.value;
    const role = form.role.value;
    const message = form.message.value.trim();
    const gender = form.querySelector('input[name="gender"]:checked');

    if (name === '' || email === '' || phone === '' || dob === '' || role === '' || message === '' || !gender) {
        alert('Todos los campos son obligatorios.');
        return false;
    }

    const phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        alert('El número de teléfono debe tener 10 dígitos.');
        return false;
    }

    return true;
}
