<header class="bg-gradient-to-r from-green-700 to-green-500 fixed w-full z-50 top-0 left-0 border-b-2 border-white">
    <div class="max-w-7xl mx-auto flex items-center justify-between h-16 px-6">
        <!-- Left Image -->
        <div class="flex items-center">
            <a href="/"><img src="/images/banner.png" alt="Logo" class="h-12 hover:opacity-75 cursor-pointer"></a>
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
        <nav class="hidden md:flex items-center space-x-6 ">
            <!-- Blog Link -->
            <a href="/blog" class="text-white hover:text-gray-200 relative py-2 px-4 transition duration-300 ">
                Blog
                <div
                    class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
            </a>

            <!-- News Link -->
            <a href="/blog?category=news" class="text-white hover:text-gray-200 relative py-2 px-4 transition duration-300">
                News
                <div
                    class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
            </a>

            <!-- Reviews Link  -->
            <div class="relative">
                <a href="/blog?category=reviews" class="text-white hover:text-gray-200 py-2 px-4 transition duration-300 group" id="reviews-toggle">
                    Reviews
                    <div
                        class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
                </a>

            <!-- Contact Link -->
            <a href="/contact" class="text-white hover:text-gray-200 relative py-2 px-4 transition duration-300">
                Contact
                <div
                    class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
            </a>

            <!-- Login Link -->
                @guest
                    <a class="text-white hover:text-gray-200 relative py-2 px-4 transition duration-300" href="{{ route('login') }}">{{ __('Login') }}</a>
                @else
                    <span class="text-white hover:text-gray-200 relative py-2 px-4 transition duration-300">{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                       class="text-white hover:text-gray-200 relative py-2 px-4 transition duration-300"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
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
            <a href="/login" class="text-white py-2 px-4">
                Login
            </a>
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Mobile Menu Toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
