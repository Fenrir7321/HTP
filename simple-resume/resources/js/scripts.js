function formatPhoneNumber(input) {
    let value = input.value.replace(/\D/g, '');

    let formattedNumber = '';
    if (value.length >= 1) {
        formattedNumber += '+' + value.slice(0, 1);
    }
    if (value.length >= 2) {
        formattedNumber += '(' + value.slice(1, 4) + ')';
    }
    if (value.length >= 5) {
        formattedNumber += value.slice(4, 7) + '-';
    }
    if (value.length >= 8) {
        formattedNumber += value.slice(7, 9) + '-';
    }
    if (value.length >= 10) {
        formattedNumber += value.slice(9, 11);
    }

    input.value = formattedNumber;
}