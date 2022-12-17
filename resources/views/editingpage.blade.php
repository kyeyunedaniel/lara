<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/update_trainings/{{$trainings[0]->No }}" method="post">

    <input type="text" name="deferred_training" value = "{{ $trainings[0]->train }}" id="">
    <br><br>
    <input type="date" name="start_date" value="{{$trainings[0]->StartDate}}" id="">
    <br><br>
    <input type="date" name="end_date" value = "{{$trainings[0]->EndDate}}"id="">
    <input type="submit" value="submit">

    
    
    
    
    </form>
</body>
</html>