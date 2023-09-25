<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Manolo Bakes Bakary">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Vitor Barbieri da Silva">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media(); ?>/img/favicon.ico" type="image/x-icon">
    <title><?= $data['page_tag'] ?></title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media() ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media() ?>/css/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?= base_url() ?>/dashboard">Manolo Bakes</a>
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li class="dropdown">
                <a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu">
                    <i class="fa-regular fa-user"></i>
                </a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li>
                        <a class="dropdown-item" href="<?= base_url() ?>/opcoes">
                            <i class="fa-solid fa-gear"></i>&nbsp;
                            Settings
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?= base_url() ?>/perfil">
                            <i class="fa-regular fa-user"></i>&nbsp;
                            Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?= base_url() ?>/logout">
                            <i class="fa-solid fa-right-from-bracket"></i>&nbsp;
                            Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>