<nav id="sidebar">
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <ul class="app-menu">
            
            <li><a class="app-menu__item" href="{{ url('/home') }}" ><i class="app-menu__icon fa fa-dashboard"></i><span
                        class="app-menu__label">Página Principal</span></a></li>

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


            </li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-key"></i><span class="app-menu__label">Alterar Senha</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/trocar/senha"><i class="icon fa fa-circle-o"></i>Trocar
                            Senha</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</nav>
