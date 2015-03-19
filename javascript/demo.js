function initialize() {
    bindEvents();
    
    initFormValidator();
    
    $('.input-daterange').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });
}

function bindEvents() {
    $("#submitQuote").click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        var isValid = $("#submitQuoteForm").valid();
        
        if(isValid) {
            document.forms['submitQuoteForm'].submit();
        }
    });
}

function initFormValidator() {
    registerEmailValidationMethod();

    $('#submitQuoteForm').validate(
            {
                rules: {
                    client_firstname: {
                        minlength: 2,
                        maxlength: 50,
                        required: true
                    },
                    client_surname: {
                        minlength: 6,
                        maxlength: 30,
                        required: true
                    },                
                    client_address_line1: {
                        minlength: 2,
                        maxlength: 100,
                        required: true
                    },                
                    client_address_line2: {
                        minlength: 2,
                        maxlength: 100,
                        required: true
                    },                
                    client_address_town: {
                        minlength: 2,
                        maxlength: 100,
                        required: true
                    },                
                    client_address_county: {
                        minlength: 2,
                        maxlength: 100,
                        required: true
                    },
                    client_email: {
                        minlength: 6,
                        maxlength: 30,
                        required: true,
                        email: true
                    }      
                },
                messages: {
                    client_firstname: "Please enter a valid first name. ",
                    client_surname: "Please enter a valid surname. ",
                    client_address_line1: "Please enter a valid first line of address. ",
                    client_address_line2: "Please enter a valid second line of address. ",
                    client_address_town: "Please enter a valid town. ",
                    client_address_county: "Please enter a valid county. ",
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).parent().addClass("edgy_error");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parent().removeClass ("edgy_error");
                },
                errorPlacement: function(error, element) {
                    debugger;
                    error.appendTo($(element).parent());
                }
            });
}

function registerEmailValidationMethod() {
    $.validator.addMethod('email', function(value) {
        var isValid = validateEmail(value);

        if (isValid === false) {
            return false;
        }

        return true;
    }, 'Please enter a valid email address');
}

function validateEmail($email) {
    var emailRegex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    return emailRegex.test($email);
}

jQuery(document).ready(function() {
    $ = jQuery;

    initialize();
});