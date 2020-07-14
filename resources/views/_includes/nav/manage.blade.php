<div class="side-menu" id="admin-side-menu">
    <aside class="menu m-t-30 m-l-10">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a class="{{Nav::isRoute('manage.dashboard')}}" href="{{route('manage.dashboard')}}">Dashboard</a></li>
        </ul>

        <p class="menu-label">
            Content
        </p>
        <ul class="menu-list">
            <li><a class="{{Nav::isResource('posts')}}" href="{{route('posts.index')}}">Posts</a></li>
            {{-- <li>
                <a class="{{Nav::hasSegment(['roles', 'permissions'], 2)}} has-submenu">Roles &amp; Permissions</a>
                <ul class="submenu">
                    <li><a class="{{Nav::isResource('roles')}}" href="{{route('roles.index')}}">Roles</a></li>
                    <li><a class="{{Nav::isResource('permissions')}}" href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
            </li> --}}
        </ul>

        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a class="{{Nav::isResource('users')}}" href="{{route('users.index')}}">Manage Users</a></li>
            <li>
                <a class="{{Nav::hasSegment(['roles', 'permissions'], 2)}} has-submenu">Roles &amp; Permissions</a>
                <ul class="submenu">
                    <li><a class="{{Nav::isResource('roles')}}" href="{{route('roles.index')}}">Roles</a></li>
                    <li><a class="{{Nav::isResource('permissions')}}" href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
