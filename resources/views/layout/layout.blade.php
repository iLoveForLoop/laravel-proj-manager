<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">


    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .poppins-semibold {
            font-family: "Poppins", system-ui;
            font-weight: 600;
            font-style: normal;
            font-size: 80px
        }

        .poppins {
            font-family: "Poppins", system-ui;
            font-weight: 600;
            font-style: normal;
        }

        .box {
            transition: .2s ease-in-out;
        }

        .box:hover {
            scale: 103%;
            /* background-color: #ffc107; */
        }
    </style>
</head>

<body>
    @yield('home')
    @yield('projects')
    @yield('projects-show')
    @yield('projects-edit')
    @yield('projects-create')

    @yield('member-create')
    @yield('member-edit')
    @yield('member-show')

    @yield('task-create')
    @yield('task-show')
    @yield('task-edit')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
