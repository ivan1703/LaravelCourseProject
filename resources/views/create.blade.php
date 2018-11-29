<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
</head>
<body>
<br>
<form class = "container">
    <div class="form-group">
        <label>Name news</label>
        <input type="text" name = "name" class="form-control" placeholder="place, enter name news">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="8" placeholder="place, enter news"></textarea>
    </div>

    <br>
    <button type="submit" class="btn btn-dark">send</button>
</form>
</body>
</html>