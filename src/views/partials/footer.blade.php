<section class="bg-white py-8 w-full">
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
</section>

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

    {!! Asset::scripts() !!}
    @stack('scripts')
</body>
</html>
