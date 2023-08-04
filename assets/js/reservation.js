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
                if('Duplicate' == data){
                    alert('Your have already placed a request. No need to try again');
                }else{
                    $('#paynow').attr('href',data);
                    $('#reservenow').hide();
                    $('#paynow').show();
                }
            });

            return false;
        
        });
        
    });
})(jQuery);