
jQuery(document).ready(function ($) {
    var $wrapperHoliday = $('.js-holiday-wrapper');

    $wrapperHoliday.on('click', '.remove-holiday-item', function(e) {
        e.preventDefault();
        var index = $wrapperHoliday.data('index');
        $wrapperHoliday.data('index', index - 1);
        $(this).closest('.js-holiday-item').prev().remove();
        $(this).closest('.js-holiday-item')
            .fadeOut()
            .remove();
        var i=1;
        $('.js-holiday-wrapper .title-holiday').each( function() {
            var title = "Congé "+ i;
            $(this).text(title);
            i = i +1 ;
        });
    });

    $wrapperHoliday.on('click', '.js-holiday-add', function(e) {
        e.preventDefault();
        // Get the data-prototype explained earlier
        var prototype = $wrapperHoliday.data('prototype');

        // get the new index
        var index = $wrapperHoliday.data('index');

        // Replace '__name__' in the prototype's HTML to
        // instead be a number based on how many items we have
        var newForm = prototype.replace(/__name__/g, index);

        // increase the index with one for the next item
        $wrapperHoliday.data('index', index + 1);

        // Display the form in the page before the "new" link
        var title = "Congé ";
        var holiday_index = "<div class=\"row\"><div class=\"col-lg-8 col-md-6\"><div class=\"form-group text-left\"><p class=\"text-justify title-holiday\">" + title + (index +1)+ "</p></div></div></div>";
        $(this).parent().before(holiday_index);
        $(this).parent().before(newForm);
        $(this).parent().prev().prev().remove();
    });
});