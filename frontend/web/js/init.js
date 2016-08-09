$(document).ready(function() {
    $('.minus').click(function() {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 0 ? 0 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function() {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});

function drop(id) {
    $('#av_drop_' + id).addClass('av-active');
    var timer = setTimeout(function() {
        $('#av_drop_' + id).removeClass('av-active');
        $('#av_drop_' + id).addClass('not-active');
        },
        1000
    );
    $('#av_drop_' + id).on('mouseleave', function() {
        $('#av_drop_' + id).removeClass('av-active');
        $('#av_drop_' + id).addClass('not-active');
    });
    $('#av_drop_' + id).on('mouseenter', function() {
        clearTimeout(timer);
    });

    $('#avd_' + id + '_1').on('click', function() {
        var sel_1 = $('#avd_' + id + '_1').val();
        $('#av_dropin_' + id).val(sel_1);
    });
    $('#avd_' + id + '_2').on('click', function() {
        $('#av_dropin_' + id).val('');
        var sel_1 = $('#avd_' + id + '_1').val();
        var sel_2 = $('#avd_' + id + '_2').val();
        $('#av_dropin_' + id).val(sel_1 + ', ' + sel_2);
    });

}