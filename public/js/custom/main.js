$(document).ready(function() {

    $('#searchBox').on('keyup',function() {
        var value = $(this).val();
        $.ajax({
            type: 'get',
            url: '/search',
            data: {'search': value},
            success: function(data) {
                $('#players_list').html(data);
            }
        });
    })

    $('body').delegate('#position', 'click',function() {
        var value = $(this).text();
        $.ajax({
            type: 'get',
            url: '/search',
            data: {'position': value},
            success: function(data) {
                $('#players_list').html(data);
            }
        });
    })


});
