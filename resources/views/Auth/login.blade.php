<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <h1>Login</h1>
    
    <input type="text" id="email" placeholder="Email">
    <br>
    <input type="password" id="password" placeholder="Password">
    <br>
    <button type="button" id="Entrarlogin">Login</button>

    <script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#Entrarlogin').click(function() {
        let email = $('#email').val();
        let password = $('#password').val();

        $.ajax({
            url: '/login',
            type: 'POST',
            dataType: 'json',
            data: {
                email: email,
                password: password
            },
            success: function(response) {
                console.log(response);
               
            },
          
        });
    });

</script>

</body>
</html>
