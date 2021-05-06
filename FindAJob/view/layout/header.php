<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/controllers/front/signinController.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Job</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/FindAJob/libs/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/FindAJob/css/style.css">
    <link rel="stylesheet" type="text/css" href="/FindAJob/css/menu.css">
    <link rel="stylesheet" type="text/css" href="/FindAJob/css/responsive-menu.css">
</head>

<body>
    <div class="container-xxl">
        <div>
            <header>
                <div class="header">
                    <div class="row">
                        <div class="col-3">
                            <h1 class="slogan">Find a job</h1>
                        </div>
                        <div class="col-9">

                            <input id="page-nav-toggle" class="main-navigation-toggle" type="checkbox" />
                            <label for="page-nav-toggle">
                                <svg class="icon--menu-toggle" viewBox="0 0 60 30">
                                    <g class="icon-group">
                                        <g class="icon--menu">
                                            <path d="M 6 0 L 54 0" />
                                            <path d="M 6 15 L 54 15" />
                                            <path d="M 6 30 L 54 30" />
                                        </g>
                                        <g class="icon--close">
                                            <path d="M 15 0 L 45 30" />
                                            <path d="M 15 30 L 45 0" />
                                        </g>
                                    </g>
                                </svg>
                            </label>

                            <nav class="navbar main-navigation">

                                <?php if (isset($_SESSION['role'])) : ?>
                                    <?php if ($_SESSION['role'] == 1) :
                                    ?>

                                        <ul class="nav justify-content-end">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Опции
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <li><a class="dropdown-item" href="/FindAJob/candidates">Кандидатури</a></li>
                                                    <li><a class="dropdown-item" href="/FindAJob/jobs-hr">Обяви</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/FindAJob/companies">Фирми</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/FindAJob/home?logout=1" class="nav-link"><i class="fas fa-sign-out-alt"></i></a>
                                            </li>
                                        </ul>

                                    <?php endif; ?>
                                    <?php if ($_SESSION['role'] == 2) :
                                    ?>

                                        <ul class="nav justify-content-end">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="/FindAJob/add-options">Добавяне на категории</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Служители
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <li><a class="dropdown-item" href="/FindAJob/HRs">Списък Служители</a></li>
                                                    <li><a class="dropdown-item" href="/FindAJob/add-HR">Добавяне на служител</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/FindAJob/home?logout=1" class="nav-link"><i class="fas fa-sign-out-alt"></i></a>
                                            </li>
                                        </ul>

                                    <?php endif; ?>
                                    <?php if ($_SESSION['role'] == 3) : ?>

                                        <ul class="nav justify-content-end menu">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="/FindAJob/profile-company" data-hover="Профил">Профил</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/FindAJob/add-job" data-hover="Добави обява">Добави обява</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/FindAJob/view-candidates" data-hover="Кандидатури">Кандидатури</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/FindAJob/home?logout=1" class="nav-link" data-hover="&#10149;"><i class="fas fa-sign-out-alt"></i></a>
                                            </li>
                                        </ul>

                                    <?php endif; ?>
                                    <?php if ($_SESSION['role'] == 4) : ?>

                                        <ul class="nav justify-content-end menu">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="/FindAJob/home" data-hover="Начало">Начало</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/FindAJob/myProfile" data-hover="Профил">Профил</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/FindAJob/jobs" data-hover="Обяви">Обяви</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/FindAJob/home?logout=1" class="nav-link " data-hover="&#10149;"><i class="fas fa-sign-out-alt"></i></a>
                                            </li>
                                        </ul>

                                    <?php endif; ?>
                                <?php endif; ?>


                                <?php if (!isset($_SESSION['role'])) : ?>

                                    <ul class="nav justify-content-end menu">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="/FindAJob/index.php" data-hover="Начало">Начало</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/FindAJob/sign-in" data-hover="Вход">Вход</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/FindAJob/sign-up" data-hover="Регистрация">Регистрация</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/FindAJob/contacts" data-hover="Контакти">Контакти</a>
                                        </li>
                                    </ul>

                                <?php endif; ?>

                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php if (isset($_SESSION['username'])) : ?>
                                <h5> Welcome, <?php echo $_SESSION['username']; ?> </h5>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </header>
        </div>

    </div>