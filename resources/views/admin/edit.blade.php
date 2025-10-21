<x-app-layout>
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12 gap-x-6 gap-y-6">

            <!-- Sidebar with Summary & Actions -->
            <div class="col-span-full lg:col-span-4">
                <div
                    class="bg-white dark:bg-dark-card rounded-xl shadow-sm border border-gray-100 dark:border-dark-border overflow-hidden sticky top-6">
                    <!-- Quote Summary -->
                    <div class="p-6 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <i class="ri-file-text-line text-blue-500"></i> Quote Summary
                        </h3>
                        <div class="space-y-4">
                            <div
                                class="flex items-center justify-between p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Tracking ID</span>
                                <code
                                    class="font-mono text-sm font-bold text-blue-600 bg-blue-50 dark:bg-blue-900/20 px-2 py-1 rounded">{{ $quote->tracking_id }}</code>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Status</span>
                                <select name="status" id="status"
                                    class="form-select form-select-sm w-full max-w-[140px] @error('status') is-invalid @enderror"
                                    required>
                                    <option value="Pending"
                                        {{ old('status', $quote->status) == 'Pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="In Transit"
                                        {{ old('status', $quote->status) == 'In Transit' ? 'selected' : '' }}>In Transit
                                    </option>
                                    <option value="Delivered"
                                        {{ old('status', $quote->status) == 'Delivered' ? 'selected' : '' }}>Delivered
                                    </option>
                                    <option value="Canceled"
                                        {{ old('status', $quote->status) == 'Canceled' ? 'selected' : '' }}>Canceled
                                    </option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div
                                class="flex items-center justify-between p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Total Price</span>
                                <div class="text-right">
                                    <span class="text-lg font-bold text-green-600 line-through"
                                        id="oldPrice">${{ number_format(old('price', $quote->price) ?? 0, 2) }}</span>
                                    <div class="mt-1">
                                        <input type="number" step="0.01" name="price"
                                            value="{{ old('price', $quote->price) ?? '' }}" id="newPrice"
                                            class="form-input form-input-sm w-20 text-right font-bold text-green-600 bg-green-50 @error('price') is-invalid @enderror"
                                            required>
                                        <span class="text-green-600 ml-1">$</span>
                                        @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image Upload Preview -->
                    <div class="p-6 border-t border-gray-200 dark:border-dark-border">
                        <h4 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wide mb-4">
                            Package Images</h4>
                        <div class="grid grid-cols-2 gap-3 mb-4" id="imagePreview">
                            @for ($i = 1; $i <= 4; $i++)
                                @php $image = $quote->{"image_$i"}; @endphp
                                <div class="relative group/image-{{ $i }}">
                                    @if ($image)
                                        <img src="{{ asset('storage/' . $image) }}" alt="Image {{ $i }}"
                                            class="w-full h-20 object-cover rounded-lg shadow-sm">
                                        <button type="button" onclick="removeImage({{ $i }})"
                                            class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs shadow-lg opacity-0 group-hover/image-{{ $i }}:opacity-100 transition-opacity">
                                            <i class="ri-close-line"></i>
                                        </button>
                                        <input type="hidden" name="remove_image_{{ $i }}"
                                            id="remove_image_{{ $i }}" value="0">
                                        <input type="file" name="image_{{ $i }}" accept="image/*"
                                            onchange="previewImage({{ $i }}, this)"
                                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    @else
                                        <label for="image_{{ $i }}"
                                            class="w-full h-20 bg-gray-100 dark:bg-dark-card-two rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300 dark:border-dark-border-two text-gray-400 hover:bg-gray-50 dark:hover:bg-dark-card-two/50 transition-colors cursor-pointer">
                                            <i class="ri-camera-add-line text-xl"></i>
                                            <input type="file" id="image_{{ $i }}"
                                                name="image_{{ $i }}" accept="image/*"
                                                onchange="previewImage({{ $i }}, this)" class="hidden">
                                        </label>
                                    @endif
                                </div>
                            @endfor
                        </div>
                        @error('image_*')
                            <div class="invalid-feedback text-sm text-red-600 dark:text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Main Edit Form -->
            <div class="col-span-full lg:col-span-8">
                <form action="{{ route('quotes.update', $quote) }}" method="POST" enctype="multipart/form-data"
                    id="editQuoteForm">
                    @csrf
                    @method('PUT')

                    <div
                        class="bg-white dark:bg-dark-card rounded-xl shadow-sm border border-gray-100 dark:border-dark-border overflow-hidden">
                        <!-- Form Header -->
                        <div
                            class="px-6 py-4 border-b border-gray-200 dark:border-dark-border bg-gray-50 dark:bg-dark-card-two">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
                                        <i class="ri-edit-2-line text-blue-500"></i> Edit Quote Details
                                    </h2>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Update shipping quote
                                        information</p>
                                </div>
                                <div class="flex gap-3">
                                    <button type="button" onclick="validateAndSubmit()"
                                        class="btn btn-primary flex-center gap-2 px-6">
                                        <i class="ri-save-line"></i> Save Changes
                                    </button>
                                 
                                    <a href="{{ route('dashboard') }}"
                                        class="btn btn-secondary flex-center gap-2 px-6">
                                        <i class="ri-arrow-left-line"></i> Back to List
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 divide-y divide-gray-200 dark:divide-dark-border">
                            <!-- Personal Information -->
                            <div class="pb-6">
                                <h3
                                    class="text-lg font-semibold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
                                    <i class="ri-user-line text-indigo-500"></i> Personal Information
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    <div>
                                        <label for="first_name" class="form-label">First Name <span
                                                class="text-red-500">*</span></label>
                                        <input type="text" id="first_name" name="first_name"
                                            value="{{ old('first_name', $quote->first_name) }}"
                                            class="form-input @error('first_name') is-invalid @enderror" required>
                                        @error('first_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="last_name" class="form-label">Last Name <span
                                                class="text-red-500">*</span></label>
                                        <input type="text" id="last_name" name="last_name"
                                            value="{{ old('last_name', $quote->last_name) }}"
                                            class="form-input @error('last_name') is-invalid @enderror" required>
                                        @error('last_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="phone_number" class="form-label">Phone Number</label>
                                        <input type="tel" id="phone_number" name="phone_number"
                                            value="{{ old('phone_number', $quote->phone_number) }}"
                                            class="form-input @error('phone_number') is-invalid @enderror">
                                        @error('phone_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="lg:col-span-3">
                                        <label for="email" class="form-label">Email <span
                                                class="text-red-500">*</span></label>
                                        <input type="email" id="email" name="email"
                                            value="{{ old('email', $quote->email) }}"
                                            class="form-input @error('email') is-invalid @enderror" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Shipment Details -->
                            <div class="py-6">
                                <h3
                                    class="text-lg font-semibold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
                                    <i class="ri-truck-line text-green-500"></i> Shipment Details
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    <div>
                                        <label for="shipment_type" class="form-label">Shipment Type <span
                                                class="text-red-500">*</span></label>
                                        <select id="shipment_type" name="shipment_type"
                                            class="form-select @error('shipment_type') is-invalid @enderror" required>
                                            <option value="">Select Type</option>
                                            <option value="By Air"
                                                {{ old('shipment_type', $quote->shipment_type) == 'By Air' ? 'selected' : '' }}>
                                                By Air</option>
                                            <option value="By Ship"
                                                {{ old('shipment_type', $quote->shipment_type) == 'By Ship' ? 'selected' : '' }}>
                                                By Ship</option>
                                            <option value="By Road"
                                                {{ old('shipment_type', $quote->shipment_type) == 'By Road' ? 'selected' : '' }}>
                                                By Road</option>
                                        </select>
                                        @error('shipment_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="incoterms" class="form-label">Incoterms <span
                                                class="text-red-500">*</span></label>
                                        <select id="incoterms" name="incoterms"
                                            class="form-select @error('incoterms') is-invalid @enderror" required>
                                            <option value="">Select Incoterms</option>
                                            <option value="EXW"
                                                {{ old('incoterms', $quote->incoterms) == 'EXW' ? 'selected' : '' }}>
                                                EXW</option>
                                            <option value="FCA"
                                                {{ old('incoterms', $quote->incoterms) == 'FCA' ? 'selected' : '' }}>
                                                FCA</option>
                                            <option value="FOB"
                                                {{ old('incoterms', $quote->incoterms) == 'FOB' ? 'selected' : '' }}>
                                                FOB</option>
                                            <option value="CIF"
                                                {{ old('incoterms', $quote->incoterms) == 'CIF' ? 'selected' : '' }}>
                                                CIF</option>
                                            <option value="DAP"
                                                {{ old('incoterms', $quote->incoterms) == 'DAP' ? 'selected' : '' }}>
                                                DAP</option>
                                            <option value="DDP"
                                                {{ old('incoterms', $quote->incoterms) == 'DDP' ? 'selected' : '' }}>
                                                DDP</option>
                                        </select>
                                        @error('incoterms')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="box" class="form-label">Number of Boxes <span
                                                class="text-red-500">*</span></label>
                                        <input type="number" id="box" name="box" min="1"
                                            value="{{ old('box', $quote->box) }}"
                                            class="form-input @error('box') is-invalid @enderror" required>
                                        @error('box')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="city_departure" class="form-label">Departure City <span
                                                class="text-red-500">*</span></label>
                                        <input type="text" id="city_departure" name="city_departure"
                                            value="{{ old('city_departure', $quote->city_departure) }}"
                                            class="form-input @error('city_departure') is-invalid @enderror" required>
                                        @error('city_departure')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="delivery_city" class="form-label">Delivery City <span
                                                class="text-red-500">*</span></label>
                                        <input type="text" id="delivery_city" name="delivery_city"
                                            value="{{ old('delivery_city', $quote->delivery_city) }}"
                                            class="form-input @error('delivery_city') is-invalid @enderror" required>
                                        @error('delivery_city')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="lg:col-span-3">
                                        <label for="current_location" class="form-label">Current Location</label>
                                        <input type="text" id="current_location" name="current_location"
                                            value="{{ old('current_location', $quote->current_location) }}"
                                            class="form-input @error('current_location') is-invalid @enderror">
                                        @error('current_location')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Package Dimensions -->
                            <div class="py-6">
                                <h3
                                    class="text-lg font-semibold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
                                    <i class="ri-package-line text-orange-500"></i> Package Dimensions
                                </h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                                    <div>
                                        <label for="weight" class="form-label">Weight (kg) <span
                                                class="text-red-500">*</span></label>
                                        <input type="number" step="0.01" id="weight" name="weight"
                                            value="{{ old('weight', $quote->weight) }}"
                                            class="form-input @error('weight') is-invalid @enderror" required>
                                        @error('weight')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="height" class="form-label">Height (cm) <span
                                                class="text-red-500">*</span></label>
                                        <input type="number" step="0.01" id="height" name="height"
                                            value="{{ old('height', $quote->height) }}"
                                            class="form-input @error('height') is-invalid @enderror" required>
                                        @error('height')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="width" class="form-label">Width (cm) <span
                                                class="text-red-500">*</span></label>
                                        <input type="number" step="0.01" id="width" name="width"
                                            value="{{ old('width', $quote->width) }}"
                                            class="form-input @error('width') is-invalid @enderror" required>
                                        @error('width')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="length" class="form-label">Length (cm) <span
                                                class="text-red-500">*</span></label>
                                        <input type="number" step="0.01" id="length" name="length"
                                            value="{{ old('length', $quote->length) }}"
                                            class="form-input @error('length') is-invalid @enderror" required>
                                        @error('length')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Additional Services -->
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                                    <div
                                        class="space-y-3 p-4 bg-blue-50 dark:bg-blue-900/10 rounded-lg border border-blue-200 dark:border-blue-800">
                                        <label class="flex items-center gap-3">
                                            <input type="checkbox" id="express_delivery" name="express_delivery"
                                                value="1"
                                                {{ old('express_delivery', $quote->express_delivery) ? 'checked' : '' }}
                                                class="form-checkbox">
                                            <span class="font-medium text-blue-800 dark:text-blue-200">Express
                                                Delivery</span>
                                            <span
                                                class="ml-auto text-sm text-blue-600 dark:text-blue-400 font-semibold">+20%</span>
                                        </label>
                                        @error('express_delivery')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div
                                        class="space-y-3 p-4 bg-green-50 dark:bg-green-900/10 rounded-lg border border-green-200 dark:border-green-800">
                                        <label class="flex items-center gap-3">
                                            <input type="checkbox" id="insurance" name="insurance" value="1"
                                                {{ old('insurance', $quote->insurance) ? 'checked' : '' }}
                                                class="form-checkbox">
                                            <span
                                                class="font-medium text-green-800 dark:text-green-200">Insurance</span>
                                            <span
                                                class="ml-auto text-sm text-green-600 dark:text-green-400 font-semibold">+$50</span>
                                        </label>
                                        @error('insurance')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div
                                        class="space-y-3 p-4 bg-purple-50 dark:bg-purple-900/10 rounded-lg border border-purple-200 dark:border-purple-800">
                                        <label class="flex items-center gap-3">
                                            <input type="checkbox" id="packaging" name="packaging" value="1"
                                                {{ old('packaging', $quote->packaging) ? 'checked' : '' }}
                                                class="form-checkbox">
                                            <span class="font-medium text-purple-800 dark:text-purple-200">Custom
                                                Packaging</span>
                                            <span
                                                class="ml-auto text-sm text-purple-600 dark:text-purple-400 font-semibold">+$25</span>
                                        </label>
                                        @error('packaging')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Package Content -->
                            <div class="pt-6">
                                <h3
                                    class="text-lg font-semibold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
                                    <i class="ri-file-text-line text-purple-500"></i> Package Content
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <label for="package_content" class="form-label">Description</label>
                                        <textarea id="package_content" name="package_content" rows="4"
                                            class="form-input @error('package_content') is-invalid @enderror"
                                            placeholder="Describe the contents of the package...">{{ old('package_content', $quote->package_content) }}</textarea>
                                        @error('package_content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let imageFiles = {
            1: null,
            2: null,
            3: null,
            4: null
        };

        function previewImage(index, input) {
            const file = input.files[0];
            if (file) {
                imageFiles[index] = file;
                const reader = new FileReader();
                reader.onload = function(e) {
                    const container = document.querySelector(`#imagePreview .group/image-${index}`);
                    container.innerHTML = `
                        <img src="${e.target.result}" alt="Preview ${index}" class="w-full h-20 object-cover rounded-lg shadow-sm">
                        <button type="button" onclick="removeImage(${index})" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs shadow-lg">
                            <i class="ri-close-line"></i>
                        </button>
                        <input type="hidden" name="remove_image_${index}" id="remove_image_${index}" value="0">
                        <input type="file" name="image_${index}" accept="image/*" onchange="previewImage(${index}, this)" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                    `;
                };
                reader.readAsDataURL(file);
            }
        }

        function removeImage(index) {
            imageFiles[index] = null;
            document.getElementById(`remove_image_${index}`).value = 1;
            const container = document.querySelector(`#imagePreview .group/image-${index}`);
            container.innerHTML = `
                <label for="image_${index}" class="w-full h-20 bg-gray-100 dark:bg-dark-card-two rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300 dark:border-dark-border-two text-gray-400 hover:bg-gray-50 dark:hover:bg-dark-card-two/50 transition-colors cursor-pointer">
                    <i class="ri-camera-add-line text-xl"></i>
                    <input type="file" id="image_${index}" name="image_${index}" accept="image/*" onchange="previewImage(${index}, this)" class="hidden">
                </label>
            `;
        }

        function validateAndSubmit() {
            const form = document.getElementById('editQuoteForm');
            if (form.checkValidity()) {
                calculateTotalPrice();
                form.submit();
            } else {
                form.reportValidity();
                showToast('Please fill all required fields!', 'error');
            }
        }

        function calculateTotalPrice() {
            const weight = parseFloat(document.getElementById('weight').value) || 0;
            let basePrice = weight * 5; // Base price: $5 per kg
            let total = basePrice;
            if (document.getElementById('express_delivery').checked) total *= 1.2;
            if (document.getElementById('insurance').checked) total += 50;
            if (document.getElementById('packaging').checked) total += 25;
            document.getElementById('newPrice').value = total.toFixed(2);
            document.getElementById('oldPrice').textContent = `$${basePrice.toFixed(2)}`;
        }

        document.addEventListener('DOMContentLoaded', () => {
            ['weight', 'express_delivery', 'insurance', 'packaging'].forEach(id => {
                const element = document.getElementById(id);
                if (element) {
                    element.addEventListener('change', calculateTotalPrice);
                }
            });
            calculateTotalPrice();
        });

        function showToast(message, type = 'info') {
            const toast = document.createElement('div');
            toast.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out ${
                type === 'success' ? 'bg-green-500 text-white' : type === 'error' ? 'bg-red-500 text-white' : 'bg-blue-500 text-white'
            }`;
            toast.innerHTML = `
                <div class="flex items-center gap-3">
                    <i class="ri-${type === 'success' ? 'checkbox-circle' : type === 'error' ? 'error-warning' : 'information'}-line text-lg"></i>
                    <span>${message}</span>
                    <button onclick="this.parentElement.parentElement.remove()" class="ml-auto text-white hover:text-gray-200">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            `;
            document.body.appendChild(toast);
            setTimeout(() => toast.classList.remove('translate-x-full'), 100);
            setTimeout(() => {
                toast.classList.add('translate-x-full');
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }
    </script>

    <style>
        .form-checkbox {
            @apply w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2;
        }

        .form-select {
            @apply block w-full px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-dark-card dark:border-dark-border dark:text-gray-300;
        }

        .form-input {
            @apply block w-full px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-dark-card dark:border-dark-border dark:text-gray-300;
        }

        .form-input-sm {
            @apply px-2 py-1 text-sm;
        }

        .is-invalid {
            @apply border-red-500 bg-red-50 dark:bg-red-900/10 focus:border-red-500 focus:ring-red-500;
        }

        .invalid-feedback {
            @apply text-red-600 dark:text-red-400 text-sm mt-1;
        }

        .btn {
            @apply inline-flex items-center justify-center px-4 py-2 text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2;
        }

        .btn-primary {
            @apply bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-500;
        }

        .btn-secondary {
            @apply bg-gray-600 text-white hover:bg-gray-700 focus:ring-gray-500;
        }

        .btn-outline-secondary {
            @apply border border-gray-300 text-gray-700 hover:bg-gray-50 dark:border-dark-border dark:text-gray-300 dark:hover:bg-dark-card-two;
        }

        .flex-center {
            @apply flex items-center justify-center;
        }
    </style>
</x-app-layout>
