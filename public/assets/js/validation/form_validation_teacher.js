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
    $("form[name='add_teacher']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
          //  code: "required",

            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            address: {
                required: true,
              //  minlength: 5
               // maxlength:7
            },
            name: {
                required: true,
               /* lettersonly: true*/

            },
            credittaken: {
                required: true,
                positiveNumber:true


            },
            cont:{
                required: true,
                number:true


            }
        },
        // Specify validation error messages
        messages: {
            name: "Please enter the course name ",

            cont: {
                required: "Please provide a valid contact",
              //  minlength: "Your code must be at least 5 characters long",
              /*  maxlength:"Your password must be max 7 characters long"*/
            },
            credittaken: {
                required: "Please provide the credit to be taken",
                positibeNumber: "The number should not be negative"
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