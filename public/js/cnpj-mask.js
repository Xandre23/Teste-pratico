document.addEventListener('DOMContentLoaded', function () {
    const cnpjInput = document.getElementById('cnpj');

    if (cnpjInput) {
        cnpjInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, ''); // Remove não dígitos

            value = value
                .replace(/^(\d{2})(\d)/, '$1.$2')
                .replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3')
                .replace(/\.(\d{3})(\d)/, '.$1/$2')
                .replace(/(\d{4})(\d)/, '$1-$2')
                .replace(/(-\d{2})\d+?$/, '$1'); // Limita a 14 dígitos formatados

            e.target.value = value;
        });
    }
});
