<!-- Sidebar -->
<div class="md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64 bg-indigo-800">
        <div class="flex items-center h-16 px-4 bg-indigo-900">
            <span class="text-white font-bold text-xl">AdminPanel</span>
        </div>
        <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto">
            <nav class="flex-1 space-y-2">
                <a href="{{route('dashboard')}}" class="flex items-center px-4 py-2 text-white bg-indigo-700 rounded-lg">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2 text-indigo-200 hover:text-white hover:bg-indigo-600 rounded-lg">
                    <i class="fas fa-users mr-3"></i>
                    Users
                </a>
                <a href="{{route('companies')}}"
                    class="flex items-center px-4 py-2 text-indigo-200 hover:text-white hover:bg-indigo-600 rounded-lg">
                    <i class="fas fa-shopping-cart mr-3"></i>
                    Comapny
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2 text-indigo-200 hover:text-white hover:bg-indigo-600 rounded-lg">
                    <i class="fas fa-chart-bar mr-3"></i>
                    Analytics
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2 text-indigo-200 hover:text-white hover:bg-indigo-600 rounded-lg">
                    <i class="fas fa-cog mr-3"></i>
                    Settings
                </a>
            </nav>
            <div class="mt-auto mb-4">
                <div class="px-4 py-3 bg-indigo-700 rounded-lg">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/women/44.jpg"
                            alt="User">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-white">Sarah Johnson</p>
                            <p class="text-xs text-indigo-200">Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
