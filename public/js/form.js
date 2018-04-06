$(document).ready(function() {
    $('#datetimepicker1').datetimepicker();

    $('#treatment').click(function () {
        var selectedText = $('#treatment :selected').text();

        selectedText == "Classical Panchakarma" ? $("#classical").removeClass('hide') && $("#blissful_program_days").addClass('hide') && $("#blissful_program_1_hour").addClass('hide') && $("#blissful_program_3_hours").addClass('hide') : $("#classical").addClass('hide');
        selectedText == "Blissful Panchakarma" ? $("#blissful").removeClass('hide') && $("#blissful_program_days").addClass('hide') && $("#blissful_program_1_hour").addClass('hide') && $("#blissful_program_3_hours") : $("#blissful").addClass('hide');
        selectedText == "Wellness Panchakarma" ? $("#wellness").removeClass('hide') && $("#blissful_program_days").addClass('hide') && $("#blissful_program_1_hour").addClass('hide') && $("#blissful_program_3_hours") : $("#wellness").addClass('hide');
        selectedText == "Training Program" ? $("#training").removeClass('hide') && $("#blissful_program_days").addClass('hide') && $("#blissful_program_1_hour").addClass('hide') && $("#blissful_program_3_hours"): $("#training").addClass('hide');
        selectedText == "Yoga Program" ? $("#yoga").removeClass('hide') && $("#blissful_program_days").addClass('hide') && $("#blissful_program_1_hour").addClass('hide') && $("#blissful_program_3_hours"): $("#yoga").addClass('hide');



    });
    $('#blissful').click(function () {
        var selected_Text = $('#blissful :selected').text();
        if (selected_Text == "1 Hour"){
            $("#blissful_program_1_hour").removeClass('hide');
            $("#blissful_program_days").addClass('hide');
            $("#blissful_program_3_hours").addClass('hide');
        }
        else if (selected_Text == "3 Hours"){
            $("#blissful_program_3_hours").removeClass('hide');
            $("#blissful_program_days").addClass('hide');
            $("#blissful_program_1_hour").addClass('hide');
        }
        else{
            $("#blissful_program_days").removeClass('hide');
            $("#blissful_program_1_hour").addClass('hide');
            $("#blissful_program_3_hours").addClass('hide');

        }
    });
});
