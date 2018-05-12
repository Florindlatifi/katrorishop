

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script>
        $(document).ready(function() {
            $('.favdiv').click(function () {
                var id = $(this).children('#post_id').val();
                
                 $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                if($(this).hasClass("favnotactive")){
                    $.ajax({
                        type: "POST",
                        url: '/katrorishop/public/favourite-store',
                        data: {post_id: id},
                        success: function(data) {
                            $('input[value="'+id+'"]').parent().removeClass('favnotactive').addClass('favactive');
                        },
                    });
                }

                if($(this).hasClass("favactive")){
                    $.ajax({
                        type: "POST",
                        url: '/katrorishop/public/favourite-delete',
                        data: {post_id: id},
                        success: function(data) {
                            $('input[value="'+id+'"]').parent().removeClass('favactive').addClass('favnotactive');
                        },
                    });
                }
                
            });

            $('.favdivprofile').click(function () {
                var id = $(this).children('#post_id').val();
                
                 $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                $.ajax({
                    type: "POST",
                    url: '/katrorishop/public/favourite-delete',
                    data: {post_id: id},
                    success: function(data) {
                        $('input[value="'+id+'"]').parent().parent().parent().parent().parent().parent().remove();
                    },
                });
                
            });

        });
      </script>

  </body>
</html>