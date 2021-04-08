<nav id="sidebar">
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <ul class="app-menu">

            <li><a class="app-menu__item" href="{{ url('/cliente/home') }}"><i
                        class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Página
                        Principal</span></a></li>

            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Cadastrar</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="{{ url('/cliente/incluir') }}"><i
                                class="icon fa fa-circle-o"></i>Cliente</a></li>
                    <li><a class="treeview-item" href="{{ url('/endereco/incluir') }}"><i
                                class="icon fa fa-circle-o"></i>Endereço</a></li>
                </ul>
            </li>

            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Clientes</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="{{ url('/cliente/listar') }}"><i
                                class="icon fa fa-circle-o"></i>Lista de Clientes</a></li>
                    <li><a class="treeview-item" href="{{ url('/endereco/listar') }}"><i
                                class="icon fa fa-circle-o"></i>Lista de Endereço dos Clientes</a></li>
                </ul>
            </li>


            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Segurança</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="{{ url('/role/listar') }}"><i
                                class="icon fa fa-circle-o"></i>Papel de Usuário</a></li>
                    <li><a class="treeview-item" href="{{ url('/permissao/listar') }}"><i
                                class="icon fa fa-circle-o"></i>Permissões de Usuário</a></li>
                    <li><a class="treeview-item" href="{{ url('/acao/listar') }}"><i
                                class="icon fa fa-circle-o"></i>Ações</a></li>
                    <li><a class="treeview-item" href="{{ url('/usuario/listar') }} "><i
                                class="icon fa fa-circle-o"></i>Usuário</a></li>
                    <li><a class="treeview-item" href="/direitos/pesquisar"><i class="icon fa fa-circle-o"></i> Direitos
                            de Acesso</a></li>
                </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-key"></i><span class="app-menu__label">Alterar Senha</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/trocar/senha"><i class="icon fa fa-circle-o"></i>Trocar
                            Senha</a></li>
                </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                </ul>
            </li>
        </ul>
    </aside>
</nav>
