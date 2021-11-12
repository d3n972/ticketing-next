<nav x-data="{ open: false }" class="col-span-2">
    <div class="min-h-screen flex flex-row dark:bg-gray-800 dark:text-gray-100 w-full">
        <div class="w-full flex flex-col dark:bg-gray-800 dark:text-gray-100 bg-white rounded-r-3xl overflow-hidden">
            <div class="flex h-20 items-center justify-center mx-auto shadow-md w-20">
               @include('components.application-logo')
            </div>
            <ul class="flex flex-col py-4">
                <li>
                    <a href="#"
                       class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200  dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-700 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                    class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200  dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-700 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                    class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200  dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-700 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                    class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200  dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-700 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                    class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200  dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-700 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                    class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200  dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-700 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                    class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200  dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-700 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                    class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200  dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-700 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                    class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Primary Navigation Menu -->

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
