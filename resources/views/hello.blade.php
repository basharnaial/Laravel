
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
</head>
<body>
<h1>Hello {{ $name }} and age is </h1>

    @if($age > 20)
    <div>
    <h2 style="color:green">{{$age}}</h2>
    </div>
    @elseif ($age == 18)
    <div>
    <h2 style="color:red">{{$age}}</h2>
    </div>



@endif


{{--@for ($i = 0; $i < 10; $i++)--}}
{{--    The current value is {{ $i }}--}}
{{--@endfor--}}

@foreach ($hobbies as $hobie)
    <p>This is user {{ $hobie }}</p>
@endforeach

</body>
</html>
