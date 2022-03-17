<footer class="text-gray-600 body-font">
    <div
      class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
        <a href="" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <i class="fas fa-cubes fa-lg text-purple-500"></i>
          <span class="ml-3 text-xl">{{ setting('site.title') }}</span>
        </a>
        <p class="mt-2 text-sm text-gray-500"></p>
      </div>
      <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3"></h2>
          <nav class="list-none mb-10">
            {{ menu('primary', 'kutty.partials.menu-left') }}
          </nav>
        </div>
        {{-- <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div> --}}
      </div>
    </div>
    <div class="bg-gray-100">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-500 text-sm text-center sm:text-left">&copy; <span class="text-gray-600 ml-1">{{ setting('site.title') }}</span> @php echo date('Y'); @endphp. All rights reserved.
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <a href="" class="text-gray-500">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="ml-3 text-gray-500">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="ml-3 text-gray-500">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="" class="ml-3 text-gray-500">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="" class="ml-3 text-gray-500">
            <i class="fab fa-instagram"></i>
          </a>
        </span>
      </div>
    </div>
  </footer>

{{-- <section class="bg-white py-8 w-full">
    <div class="container mx-auto px-8">
        <div class="table w-full">
            <div class="block sm:table-cell">
                <p class="uppercase text-grey text-sm sm:mb-6">Links</p>
                <ul class="list-reset text-xs mb-6">
                    <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                        <a href="#" class="text-grey hover:text-grey-dark">FAQ</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                        <a href="#" class="text-grey hover:text-grey-dark">Help</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                        <a href="#" class="text-grey hover:text-grey-dark">Support</a>
                    </li>
                </ul>
            </div>
            <div class="block sm:table-cell">
                <p class="uppercase text-grey text-sm sm:mb-6">Legal</p>
                <ul class="list-reset text-xs mb-6">
                    <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                        <a href="#" class="text-grey hover:text-grey-dark">Terms</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                        <a href="#" class="text-grey hover:text-grey-dark">Privacy</a>
                    </li>
                </ul>
            </div>
            <div class="block sm:table-cell">
                <p class="uppercase text-grey text-sm sm:mb-6">Social</p>
                <ul class="list-reset text-xs mb-6">
                    <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                        <a href="#" class="text-grey hover:text-grey-dark">Facebook</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                        <a href="#" class="text-grey hover:text-grey-dark">Linkedin</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                        <a href="#" class="text-grey hover:text-grey-dark">Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="block sm:table-cell">
                <p class="uppercase text-grey text-sm sm:mb-6">Company</p>
                <ul class="list-reset text-xs mb-6">
                    <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                        <a href="#" class="text-grey hover:text-grey-dark">Official Blog</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                        <a href="#" class="text-grey hover:text-grey-dark">About Us</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                        <a href="#" class="text-grey hover:text-grey-dark">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> --}}

        {{-- <footer class="top-footer">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell medium-4 text-center medium-text-left">
                        <h6>Sign up for our newsletter</h6>
                        <div class="input-group">
                            text
                        </div> <!-- /.input-group -->
                    </div> <!-- /.cell -->

                    <div class="vertical-space show-for-small-only"></div>

                    <div class="cell medium-6 medium-offset-2 text-center medium-text-right">
                        <h6>text</h6>
                        <ul class="menu social-icons align-center">
                            menu
                        </ul>
                    </div> <!-- /.cell -->
                </div> <!-- /.grid -->
            </div> <!-- /.grid-container -->
        </footer>

        <footer class="bottom-footer">
            <div class="grid-container">
                <div class="grid-x grid-padding-y">
                    <div class="cell small-12">
                        <ul class="menu align-center">
                            {{ menu('primary', 'kutty.partials.menu-left') }}
                        </ul>

                        <p class="copyright text-center">&copy; {{ setting('site.title') }} @php echo date('Y'); @endphp. All rights reserved.</p>
                    </div> <!-- /.cell -->
                </div> <!-- /.grid -->
            </div> <!-- /.grid-container -->
        </footer>
    </div> <!-- /.off-canvas-content --> --}}

    @stack('scripts')
</body>
</html>
