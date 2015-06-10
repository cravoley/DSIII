$(function () {
    $(".datepicker").each(function () {
        var to = $(this).attr("data-relative");
        $(this).datepicker({
            changeMonth: true,
            dateFormat:"dd/mm/yy",
            onClose: function (selectedDate) {
                if (to != undefined && to.trim().length > 0) {
                    var otherField = $(this).parent("form").find("input[name='"+to+"']");
                    $(otherField).datepicker("option", "minDate", selectedDate);
                }
            }
        });
    });
});
