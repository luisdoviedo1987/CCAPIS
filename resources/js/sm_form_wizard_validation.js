"use strict";
var material_icons = function () {
    "use strict";
    $('#wizard').smartWizard({
        selected        : 0,
        theme           : 'default',
        transitionEffect: '',
        transitionSpeed : 0,
        useURLhash      : false,
        showStepURLhash : false,
        toolbarSettings : {
            toolbarPosition: 'bottom'
        },
        keyboardSettings: {
            keyNavigation: false, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
            keyLeft: [1111], // Left key code
            keyRight: [1111] // Right key code
        },
        lang: { // Language variables for button
            next: 'Siguiente',
            previous: 'Anterior'
        }
    });

    $('#wizard_validation').smartWizard({
        selected        : 0,
        theme           : 'default',
        transitionEffect: '',
        transitionSpeed : 0,
        useURLhash      : false,
        showStepURLhash : false,
        toolbarSettings : {
            toolbarPosition: 'bottom'
        },
        keyboardSettings: {
            keyNavigation: false, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
            keyLeft: [37], // Left key code
            keyRight: [39] // Right key code
        },
        lang: { // Language variables for button
            next: 'Siguiente',
            previous: 'Anterior'
        }
    });

    $('#wizard_validation').on('leaveStep', function (e, anchorObject, stepNumber, stepDirection) {
        var res = $('form[name="form-wizard"]').parsley().validate('step-' + (stepNumber + 1));
        return res;
    });

    $('#wizard_validation').keypress(function (event) {
        if (event.which == 13) {
            $('#wizard').smartWizard('next');
        }
    });

    $('[name="DOB"]').datepicker({
        todayHighlight: true,
        autoclose     : true
    });
};
var icons = function () {
    "use strict";
    return {
        init: function () {
            material_icons();
        }
    }
}();
$(function () {
    icons.init();
});