<div class="navbar">
    <button class="toggle-sidebar">
        <i class='bx bx-menu'></i>
    </button>
    <div class="nav-right">
        <div class="notification">
            <button class="btn-notif">
                <i class='bx bxs-bell'></i>
                <span class="badges" data-badge="*"></span>
            </button>
            <ul class="nav-dropdown">
                <li class="nav-drop-list">
                    <a href="#" class="nav-drop-link">
                        <i class='bx bx-comment-error'></i>
                        <span class="nav-drop-name">New comments</span>
                    </a>
                </li>
                <hr class="nav-drop-separator">
                <li class="nav-drop-list">
                    <a href="#" class="nav-drop-link">
                        <i class='bx bx-comment-error'></i>
                        <span class="nav-drop-name">New comments</span>
                    </a>
                </li>
                <hr class="nav-drop-separator">
                <li class="nav-drop-list">
                    <a href="#" class="nav-drop-link">
                        <i class='bx bx-comment-error'></i>
                        <span class="nav-drop-name">New comments</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-user">
            <button class="btn-user">
                <i class='bx bxs-user'></i>
            </button>
            <ul class="nav-dropdown">
                <li class="nav-drop-list nav-drop-username">
                    <span class="nav-drop-name">
                        @if (isset(Auth::user()->name))
                            {{ Auth::user()->name }}
                        @else
                            {{ session()->get('name') }}
                        @endif
                    </span>
                </li>
                <li class="nav-drop-list">
                    <a href="/" class="nav-drop-link">
                        <i class='bx bx-home'></i>
                        <span class="nav-drop-name">Halaman Portal</span>
                    </a>
                </li>
                <hr class="nav-drop-separator">
                <li class="nav-drop-list">
                    <a href="/logout" class="nav-drop-link">
                        <i class='bx bx-log-out'></i>
                        <span class="nav-drop-name">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
