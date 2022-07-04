$(document).ready(function() {
    $(function() {
        if (location.search === "") {
            $('#nav-inicio').addClass('active');

            return;
        }

        $('nav ul li a').each(function() {
            var $this = $(this);

            if ($this.attr('href').indexOf(location.search) !== -1) {
                $this.addClass('active');
            }
        })
    })
});