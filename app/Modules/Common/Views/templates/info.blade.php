<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Appzocial Description</title>
    <style>
        body {
  background-color: #f5f5f5;
  width: 80%;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #dedede;
  border-left: 2px double #ffaa9f;
  border-right: 1px solid #ffaa9f;
}
p {
  list-style: none;
  border-bottom: 1px dotted #ccc;
  text-indent: 25px;
  width: 100%;
  height: auto;
  padding-bottom: 5px;
  text-transform: capitalize;
  clear: both;
}

    </style>
</head>
<body>
{!! $record->description !!}

</body>
