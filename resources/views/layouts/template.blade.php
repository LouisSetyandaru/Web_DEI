<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('link')

    <title>Document</title>
</head>

<body>

    <header class="header">

        <img src="../../resources/images/logo.png" alt="logo" id="logo">

        <input type="checkbox" id="check">
        <label for="check" class="icons">

            <i class='bx bx-menu' id="open-menu"></i>
            <i class='bx bx-x' id="close-menu"></i>

        </label>

        <nav class="navbar">

            <a href="" style="--i:0">Home</a>
            <a href="" style="--i:1">About</a>
            <a href="" style="--i:2">Services</a>
            <a href="" style="--i:3">Contact</a>

        </nav>

    </header>

    @yield('content')

</body>

</html>
