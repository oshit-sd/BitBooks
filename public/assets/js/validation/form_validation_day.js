// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.

    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "This field day only letters allowed");
    // It has the name attribute "registration"
    $("form[name='save_day']").validate({
        // Specify validation rules
        rules: {
            day: {
                required: true,
                lettersonly: true

            }
        },
        // Specify validation error messages
        messages: {
            day: {
                required: "Please provide a day",
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