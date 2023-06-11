<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{$URL_BASE}/styles/style.css">
    <title>{$title}</title>
</head>

<body class="bg-dark">
    <header>
        <div class="container-fluid">
            <div class="row">


                <nav class="navbar navbar-light bg-dark bg-opacity-70">

                    <a class="navbar-brand text-white logo-container" href="{$URL_BASE}/home">
                        <img src="{$URL_BASE}/media/logo-peli.png" width="40" height="40" alt=""><span
                            class="logo-span">MasPelis</span>
                    </a>
                    <div <div class="col-7">


                        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-white rounded-5 shadow-sm text-black text-bold"
                            id="pillNav2" role="tablist"
                            style="--bs-nav-link-color: var(--bs-White); --bs-nav-pills-link-active-color: var(--bs-white); --bs-nav-pills-link-active-bg: var(--bs-white) bg-white">

                            <li class="nav-item h6" role="presentation">
                                <a class="nav-link rounded-5 " href="{$URL_BASE}/home">Home</a>
                            </li>
                            <li class="nav-item h6" role="presentation">
                                <a class="nav-link rounded-5" href="{$URL_BASE}/movieList">Peliculas</a>
                            </li>
                            <li class="nav-item h6" role="presentation">
                                <a class="nav-link rounded-5" href="{$URL_BASE}/gendersList">Generos</a>
                            </li>
                            {if $loged == false}
                                <li class="nav-item h6" role="presentation">
                                    <button class="nav-link rounded-5"><a href="{$URL_BASE}/login"
                                            class="text-dark">Login</a></button>
                                </li>
                            {else}
                                <li class="nav-item h6" role="presentation">
                                    <a class="nav-link rounded-5" href="{$URL_BASE}/log_out">log out</a>
                                </li>
                            {/if}
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
</header>