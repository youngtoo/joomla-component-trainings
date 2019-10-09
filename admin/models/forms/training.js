jQuery(function() {
    document.formvalidator.setHandler('coursename',
        function (value) {
            regex=/^[^0-9]+$/;
            return regex.test(value);
        });
});