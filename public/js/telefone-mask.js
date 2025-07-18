document.addEventListener('DOMContentLoaded', function () {
    const telefoneInput = document.getElementById('telefone');

    if (telefoneInput) {
        telefoneInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, ''); // Remove não-dígitos

            if (value.length > 11) {
                value = value.slice(0, 11); // Limita a 11 dígitos
            }

            value = value
                .replace(/^(\d{2})(\d)/g, '($1) $2')
                .replace(/(\d{5})(\d)/, '$1-$2');

            e.target.value = value;
        });
    }
});
