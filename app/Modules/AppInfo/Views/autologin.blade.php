<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$().ready(function () {
    $('.submit').click();
});
</script>
</head>
<body>
<h1>Redirecting ...</h1>
{!! Form::open(['url' => $link, 'method' => 'POST', 'style' => 'display: none']) !!}
    {!! Form::text('user_name', $username) !!}
    {!! Form::text('password', $password) !!}
    {!! Form::text('submit') !!}
    {!! Form::submit('submit', ['class' => 'submit']) !!}
    
{!! Form::close() !!}
</body>
</html>
