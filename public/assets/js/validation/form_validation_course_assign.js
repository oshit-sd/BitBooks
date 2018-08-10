// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.

    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Letters only please");
    // It has the name attribute "registration"
    $("form[name='add_course_assign']").validate({
        // Specify validation rules
        rules: {

            name: {
                required: true,

            },
            credit: {
                required: true,
                range: [0.5,5]


            }
        },
        // Specify validation error messages
        messages: {
            name: "Please enter the course name ",

            credit: {
                required: "Please provide a credit",
                range: "credit must be from 0.5 to 5"
            }
            //email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});