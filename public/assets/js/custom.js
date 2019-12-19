(function ($) {
    "use-strict"

    jQuery(document).ready(function () {

        //active navigation class
        var current = location.pathname;
        $('.navigation-menu ul li a').each(function () {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($this.attr('href').indexOf(current) !== -1) {
                $this.closest('.treeview').addClass('active');
                $this.closest('li').addClass('active');
            }
        })

        //navigation active
        $(document).on('click', '.treeview a', function () {
            $(this).closest('.treeview').toggleClass('active').siblings('.treeview').removeClass('active');
        });

        //hide sidebar
        $(document).on('click', '.hide-nav', function () {
            $('.sidebar-area').toggleClass('hide-sidebar');
        });

    });


}(jQuery));