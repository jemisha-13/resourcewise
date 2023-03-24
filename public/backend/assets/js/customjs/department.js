var Department = function() {


    var add = function() {

        var form = $('#add-department-form');
        var rules = {
            phoneno: { required: true},
            email: { required: true, email: true },
            line1: { required: true },
            line2: { required: true },
       
        };
        handleFormValidate(form, rules, function(form) {
            handleAjaxFormSubmit(form, true);
        });
    };
    return {
        add: function() {
            add();
        },
    }
}();