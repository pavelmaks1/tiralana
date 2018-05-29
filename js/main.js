const isGreaterThanFour = (input) => {
    if (input.value.length >= 4) {
        input.classList.remove('empty');
        input.classList.add('correct');
    } else {
        input.classList.add('empty');
    }

};

const isValidEmail = (input) => {
    if (/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test(input.value)) {
        input.classList.remove('empty');
        input.classList.add('correct');
    } else {
        input.classList.add('empty');

    }
}

const isValidCity = (input) => {
    if (/\d + ([^,] +), ([A - Z]{ 2 }) (\d{ 5 })/.test(input.value)) {
        input.classList.remove('empty');
        input.classList.add('correct');
    } else {
        input.classList.add('empty');

    }
}

const isValidTelephoneNumber = (input) => {
    if (/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/.test(input.value)) {
        input.classList.remove('empty');
        input.classList.add('correct');
    } else {
        input.classList.add('empty');
    }
}

const isValidDomainName = (input) => {
    if (/[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/.test(input.value)) {
        input.classList.remove('empty');
        input.classList.add('correct');
    } else {
        input.classList.add('empty');
    }
}

const isNumber = (input) => {
    if (/^\d+$/.test(input.value)) {
        input.classList.remove('empty');
        input.classList.add('correct');
    } else {
        input.classList.add('empty');
    }
}


const checkCheckboxes = () => {
    $('.checkbox-list').each(function () {
        if ($(this).children('.container-checkbox').children('.checked').length > 0) {
            $(this).parent().removeClass('checkbox-group-empty');
            $(this).parent().addClass('checkbox-group-correct');
        } else {
            $(this).parent().addClass('checkbox-group-empty');
            $(this).parent().removeClass('checkbox-group-correct');

        }

    })
}


$(function () {
    checkCheckboxes();

    $('.iCheck-helper').click(function () {
        checkCheckboxes();

    })
})


//////// For Index.html landing page form

const isValidText = (input) => {

    if (input.value.length >= 4 && input.value !== 'Value of this field should be valid') {
        input.classList.remove('input-error');
        input.classList.add('input-correct');
        return true;
    } else {
        input.classList.remove('input-correct');
        input.classList.add('input-error');
        input.value = 'Value of this field should be valid';
        return false;
    }
}

const cleanInput = (input) => {
    if (input.value === 'Value of this field should be valid') {
        input.value = '';
    }
}


const onSubmit = (event) => {
    event.preventDefault();
    isValidText(document.getElementsByClassName('input')[0]);
    isValidText(document.getElementsByClassName('input')[1]);
    isValidText(document.getElementsByClassName('input')[2]);
    isValidText(document.getElementsByClassName('input')[3]);
    isValidText(document.getElementsByClassName('input')[4]);

    if (isValidText(document.getElementsByClassName('input')[0]) &&
        isValidText(document.getElementsByClassName('input')[1]) &&
        isValidText(document.getElementsByClassName('input')[2]) &&
        isValidText(document.getElementsByClassName('input')[3]) &&
        isValidText(document.getElementsByClassName('input')[4])) {
        document.getElementsByClassName('text-error')[0].classList.add('display');
        document.getElementsByClassName('form-thanks')[0].classList.toggle('display');
    } else {
        document.getElementsByClassName('text-error')[0].classList.remove('display');
    }
}