<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title }}</title>
    <style>
        body {
            color: gold;
            background-color: black;
            background-image: url('{{ asset('background/bg2.jpg') }}');
            background-size: cover;
        }
        hr {
            height: 3px;
            background-color: gold;
        }
    </style>
</head>
<body>
    <header>
        <a href="{{ url('/') }}" style="font-size: 60px; color: goldenrod;">
            <img src="{{ asset('background/icon.jpg') }}" alt="Logo" width="60" style="vertical-align: top right;">
            Classified Portfolio
        </a>
        <hr>
        <a href="{{ url('/home') }}" style="font-size: 30px; color: goldenrod;">Home</a>
        <a href="{{ url('/contacts') }}" style="font-size: 30px; color: goldenrod;">Contacts</a>
        <a href="{{ url('/education') }}" style="font-size: 30px; color: goldenrod;">Achievements</a>
    </header>

    <div style="font-size: 25px; text-align: left;">
        <img src="{{ asset('images/Picture.jpg') }}" alt="Portfolio Image" width="200" height="200">
        <h1>Vinz Roehmn Alota</h1>
        <p>I am a motivated 3rd year BSIT student with a strong interest in technology and
        problem-solving. I enjoy learning about programming, systems, and networking,
        and I am always eager to improve my skills and stay updated with new tech trends.</p>
        <p>WELCOME TO MY BIOGRAPHY</p>
    </div>
</body>
</html>