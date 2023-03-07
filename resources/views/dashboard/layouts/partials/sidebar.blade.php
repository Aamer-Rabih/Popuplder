<nav class="main-menu">
            <ul>
                <li>
                    <a href="{{ route('pages.index') }}">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                           Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="{{ route('popuptypes.index') }}">
                        <i class="fa fa-sitemap fa-2x"></i>
                        <span class="nav-text">
                            All Popup Types
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="{{ route('popups.index') }}">
                        <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            All Popup Windows
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="{{ route('pages.index') }}">
                        <i class="fa fa-file-o fa-2x"></i>
                        <span class="nav-text">
                            All Pages
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="{{ route('popups.create') }}">
                        <i class="fa fa-plus fa-2x"></i>
                        <span class="nav-text">
                            Create Popup
                        </span>
                    </a>
                </li>
                <li>
                   <a href="{{ route('analytics') }}">
                       <i class="fa fa-dot-circle-o fa-2x"></i>
                        <span class="nav-text">
                            Popup Analytics
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-cogs fa-2x"></i>
                        <span class="nav-text">
                            Settings
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                </li>  
            </ul>
        </nav>