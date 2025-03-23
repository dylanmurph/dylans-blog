<header class="bg-gradient-to-r from-green-700 to-green-500 fixed w-full z-50 top-0 left-0 border-b-2 border-white mb-16">
    <div class="max-w-7xl mx-auto flex items-center justify-between h-16 px-6">
        <div class="flex items-center">
            <a href="/"><img src="/images/banner.png" alt="Logo" class="h-12 hover:text-gray-200 transition duration-300 hover:opacity-75"></a>
        </div>

        <div class="md:hidden flex items-center">
            <button type="button" class="mobile-menu-button focus:outline-none focus:shadow-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12"/>
                </svg>
            </button>
        </div>

        <nav class="hidden md:flex items-center space-x-6">
            <a href="/blog" class="text-white font-semibold hover:text-gray-200 relative py-2 px-4 transition duration-300 hover:opacity-75 cursor-pointer">
                Blog
                <div class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
            </a>

            <a href="/news" class="text-white font-semibold hover:text-gray-200 relative py-2 px-4 transition duration-300 hover:opacity-75 cursor-pointer">
                News
                <div class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
            </a>

            <div class="relative">
                <a class="text-white font-semibold hover:text-gray-200 relative py-2 px-4 transition duration-300 hover:opacity-75 cursor-pointer group" id="reviews-toggle">
                    Reviews
                    <div class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
                </a>
                <div class="absolute right-0 top-10 w-48 rounded-b-lg py-2 z-20 hidden dropdown-menu" style="background: linear-gradient(to right, #0b8d63, #0b9165); border: 2px solid white; border-top: none;">
                    <a href="/reviews" class="block px-4 py-3 text-sm text-white font-semibold hover:bg-green-700 hover:scale-105 border-b border-white hover:text-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out text-center">All Reviews</a>
                    <a href="/reviews?type=driver" class="block px-4 py-3 text-sm text-white font-semibold hover:bg-green-700 hover:scale-105 border-b border-white hover:text-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out text-center">Drivers</a>
                    <a href="/reviews?type=fairway" class="block px-4 py-3 text-sm text-white font-semibold hover:bg-green-700 hover:scale-105 border-b border-white hover:text-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out text-center">Fairway Woods</a>
                    <a href="/reviews?type=hybrid" class="block px-4 py-3 text-sm text-white font-semibold hover:bg-green-700 hover:scale-105 border-b border-white hover:text-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out text-center">Hybrids</a>
                    <a href="/reviews?type=iron" class="block px-4 py-3 text-sm text-white font-semibold hover:bg-green-700 hover:scale-105 border-b border-white hover:text-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out text-center">Irons</a>
                    <a href="/reviews?type=wedge" class="block px-4 py-3 text-sm text-white font-semibold hover:bg-green-700 hover:scale-105 border-b border-white hover:text-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out text-center">Wedges</a>
                    <a href="/reviews?type=putter" class="block px-4 py-3 pb-1 text-sm text-white font-semibold hover:bg-green-700 hover:scale-105 hover:text-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out text-center">Putters</a>
                </div>
            </div>

            <a href="/contact" class="text-white font-semibold hover:text-gray-200 relative py-2 px-4 transition duration-300 hover:opacity-75 cursor-pointer">
                Contact
                <div class="absolute bottom-0 left-0 w-full h-px bg-white opacity-0 transition-all duration-300 group-hover:opacity-100"></div>
            </a>

            <div class="relative">
                <a href="{{ Auth::check() ? '#' : route('login') }}" class="text-white font-semibold hover:text-gray-200 relative py-2 px-4 transition duration-300 hover:opacity-75 cursor-pointer group login-link">
                    <img src="/images/login.png" alt="Login" class="h-8 w-8">
                </a>
                @if(Auth::check())
                    <div class="absolute right-0 mt-[2px] w-48 rounded-b-lg py-2 z-20 hidden dropdown-menu" style="background: linear-gradient(to right, #0c9166, #0c9668); border: 2px solid white; border-top: none;">
                        <div class="px-4 py-3 border-b border-white text-center">
                            <span class="block text-sm text-white font-bold">{{ Auth::user()->name }}</span>
                        </div>
                        <a href="{{ route('admin.index') }}" class="block border-b border-white px-4 py-3 text-sm text-white font-semibold hover:bg-green-700 hover:scale-105 hover:text-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out text-center">
                            Admin Panel
                        </a>
                        <a href="{{ route('logout') }}" class="block px-4 py-3 text-sm text-white font-semibold hover:bg-green-700 hover:scale-105 hover:text-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out text-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                @endif
            </div>
        </nav>

        <div class="mobile-menu hidden flex-col space-y-4">
            <a href="/blog" class="text-white py-2 px-4">Blog</a>
            <a href="/news" class="text-white py-2 px-4">News</a>
            <a class="text-white py-2 px-4" id="mobile-reviews-toggle">Reviews</a>
            <div class="hidden flex-col space-y-2 pl-4 mobile-review-dropdown" id="mobile-review-dropdown">
                <a href="/reviews" class="text-white p-6">All Reviews</a>
                <a href="/reviews?type=driver" class="text-white p-6">Drivers</a>
                <a href="/reviews?type=fairway" class="text-white p-6">Fairway Woods</a>
                <a href="/reviews?type=hybrid" class="text-white p-6">Hybrids</a>
                <a href="/reviews?type=iron" class="text-white p-6">Irons</a>
                <a href="/reviews?type=wedge" class="text-white p-6">Wedges</a>
                <a href="/reviews?type=putter" class="text-white p-6">Putters</a>
            </div>
            <a href="/contact" class="text-white py-2 px-4">Contact</a>
            <a href="{{ Auth::check() ? '#' : route('login') }}" class="text-white py-2 px-4 login-link">
                {{ Auth::check() ? Auth::user()->name : 'Login' }}
            </a>
            @if(Auth::check())
                <div class="hidden flex-col space-y-2 pl-4 mobile-login-dropdown" id="mobile-login-dropdown">
                    <a href="{{ route('admin.index') }}" class="block px-4 py-3 text-sm text-white font-semibold hover:bg-green-700 hover:scale-105 hover:text-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out text-center">
                        Admin Panel
                    </a>
                    <a href="{{ route('logout') }}" class="block px-4 py-3 text-sm text-white font-semibold hover:bg-green-700 hover:scale-105 hover:text-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out text-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </div>
            @endif
        </div>
    </div>
</header>
