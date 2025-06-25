document.getElementById('number').addEventListener('input', function (event) {
    let value = event.target.value;
    let formattedValue = '';

    for (let i = 0; i < value.length; i++) {
        if (i >= 9) {
            break;
        }
        if (i > 0 && i <= 9) {
            formattedValue += value[i];
        }
    }
});