<x-app-layout>
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12 gap-x-6 gap-y-6">

            <!-- Profile Card -->
            <div class="col-span-full lg:col-span-4">
                <div
                    class="bg-white dark:bg-dark-card rounded-xl shadow-sm border border-gray-100 dark:border-dark-border overflow-hidden">
                    <div class="p-6 text-center">
                        <div class="relative inline-block">
                            <div
                                class="w-24 h-24 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex-center text-white text-2xl font-bold mx-auto mb-4 overflow-hidden">
                                @if ($quote->image_1)
                                    <img src="{{ asset('storage/' . $quote->image_1) }}" alt="Package Image"
                                        class="w-full h-full object-cover rounded-full">
                                @else
                                    <i class="ri-package-line text-3xl"></i>
                                @endif
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">
                            {{ $quote->first_name }} {{ $quote->last_name }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">{{ $quote->email }}</p>

                        <div class="flex items-center justify-center gap-2 mb-6">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-{{ strtolower($quote->status) }}-100 text-{{ strtolower($quote->status) }}-800">
                                {{ $quote->status }}
                            </span>
                        </div>

                        <div class="space-y-4">
                            <div
                                class="flex items-center justify-between p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Tracking ID</span>
                                <div class="flex items-center gap-2">
                                    <code
                                        class="font-mono text-sm font-bold text-blue-600">{{ $quote->tracking_id }}</code>
                                    <button onclick="copyToClipboard('{{ $quote->tracking_id }}')"
                                        class="p-1.5 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                                        <i class="ri-file-copy-line text-gray-500"></i>
                                    </button>
                                </div>
                            </div>

                            <div
                                class="flex items-center justify-between p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Total Price</span>
                                <span
                                    class="text-lg font-bold text-green-600">${{ number_format($quote->price ?? 0, 2) }}</span>
                            </div>

                            <div
                                class="flex items-center justify-between p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Boxes</span>
                                <span
                                    class="text-lg font-bold text-gray-900 dark:text-white">{{ $quote->box }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Details Form -->
            <div class="col-span-full lg:col-span-8">
                <div
                    class="bg-white dark:bg-dark-card rounded-xl shadow-sm border border-gray-100 dark:border-dark-border overflow-hidden">
                    <div
                        class="px-6 py-4 border-b border-gray-200 dark:border-dark-border bg-gray-50 dark:bg-dark-card-two">
                        <div class="flex items-center justify-between">
                            <h2 class="text-xl font-bold text-gray-900 dark:text-white">Quote Details</h2>
                            <div class="flex gap-3">
                                <a href="{{ route('edits', $quote) }}"
                                    class="btn btn-outline-primary px-4 py-2">
                                    <i class="ri-edit-2-line"></i> Edit
                                </a>
                                <a href="{{ route('dashboard') }}" class="btn btn-secondary px-4 py-2">
                                    <i class="ri-arrow-left-line"></i> Back
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <!-- Basic Info -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">First
                                    Name</label>
                                <div
                                    class="p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg font-medium text-gray-900 dark:text-white">
                                    {{ $quote->first_name }}
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Last
                                    Name</label>
                                <div
                                    class="p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg font-medium text-gray-900 dark:text-white">
                                    {{ $quote->last_name }}
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
                                <div
                                    class="p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg font-medium text-gray-900 dark:text-white">
                                    {{ $quote->phone_number ?? 'N/A' }}
                                </div>
                            </div>
                            <div class="space-y-2 md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                <div
                                    class="p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg font-medium text-gray-900 dark:text-white">
                                    {{ $quote->email }}
                                </div>
                            </div>
                        </div>

                        <!-- Shipment Details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div>
                                <h3
                                    class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                                    <i class="ri-truck-line text-blue-500"></i> Shipment Details
                                </h3>
                                <div class="space-y-4">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="space-y-2">
                                            <label
                                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Shipment
                                                Type</label>
                                            <div
                                                class="p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg border border-blue-200 dark:border-blue-800">
                                                <span
                                                    class="font-medium text-blue-800 dark:text-blue-200">{{ $quote->shipment_type }}</span>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <label
                                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Incoterms</label>
                                            <div
                                                class="p-3 bg-purple-50 dark:bg-purple-900/20 rounded-lg border border-purple-200 dark:border-purple-800">
                                                <span
                                                    class="font-medium text-purple-800 dark:text-purple-200">{{ $quote->incoterms }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="space-y-2">
                                            <label
                                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Departure
                                                City</label>
                                            <div class="p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                                {{ $quote->city_departure }}
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <label
                                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Delivery
                                                City</label>
                                            <div class="p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                                {{ $quote->delivery_city }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <label
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Current
                                            Location</label>
                                        <div class="p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                            {{ $quote->current_location ?? 'N/A' }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3
                                    class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                                    <i class="ri-package-line text-green-500"></i> Package Details
                                </h3>
                                <div class="space-y-4">
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                        <div
                                            class="space-y-2 text-center p-3 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg">
                                            <label
                                                class="block text-xs font-medium text-yellow-700 dark:text-yellow-300">Weight
                                                (kg)</label>
                                            <div class="text-lg font-bold text-yellow-800 dark:text-yellow-200">
                                                {{ number_format($quote->weight, 2) }}
                                            </div>
                                        </div>
                                        <div
                                            class="space-y-2 text-center p-3 bg-green-50 dark:bg-green-900/20 rounded-lg">
                                            <label
                                                class="block text-xs font-medium text-green-700 dark:text-green-300">Height
                                                (cm)</label>
                                            <div class="text-lg font-bold text-green-800 dark:text-green-200">
                                                {{ number_format($quote->height, 2) }}
                                            </div>
                                        </div>
                                        <div
                                            class="space-y-2 text-center p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                                            <label
                                                class="block text-xs font-medium text-blue-700 dark:text-blue-300">Width
                                                (cm)</label>
                                            <div class="text-lg font-bold text-blue-800 dark:text-blue-200">
                                                {{ number_format($quote->width, 2) }}
                                            </div>
                                        </div>
                                        <div
                                            class="space-y-2 text-center p-3 bg-purple-50 dark:bg-purple-900/20 rounded-lg">
                                            <label
                                                class="block text-xs font-medium text-purple-700 dark:text-purple-300">Length
                                                (cm)</label>
                                            <div class="text-lg font-bold text-purple-800 dark:text-purple-200">
                                                {{ number_format($quote->length, 2) }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-y-3">
                                        <div
                                            class="flex items-center gap-4 p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                            <input type="checkbox" id="express"
                                                {{ $quote->express_delivery ? 'checked' : '' }} disabled
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                            <label for="express"
                                                class="text-sm font-medium text-gray-700 dark:text-gray-300">Express
                                                Delivery</label>
                                        </div>
                                        <div
                                            class="flex items-center gap-4 p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                            <input type="checkbox" id="insurance"
                                                {{ $quote->insurance ? 'checked' : '' }} disabled
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                            <label for="insurance"
                                                class="text-sm font-medium text-gray-700 dark:text-gray-300">Insurance</label>
                                        </div>
                                        <div
                                            class="flex items-center gap-4 p-3 bg-gray-50 dark:bg-dark-card-two rounded-lg">
                                            <input type="checkbox" id="packaging"
                                                {{ $quote->packaging ? 'checked' : '' }} disabled
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                            <label for="packaging"
                                                class="text-sm font-medium text-gray-700 dark:text-gray-300">Custom
                                                Packaging</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Info -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <h3
                                    class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                                    <i class="ri-file-text-line text-indigo-500"></i> Package Content
                                </h3>
                                <div class="p-4 bg-gray-50 dark:bg-dark-card-two rounded-lg min-h-[120px]">
                                    @if ($quote->package_content)
                                        <p class="text-gray-700 dark:text-gray-300 whitespace-pre-wrap">
                                            {{ $quote->package_content }}</p>
                                    @else
                                        <p class="text-gray-500 italic">No package content description provided</p>
                                    @endif
                                </div>
                            </div>

                            <div>
                                <h3
                                    class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                                    <i class="ri-image-line text-pink-500"></i> Package Images
                                </h3>
                                <div class="grid grid-cols-2 gap-3">
                                    @for ($i = 1; $i <= 4; $i++)
                                        @php $image = $quote->{"image_$i"}; @endphp
                                        <div class="relative group">

                                            @if ($image)
                                                <img src="{{ asset('storage/' . $image) }}"
                                                    alt="Package Image {{ $i }}"
                                                    class="w-full h-32 object-cover rounded-lg shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                                                <div
                                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 rounded-lg transition-all">
                                                </div>
                                            @else
                                                <div
                                                    class="w-full h-32 bg-gray-100 dark:bg-dark-card-two rounded-lg flex-center text-gray-400">
                                                    <i class="ri-image-line text-2xl"></i>
                                                </div>
                                            @endif
                                        </div>
                                    @endfor


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => {
            const toast = document.createElement('div');
            toast.className =
                'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 animate-slide-in-right';
            toast.textContent = 'Copied to clipboard!';
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);
        });
    }
</script>

<style>
    @keyframes slide-in-right {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .animate-slide-in-right {
        animation: slide-in-right 0.3s ease-out;
    }
</style>
