<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <section>
        @foreach ($movies as $movie)
            <div class="movie-card">
                <h2>{{ $movie->title }}</h2>
                <h4>{{ $movie->original_title }}</h4>
                <h4>{{ $movie->nationality }}</h4>
                <h4>{{ $movie->date }}</h4>
                <h4>{{ $movie->vote }}</h4>
            </div>
        @endforeach
    </section>
     <ul>

</ul>
</body>
</html>