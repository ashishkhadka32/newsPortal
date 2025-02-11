<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard')}}"> <img alt="image" src="/assets/img/logo.jpg" class="header-logo" />
            <span class="logo-name">Article</span>
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown {{ Request::routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown {{ Request::routeIs('admin.company.*') ? 'active' : '' }}">
            <a href="{{ route('admin.company.index')}}" class="nav-link"><i data-feather="home"></i><span>Company</span></a>
        </li>
        <li class="dropdown {{ Request::routeIs('admin.category.*') ? 'active' : '' }}">
            <a href="{{ route('admin.category.index')}}" class="nav-link"><i data-feather="tag"></i><span>Category</span></a>
        </li>
        <li class="dropdown {{ Request::routeIs('admin.article.*') ? 'active' : '' }}">
            <a href="{{ route('admin.article.index')}}" class="nav-link"><i data-feather="file-plus"></i><span>Article</span></a>
        </li>
        <li class="dropdown">
            <a href="{{ route('dashboard')}}" class="nav-link"><i data-feather="tv"></i><span>Advertisement</span></a>
        </li>
    </ul>
</aside>
