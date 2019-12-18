(function ($) {
    "use-strict"

    jQuery(document).ready(function () {

        //navigation active
        $(document).on('click', '.treeview a', function () {
            $(this).closest('.treeview').toggleClass('active').siblings('.treeview').removeClass('active');
        });

        //hide sidebar
        $(document).on('click', '.hide-nav', function () {
            $('.sidebar-area').toggleClass('hide-sidebar');
        });


        //hide sidebar
        $(document).on('change', '.input-remember', function () {
            if (this.checked) {
                console.log('true');
            } else {
                console.log('false');
            }
        });
    });


}(jQuery));