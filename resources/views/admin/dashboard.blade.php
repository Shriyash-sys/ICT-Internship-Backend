@extends('admin.layouts.master')

@section('content')
    <!-- Main content area -->
    <main class="flex-1 overflow-y-auto p-6">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard Overview</h1>
            <p class="text-gray-600">Welcome back, Sarah!</p>
        </div>

        <!-- Stats cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-indigo-100 text-indigo-600">
                        <i class="fas fa-users text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-gray-500 text-sm">Total Users</h3>
                        <p class="text-2xl font-bold">1,248</p>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-green-500 text-sm font-medium">+12.5%</span>
                    <span class="text-gray-500 text-sm ml-2">from last month</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <i class="fas fa-shopping-cart text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-gray-500 text-sm">Total Products</h3>
                        <p class="text-2xl font-bold">568</p>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-green-500 text-sm font-medium">+8.3%</span>
                    <span class="text-gray-500 text-sm ml-2">from last month</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                        <i class="fas fa-chart-line text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-gray-500 text-sm">Total Revenue</h3>
                        <p class="text-2xl font-bold">$24,780</p>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-green-500 text-sm font-medium">+15.2%</span>
                    <span class="text-gray-500 text-sm ml-2">from last month</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                        <i class="fas fa-tasks text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-gray-500 text-sm">Pending Orders</h3>
                        <p class="text-2xl font-bold">42</p>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-red-500 text-sm font-medium">-3.1%</span>
                    <span class="text-gray-500 text-sm ml-2">from last month</span>
                </div>
            </div>
        </div>

        <!-- Tabbed Interface -->
        <div class="bg-white rounded-lg shadow mb-6">
            <div class="border-b border-gray-200">
                <nav class="flex overflow-x-auto">
                    <button
                        class="tab-button active px-6 py-3 text-sm font-medium text-indigo-600 border-b-2 border-indigo-600 whitespace-nowrap focus:outline-none">
                        Overview
                    </button>
                    <button
                        class="tab-button px-6 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 whitespace-nowrap focus:outline-none">
                        Analytics
                    </button>
                    <button
                        class="tab-button px-6 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 whitespace-nowrap focus:outline-none">
                        Reports
                    </button>
                    <button
                        class="tab-button px-6 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 whitespace-nowrap focus:outline-none">
                        Notifications
                    </button>
                    <button
                        class="tab-button px-6 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 whitespace-nowrap focus:outline-none">
                        Settings
                    </button>
                </nav>
            </div>
            <div class="p-6">
                <div class="tab-content active">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Overview Data</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-500 mb-2">Weekly Performance</h4>
                            <div class="h-40 bg-white rounded flex items-center justify-center">
                                <p class="text-gray-500">Performance chart placeholder</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-500 mb-2">Recent Activity</h4>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <div class="bg-indigo-100 p-1 rounded-full mr-3">
                                        <i class="fas fa-user-plus text-indigo-600 text-xs"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm">5 new users registered</p>
                                        <p class="text-xs text-gray-500">2 hours ago</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full mr-3">
                                        <i class="fas fa-shopping-cart text-green-600 text-xs"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm">New order #12345 placed</p>
                                        <p class="text-xs text-gray-500">4 hours ago</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-blue-100 p-1 rounded-full mr-3">
                                        <i class="fas fa-envelope text-blue-600 text-xs"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm">3 new messages received</p>
                                        <p class="text-xs text-gray-500">1 day ago</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content hidden">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Analytics Data</h3>
                    <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                        <p class="text-gray-500">Analytics charts will appear here</p>
                    </div>
                </div>
                <div class="tab-content hidden">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Reports</h3>
                    <div class="space-y-4">
                        <div class="p-4 border border-gray-200 rounded-lg">
                            <h4 class="font-medium">Monthly Sales Report</h4>
                            <p class="text-sm text-gray-500 mb-3">June 2023 sales performance</p>
                            <button class="text-sm text-indigo-600 hover:text-indigo-800">Download PDF</button>
                        </div>
                        <div class="p-4 border border-gray-200 rounded-lg">
                            <h4 class="font-medium">User Activity Report</h4>
                            <p class="text-sm text-gray-500 mb-3">Last 30 days user engagement</p>
                            <button class="text-sm text-indigo-600 hover:text-indigo-800">Download CSV</button>
                        </div>
                    </div>
                </div>
                <div class="tab-content hidden">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Notifications</h3>
                    <div class="space-y-3">
                        <div class="flex items-start p-3 bg-blue-50 rounded-lg">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <i class="fas fa-info-circle text-blue-600"></i>
                            </div>
                            <div>
                                <p class="font-medium">System Update Available</p>
                                <p class="text-sm text-gray-600">Version 2.3.4 is now available for download</p>
                                <p class="text-xs text-gray-500 mt-1">2 days ago</p>
                            </div>
                        </div>
                        <div class="flex items-start p-3 bg-green-50 rounded-lg">
                            <div class="bg-green-100 p-2 rounded-full mr-3">
                                <i class="fas fa-check-circle text-green-600"></i>
                            </div>
                            <div>
                                <p class="font-medium">Payment Received</p>
                                <p class="text-sm text-gray-600">Your invoice #1234 has been paid</p>
                                <p class="text-xs text-gray-500 mt-1">1 week ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content hidden">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Settings</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Notification Preferences</label>
                            <div class="mt-2 space-y-2">
                                <div class="flex items-center">
                                    <input id="email-notifications" name="email-notifications" type="checkbox"
                                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <label for="email-notifications" class="ml-2 block text-sm text-gray-700">Email
                                        Notifications</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="push-notifications" name="push-notifications" type="checkbox"
                                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <label for="push-notifications" class="ml-2 block text-sm text-gray-700">Push
                                        Notifications</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="timezone" class="block text-sm font-medium text-gray-700">Timezone</label>
                            <select id="timezone" name="timezone"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option>Eastern Time (ET)</option>
                                <option>Central Time (CT)</option>
                                <option>Mountain Time (MT)</option>
                                <option>Pacific Time (PT)</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save
                            Settings</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Recent users table -->
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-2 sm:mb-0">Recent Users</h2>
                <div class="flex space-x-2">
                    <select
                        class="text-sm border border-gray-300 rounded-lg px-3 py-1 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option>All Users</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                    <button
                        class="px-3 py-1 bg-indigo-600 text-white text-sm rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <i class="fas fa-plus mr-1"></i> Add User
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Role</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">John Smith</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">john.smith@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Customer</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://randomuser.me/api/portraits/women/28.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Emily Johnson</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">emily.j@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/75.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Michael Brown</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">michael.b@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Customer</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div class="text-sm text-gray-500 mb-2 sm:mb-0">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span
                        class="font-medium">24</span> results
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 border border-gray-300 rounded-lg text-sm disabled:opacity-50" disabled>
                        Previous
                    </button>
                    <button class="px-3 py-1 border border-gray-300 rounded-lg text-sm hover:bg-gray-50">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </main>



    <script>
        // Simple tab functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons and contents
                    tabButtons.forEach(btn => btn.classList.remove('active', 'text-indigo-600',
                        'border-indigo-600'));
                    tabButtons.forEach(btn => btn.classList.add('text-gray-500',
                        'border-transparent', 'hover:text-gray-700', 'hover:border-gray-300'
                    ));
                    tabContents.forEach(content => content.classList.add('hidden'));
                    tabContents.forEach(content => content.classList.remove('active'));

                    // Add active class to clicked button
                    button.classList.add('active', 'text-indigo-600', 'border-indigo-600');
                    button.classList.remove('text-gray-500', 'border-transparent',
                        'hover:text-gray-700', 'hover:border-gray-300');

                    // Show corresponding content
                    const tabId = button.textContent.trim().toLowerCase();
                    const content = Array.from(tabContents).find(content =>
                        content.previousElementSibling.textContent.toLowerCase().includes(tabId)
                    );
                    if (content) {
                        content.classList.remove('hidden');
                        content.classList.add('active');
                    }
                });
            });

            // Mobile menu toggle (would need proper implementation)
            const mobileMenuButton = document.querySelector('header button.md\\:hidden');
            mobileMenuButton.addEventListener('click', () => {
                alert('Mobile menu would open here in a real implementation');
            });
        });
    </script>
@endsection
