<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co/42rjFJg/3dgifmaker88668.gif" type="image/x-icon">
</head>
<body>

<header>
    <nav>
        <ul class="mainheader">
            <li class="mainheadertext"><a class="header" href="{{ url('/') }}"><img
                        src="https://i.ibb.co/42rjFJg/3dgifmaker88668.gif" alt="logo" width="70" height="20"></a></li>
            <li class="mainheadertext"><a class="header" href="{{ route('profile') }}">Profile</a></li>
            <li class="mainheadertext"><a class="header" href="{{ route('faq') }}">FAQ</a></li>
            <li class="mainheadertext"><a class="header" href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="mainheadertext"><a class="header" href="{{ route('blog') }}">Blog</a></li>
            <li><img class="hzheader" src="https://i.ibb.co/FH8RLcn/hz-university-of-applied-sciences.png"
                     alt="hz-university"></li>
        </ul>
    </nav>
</header>

<div class="menu">
    <main>
        @yield('content')
    </main>
</div>

<div class="footer">
    <p><i>© {{ date('Y') }} Scott Mulder. All rights reserved.</i></p>
</div>

</body>
</html>
