// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.

    jQuery.validator.addMethod("lettersonly", function(value, element) {
        //return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Letters only please");
    // It has the name attribute "registration"
    $("form[name='save_department']").validate({
        // Specify validation rules
        rules: {
            code: {
                required: true,
                minlength: 2,
                maxlength:7
            },
            name: {
                required: true,

            }
        },
        // Specify validation error messages
        messages: {
            name: "This field name is required",

            code: {
                required: "Please provide a code",
                minlength: "Your code must be at least 2 characters long",
                maxlength:"Your code must be max 7 characters long"
            },
            //email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});