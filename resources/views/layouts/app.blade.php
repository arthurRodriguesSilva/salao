<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <title>
        Salão
    </title>

</head>

<body class="bg-light">

    <div class="d-flex">

        <div
            class="bg-dark text-white p-3 shadow"
            style="
                width:250px;
                min-height:100vh;
            "
        >

            <h2 class="mb-4">
                Salão
            </h2>

            <ul class="nav flex-column">

                <li class="nav-item mb-2">

                    <a
                        href="/clients"
                        class="nav-link text-white"
                    >

                        Clientes

                    </a>

                </li>

                <li class="nav-item mb-2">

                    <a
                        href="/services"
                        class="nav-link text-white"
                    >

                        Serviços

                    </a>

                </li>

                <li class="nav-item mb-2">

                    <a
                        href="/appointments"
                        class="nav-link text-white"
                    >

                        Agendamentos

                    </a>

                </li>

            </ul>

        </div>

        <div class="p-4 w-100">

            @yield('content')

        </div>

    </div>

</body>

</html>

