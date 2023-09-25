<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media(); ?>/img/avatar.png" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">Vitor Barbieri</p>
            <p class="app-sidebar__user-designation">Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
            <i class="app-menu__icon bi bi-speedometer"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Usuário</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/usuario">
                        <i class="icon bi bi-circle-fill"></i>&nbsp;
                        Usuário
                    </a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/funcao">
                        <i class="icon bi bi-circle-fill"></i>&nbsp;
                        Função
                    </a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/permissao">
                        <i class="icon bi bi-circle-fill"></i>&nbsp;
                        Permissão
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/cliente">
                <i class="app-menu__icon fa fa-user" aria-hidden="true"></i>
                <span class="app-menu__label">Cliente</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/produto">
                <i class="app-menu__icon fa fa-archive" aria-hidden="true"></i>
                <span class="app-menu__label">Produto</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/pedido">
                <i class="app-menu__icon fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="app-menu__label">Pedido</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/logout">
                <i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i>
                <span class="app-menu__label">Logout</span>
            </a>
        </li>
    </ul>
</aside>