<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        {{Auth::user()->name}}
    </h1>
    <p>
        {{$user->diet_plans}}
        @foreach ($user->diet_plans as $plan)
            <p>Plan: {{$plan->id}}</p>
            <ul>

                @foreach ($plan->food as $food)
                <li>

                    <strong>{{$food->food_name}}</strong> {{$food->calorie}}
                </li>
                @endforeach
            </ul>
        @endforeach
    </p>
</body>
</html>