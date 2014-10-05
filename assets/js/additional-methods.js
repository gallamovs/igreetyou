$.validator.addMethod("specialChars", function( value, element ) {
    var regex = new RegExp("^[a-zA-Z0-9]+$");
    var key = value;

    if (!regex.test(key)) {
        return false;
    }
    return true;
}, "Please use only alphanumeric or alphabetic characters");