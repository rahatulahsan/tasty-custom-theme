;(function($){
    $(document).ready(function(){

        $('#reservenow').on('click', function(){
            $.post(url.ajaxurl,{
                action: 'reservation',
                name: $('#name').val(),
                phone: $('#phone').val(),
                email: $('#email').val(),
                person: $('#person').val(),
                table: $('#table').val(),
                date: $('#date').val(),
                time: $('#time').val(),
                rn: $('#rn').val()
            },function(data){
                console.log(data);
            });

            return false;
        
        });
        
    });
})(jQuery);