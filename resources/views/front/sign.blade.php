

<script>
    $( document ).ready(function() {
        $('.loading-imager').hide();
    });
    $("#secure-login").submit(function(stay){
                 stay.preventDefault()
                 //var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
                 $('.loading-imager').show();
                
                 var formdata = $(this).serialize();
                 $.ajax({
                    type: 'POST',
                    url: "{{url('/')}}/secure-login",
                    data: formdata, // here $(this) refers to the ajax object not form
                    success: function (results) {
                        if(results == 0){
                            $('#login-span').html('Fail!')
                        }else{
                            $('#login-span').html('Successful!')
                        }
                       
                        setTimeout(function() {
                            // Redirect
                            window.open('{{url('/')}}/dashboard','_self')
                        }, 5000);
                        },
                        timeout: 5000 
                    });
    });
</script>