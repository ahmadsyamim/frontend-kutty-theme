
@if (Auth::guest())
    <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-400 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">Login</a>
    <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-400 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">Register</a>
@else
    <div class="p-3 mb-0 overflow-x-auto overflow-y-visible ">
        <a href="{{ route('voyager-frontend.account') }}" class="btn btn-primary" role="button">Update Account</a>
        @if (Session::has('original_user.id'))
        <a href="#" class="btn btn-primary" role="button"
            onclick="document.getElementById('impersonate-form').submit();return false;">
            Switch back to {{ Session::get('original_user.name') }}
        </a>
        <form id="impersonate-form"
            action="{{ route('voyager-frontend.account.impersonate', Session::get('original_user.id')) }}" method="POST"
            style="display: none;">
            @csrf
        </form>
        @else
        <a href="#" class="btn btn-primary" role="button"
            onclick="document.getElementById('logout-form').submit();return false;">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endif
    </div>
@endif
