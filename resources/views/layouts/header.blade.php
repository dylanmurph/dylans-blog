<header class="bg-gradient-to-r from-green-700 to-green-500 fixed w-full z-50 top-0 left-0 border-b-2 border-white mb-16">
    <div class="max-w-7xl mx-auto flex items-center justify-between h-16 px-6">
        <!-- Left Image -->
        <div class="flex items-center">
            <a href="/"><img src="/images/banner.png" alt="Logo" class="h-12 hover:text-gray-200 transition duration-300 hover:opacity-75"></a>
        </div>

        <!-- Mobile Menu Icon -->
        <div class="md:hidden flex items-center">
            <button type="button" class="mobile-menu-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12"/>
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <nav class="hidden md:flex items-center space-x-6">
            <!-- Blog Link -->
            <a href="/blog" class="text-white font-semibold hover:text-gray-200 relative py-2 px-4 transition duration-300 hover:opacity-75 cursor-pointer">
                Blog
                <div class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
            </a>

            <!-- News Link -->
            <a href="/blog?category=news" class="text-white font-semibold hover:text-gray-200 relative py-2 px-4 transition duration-300">
                News
                <div class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
            </a>

            <!-- Reviews Link  -->
            <div class="relative">
                <a href="/blog?category=reviews" class="text-white font-semibold hover:text-gray-200 py-2 px-4 transition duration-300 group" id="reviews-toggle">
                    Reviews
                    <div class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
                </a>
            </div>

            <!-- Contact Link -->
            <a href="/contact" class="text-white font-semibold hover:text-gray-200 relative py-2 px-4 transition duration-300">
                Contact
                <div class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
            </a>

            <!-- Login/Logout Link with Image -->
            <div class="relative">
                <a href="{{ Auth::check() ? '#' : route('login') }}" class="text-white font-semibold hover:text-gray-200 relative py-2 px-4 transition duration-300 group login-link">
                    <img src="/images/login.png" alt="Login" class="h-8 w-8">
                </a>
                @if(Auth::check())
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20 hidden dropdown-menu">
                        <span class="block px-4 py-2 text-gray-700">{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                @endif
            </div>
        </nav>

        <!-- Mobile Menu (hidden by default) -->
        <div class="mobile-menu hidden flex-col space-y-4">
            <a href="/blog" class="text-white py-2 px-4">
                Blog
            </a>
            <a href="/blog?category=news" class="text-white py-2 px-4">
                News
            </a>
            <a href="/blog?category=reviews" class="text-white py-2 px-4">
                Reviews
            </a>
            <a href="/contact" class="text-white py-2 px-4">
                Contact
            </a>
            <a href="{{ route('login') }}" class="text-white py-2 px-4">
                Login
            </a>
        </div>
    </div>
</header>
