<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Frases inspiradoras</h1>
    @foreach ($phrases as $phrase)
    <img src="{{$phrase->image}}" alt="">
    <p>  {{$phrase->phrase}}</p>
    <p>  {{$phrase->author}}</p>
    @endforeach
</body>
</html>