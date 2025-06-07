@extends('admin.layouts.master')

@section('content')
    <div class="container mx-auto px-4 py-6 flex-1 overflow-y-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Company Profile Management</h1>
            <div class="flex space-x-3">
                <button type="button"
                    class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                    <i class="fas fa-times mr-2"></i>Cancel
                </button>
                <button type="submit" form="companyForm"
                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                    <i class="fas fa-save mr-2"></i>Save Changes
                </button>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <form action="{{route('company.info')}}" method="POST" id="companyForm" class="divide-y divide-gray-200" enctype="multipart/form-data">
                @csrf
                <!-- Basic Information Section -->
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3">
                            <i class="fas fa-info-circle text-blue-600"></i>
                        </div>
                        <h2 class="text-lg font-semibold">Basic Information</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Company Logo Upload -->
                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Company Logo</label>
                            <div class="flex items-center gap-4">
                                <div class="relative group">
                                    <label for="logoUpload"
                                        class="w-24 h-24 rounded-full bg-gray-100 border border-gray-300 overflow-hidden shadow-sm cursor-pointer flex items-center justify-center transition hover:ring-2 hover:ring-blue-400 hover:shadow-md relative">
                                        <img id="logoPreview" src="{{ asset('images/default-company.png') }}"
                                            alt="Company Logo" class="w-full h-full object-cover hidden">
                                        <div
                                            class="absolute inset-0 flex flex-col items-center justify-center text-center text-gray-500 group-hover:text-blue-600 pointer-events-none transition">
                                            <i class="fas fa-camera text-xl mb-1"></i>
                                            <span class="text-xs font-medium">Upload Logo</span>
                                        </div>
                                        <input type="file" id="logoUpload" name="logo" accept="image/*" class="hidden"
                                            onchange="previewLogo(event)">
                                    </label>
                                </div>
                                <!-- Logo Instructions -->
                                <div class="text-sm text-gray-500 space-y-1">
                                    <p><span class="font-medium">Recommended:</span> 200x200px</p>
                                    <p><span class="font-medium">Max size:</span> 2MB</p>
                                    <p class="text-xs text-gray-400 italic">Accepted: JPG, PNG, SVG</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                        <!-- Company Name -->
                        <div>
                            <label for="companyName" class="block text-sm font-medium text-gray-700 mb-1">Company Name
                                *</label>
                            <input type="text" id="companyName" name="company_name" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Enter company name">
                        </div>

                        <!-- Category -->
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category *</label>
                            <select id="category" name="category" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select category</option>
                                <option value="technology">Technology</option>
                                <option value="finance">Finance</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="retail">Retail</option>
                                <option value="education">Education</option>
                            </select>
                        </div>

                        <!-- Founded Date -->
                        <div>
                            <label for="foundedDate" class="block text-sm font-medium text-gray-700 mb-1">Founded
                                Date</label>
                            <input type="date" id="foundedDate" name="founded_date"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
                        <!-- Website -->
                        <div>
                            <label for="website" class="block text-sm font-medium text-gray-700 mb-1">Website</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-globe text-gray-400"></i>
                                </div>
                                <input type="url" id="website" name="website"
                                    class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="https://example.com">
                            </div>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-gray-400"></i>
                                </div>
                                <input type="tel" id="phone" name="phone" required
                                    class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="+977 9876543210">
                            </div>
                        </div>

                        <!-- Employees -->
                        <div>
                            <label for="employees" class="block text-sm font-medium text-gray-700 mb-1">Employees</label>
                            <select id="employees" name="employees"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select range</option>
                                <option value="1-10">1-10</option>
                                <option value="11-50">11-50</option>
                                <option value="51-200">51-200</option>
                                <option value="201-500">201-500</option>
                                <option value="501-1000">501-1000</option>
                                <option value="1001+">1001+</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Address Section -->
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3">
                            <i class="fas fa-map-marker-alt text-blue-600"></i>
                        </div>
                        <h2 class="text-lg font-semibold">Address Information</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Street Address -->
                        <div>
                            <label for="street" class="block text-sm font-medium text-gray-700 mb-1">Street Address
                                *</label>
                            <input type="text" id="street" name="street" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Main Street">
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City *</label>
                            <input type="text" id="city" name="city" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Chitwan">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
                        <!-- State/Province -->
                        <div>
                            <label for="state" class="block text-sm font-medium text-gray-700 mb-1">State/Province
                                *</label>
                            <input type="text" id="state" name="state" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Bagmati">
                        </div>

                        <!-- Country -->
                        <div>
                            <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Country *</label>
                            <input type="text" id="country" name="country" value="Nepal" readonly
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700 cursor-not-allowed focus:outline-none">
                        </div>
                    </div>
                </div>

                <!-- Social Media Section -->
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3">
                            <i class="fas fa-share-alt text-blue-600"></i>
                        </div>
                        <h2 class="text-lg font-semibold">Social Media</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Facebook -->
                        <div>
                            <label for="facebook" class="block text-sm font-medium text-gray-700 mb-1">Facebook</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fab fa-facebook-f text-blue-600"></i>
                                </div>
                                <input type="url" id="facebook" name="facebook"
                                    class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="https://facebook.com/yourpage">
                            </div>
                        </div>

                        <!-- Twitter -->
                        <div>
                            <label for="twitter" class="block text-sm font-medium text-gray-700 mb-1">Twitter</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fab fa-twitter text-blue-400"></i>
                                </div>
                                <input type="url" id="twitter" name="twitter"
                                    class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="https://twitter.com/yourhandle">
                            </div>
                        </div>

                        <!-- LinkedIn -->
                        <div>
                            <label for="linkedin" class="block text-sm font-medium text-gray-700 mb-1">LinkedIn</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fab fa-linkedin-in text-blue-700"></i>
                                </div>
                                <input type="url" id="linkedin" name="linkedin"
                                    class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="https://linkedin.com/company/yourcompany">
                            </div>
                        </div>

                        <!-- Instagram -->
                        <div>
                            <label for="instagram" class="block text-sm font-medium text-gray-700 mb-1">Instagram</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fab fa-instagram text-purple-600"></i>
                                </div>
                                <input type="url" id="instagram" name="instagram"
                                    class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="https://instagram.com/yourprofile">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Company Details Section -->
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3">
                            <i class="fas fa-building text-blue-600"></i>
                        </div>
                        <h2 class="text-lg font-semibold">Company Details</h2>
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description
                            *</label>
                        <textarea id="description" name="description" rows="5" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Brief description of your company"></textarea>
                        <p class="mt-1 text-sm text-gray-500">Maximum 2000 characters</p>
                    </div>

                    <!-- Photos -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-3">Company Photos</label>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5">
                            <!-- Upload Button -->
                            <label
                                class="h-36 flex flex-col items-center justify-center rounded-lg border border-dashed border-gray-300 bg-gray-50 hover:border-blue-400 hover:bg-blue-50 cursor-pointer transition duration-200 group">
                                <div class="flex flex-col items-center text-gray-400 group-hover:text-blue-500 transition">
                                    <i class="fas fa-cloud-upload-alt text-3xl mb-1"></i>
                                    <span class="text-sm font-medium">Upload</span>
                                </div>
                                <input type="file" name="photo[]" multiple accept="image/*" class="hidden">
                            </label>

                            <!-- Photos Preview Item -->
                            <div
                                class="relative group h-36 w-full bg-white rounded-xl border border-gray-200 shadow-sm hover:shadow-md overflow-hidden transition duration-300">
                                <!-- Image -->
                                <img src="https://via.placeholder.com/300" alt="Uploaded image"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">

                                <!-- Overlay (on hover) -->
                                <div
                                    class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                                    <button type="button"
                                        class="bg-white text-gray-600 hover:text-red-500 p-2 rounded-full shadow-md transition duration-200">
                                        <i class="fas fa-trash-alt text-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 text-sm text-gray-500">Max size: 5MB</p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Form Validation
            const form = document.getElementById('companyForm');

            form.addEventListener('submit', function(e) {
                let isValid = true;
                const requiredFields = form.querySelectorAll('[required]');

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.classList.add('border-red-500', 'ring-1', 'ring-red-200');
                        isValid = false;
                    } else {
                        field.classList.remove('border-red-500', 'ring-1', 'ring-red-200');
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    Swal.fire({
                        icon: 'error',
                        title: 'Missing Information',
                        text: 'Please fill in all required fields',
                        confirmButtonColor: '#3b82f6',
                    });
                }
            });

            // Clear validation when typing
            form.querySelectorAll('input, select, textarea').forEach(field => {
                field.addEventListener('input', function() {
                    this.classList.remove('border-red-500', 'ring-1', 'ring-red-200');
                });
            });

            // Character counter for description
            const description = document.getElementById('description');
            description.addEventListener('input', function() {
                const remaining = 2000 - this.value.length;
                if (remaining < 0) {
                    this.value = this.value.substring(0, 2000);
                }
            });
        });

        // Live Preview Script 
        function previewLogo(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    const img = document.getElementById('logoPreview');
                    const overlay = img.nextElementSibling; // Assuming overlay is the next sibling

                    img.src = reader.result;

                    // Show image
                    img.classList.toggle('hidden', false);

                    // Hide overlay if it exists
                    if (overlay) {
                        overlay.classList.toggle('hidden', true);
                    }
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
