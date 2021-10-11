<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex-shrink-0 flex items-center">
          <a href="{{ url('/') }}">
              <img class="h-8 w-auto" src="{{ url('/') }}/images/logo.png" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" />
          </a>
          {{-- <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
          <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow"> --}}
        </div>
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            {{ menu('primary', 'kutty.partials.menu-left') }}
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            {{-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a> --}}
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 ">
        @include('kutty.partials.menu-right')      
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
    </div>
  </div>
</nav>


{{-- <nav class="bg-white shadow dark:bg-gray-800">
    <div
      class="container px-6 py-3 mx-auto md:flex md:justify-between md:items-center"
    >
      <div class="flex items-center justify-between">
        <div>
          <a
            class="text-xl font-bold text-gray-800 dark:text-white md:text-2xl hover:text-gray-700 dark:hover:text-gray-300"
            href="#"
            >Brand</a
          >
        </div>

        <!-- Mobile menu button -->
        <div class="flex md:hidden">
          <button
            type="button"
            class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
            aria-label="toggle menu"
          >
            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
              <path
                fill-rule="evenodd"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
              ></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
      <div class="items-center md:flex">
        <div class="flex flex-col md:flex-row md:mx-6">
        {{ menu('primary', 'kutty.partials.menu-left') }}
          <a
            class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
            href="#"
            >Home</a
          >
          <a
            class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
            href="#"
            >Shop</a
          >
          <a
            class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
            href="#"
            >Contact</a
          >
          <a
            class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
            href="#"
            >About</a
          >
        </div>

        <div class="flex justify-center md:block">
          @include('kutty.partials.menu-right')
          <a
            class="relative text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300"
            href="#"
          >
            <i class="fas fa-shopping-cart"></i>

            <span
              class="absolute top-0 left-0 p-1 text-xs text-white bg-indigo-500 rounded-full"
            ></span>
          </a>
        </div>
      </div>
    </div>
  </nav> --}}
  
  

{{-- <div class="navbar mb-2 shadow-lg bg-neutral text-neutral-content rounded-box">
  <div class="flex-none">
    <button class="btn btn-square btn-ghost">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">           
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>               
      </svg>
    </button>
  </div> 
  <div class="flex-1 px-2 mx-2">
    <span class="text-lg font-bold">
            With two icons
          </span>
  </div> 
  <div class="flex-none">
    <button class="btn btn-square btn-ghost">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">      
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>                    
      </svg>
    </button>
  </div>
</div> --}}

{{-- <div class="off-canvas position-right" id="offCanvas" data-off-canvas data-transition="push">
    <a href="#" class="close-button off-canvas-menu-icon-close" data-close="offCanvas">
        <span aria-hidden="true">&times;</span>
    </a>

    <ul class="vertical menu" data-dropdown-menu>
        {{ menu('primary', 'kutty.partials.menu-left') }}
    </ul>

    <hr>

    <ul class="vertical menu">
        @include('kutty.partials.menu-right')
    </ul>

    <hr>

    <ul class="menu social-icons align-center">
        {{ menu('social', 'kutty.partials.social') }}
    </ul>
</div>

<div class="off-canvas-content" data-off-canvas-content>
    <div class="header-site-search" data-toggle-search>
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-8 medium-offset-2">
                    @include('kutty.partials.search-box')
                </div>
            </div>
        </div>
    </div>

    <div class="top-bar">
        <div class="top-bar-left">
            <a href="#" class="off-canvas-menu-icon float-right hide-for-medium" data-open="offCanvas">
                <i class="fas fa-bars"></i> <span>Menu</span>
            </a>

            <a href="#" class="search-icon-mobile float-right hide-for-medium" data-toggle-search-trigger>
                <i class="fas fa-search"></i>
            </a>

            <div class="header-logo float-left">
                <a href="{{ url('/') }}">
                    <img src="{{ url('/') }}/images/logo.png" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" />
                </a>
            </div>

            <ul class="dropdown menu show-for-medium" data-dropdown-menu>
                {{ menu('primary', 'kutty.partials.menu-left') }}
            </ul> <!-- /.menu -->
        </div>

        <div class="top-bar-right show-for-medium">
            <ul class="dropdown menu" data-dropdown-menu>
                @include('kutty.partials.menu-right')
            </ul>
        </div>
    </div> --}}
