<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="body">
        <header>
            <h1 class="logo">Lampor</h1>
                <hr>
                    <div class="navbar">
                        <ul>
                            <li><a href="/index">Lampor</a></li>
                        </ul>
                    </div>
                <hr>
        </header>

        <div class="golvbild">
            <a href="golvlampa.html"><img src="golvlampabild.jpeg"></a>
        </div>
        @foreach ($golvlampa as $lampa)
        <h1 class="lamptext">Namn: {{$lampa->name}}</h1>
        <p class="lamptext">Beskrivning: {{$lampa->content}}</p>
        <p class="lamptext">Pris: {{$lampa->price}}</p>
        @endforeach
    </div>
</body>
</html>