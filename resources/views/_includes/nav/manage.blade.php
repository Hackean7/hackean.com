<div class="menu" id="admin-side-menu" style="font-family: 'Cuprum', sans-serif;">
    <aside class="m-t-10 m-l-10">

        <p class="menu-label">
            General
        </p>

        <ul class="menu-list">
            <li><a href="{{ route('manage.dashboard') }}" class="{{ Nav::isRoute('manage.dashboard') }}">Dashboard</a></li>
        </ul>

        <p class="menu-label m-t-20">
            Content
        </p>

        <ul class="menu-list">
            <li>
                <a href="{{ route('posts.index') }}" class="{{ Nav::isResource('posts', 2) }} m-b-10">Blog Posts</a>
            </li>
        </ul>

        <ul class="menu-list">
            <li>
                <a href="{{ route('categories.index') }}" class="{{ Nav::isResource('categories', 2) }} m-b-10">Blog Categories</a>
            </li>
        </ul>

        <ul class="menu-list">
            <li>
                <a href="{{ route('tags.index') }}" class="{{ Nav::isResource('tags', 2) }} m-b-10">Blog Tags</a>
            </li>
        </ul>

        <p class="menu-label m-t-20">
            Forum Content
        </p>

        <ul class="menu-list">
            <li>
                <a href="#" class="{{ Nav::isResource('tags', 2) }} m-b-10">Forum Threads</a>
            </li>
        </ul>

        <ul class="menu-list">
            <li>
                <a href="#" class="{{ Nav::isResource('tags', 2) }} m-b-10">Forum Replies</a>
            </li>
        </ul>

        <p class="menu-label m-t-20">
            Administration
        </p>

        <ul class="menu-list">
            <li>
                <a href="{{ route('users.index') }}" class="{{ Nav::isResource('users') }} m-b-10">Manage Users</a>
            </li>
            <li>
                <li>
                    <a href="{{ route('roles.index') }}" class="{{ Nav::isResource('roles') }} m-b-10"> Manage Roles </a>
                </li>

                <li>
                    <a href="{{ route('permissions.index') }}" class="{{ Nav::isResource('permissions') }} m-b-10"> Manage Premissions </a>
                </li>
            </li>
        </ul>
    </aside>
</div>