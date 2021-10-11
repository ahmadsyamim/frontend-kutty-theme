{{-- <li class="hide-for-small-only">
    <a href="#" data-toggle-search-trigger>
        <i class="fas fa-search"></i>
    </a>
</li> --}}
@if (Auth::guest())
    <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-400 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">Login</a>
    <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-400 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">Register</a>
    {{-- <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li> --}}
@else
    <li>
        <a href="#">My Account</a>
        <ul class="menu">
            <li>
                <a href="{{ route('voyager-frontend.account') }}">Update Account</a>
            </li>
            <li>
                @if (Session::has('original_user.id'))
                    <a href="#"
                       onclick="document.getElementById('impersonate-form').submit();return false;">
                        Switch back to {{ Session::get('original_user.name') }}
                    </a>
                    <form id="impersonate-form"
                          action="{{ route('voyager-frontend.account.impersonate', Session::get('original_user.id')) }}"
                          method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="#" onclick="document.getElementById('logout-form').submit();return false;">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endif
            </li>
        </ul>
    </li>
@endif
