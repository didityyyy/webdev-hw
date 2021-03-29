$( function() {
    $( "#datepicker" ).datepicker({   
        showAnim: "clip",
        dateFormat: "DD, d MM, yy",
        firstDay: 1
    });
    $(document).unbind('mousedown', $.datepicker._checkExternalClick);
 });

