// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    $.validator.addMethod('positiveNumber',
        function (value) {
            return Number(value) > 0;
        }, 'Enter a positive number.');


    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Letters only please");
    // It has the name attribute "registration"

    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });
    $("form[name='signup']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            //  code: "required",
            f_name: {
                required: true
            },
            l_name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },

            password: {
                required: true,
                minlength: 6,

            },
            con_password:{
                required: true,
                minlength: 6,
                equalTo: "#password",
            }
        },
        // Specify validation error messages
        messages: {
            // f_name: "Please enter the course name ",

            password: {

                 minlength: "Your password must be at least 6 characters long",
            },
            con_password: {
                equalTo: "Password don't match",
            },
            email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});