<x-app-layout>
    <main>
        <div
            class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
            <div class="card p-0 overflow-hidden">
                <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                    <div>
                        <h6 class="card-title">List of Tracking Codes</h6>
                    </div>
                    <button type="button" data-modal-target="addAddressModal" data-modal-toggle="addAddressModal"
                        class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5">
                        <span class="shrink-0">Create Tracking Code</span>
                    </button>
                </div>

                <div class="overflow-x-auto scrollbar-table">
                    <table
                        class="table-auto w-full whitespace-nowrap text-left text-gray-900 dark:text-dark-text font-medium leading-none">
                        <thead
                            class="border-b-[0.5px] border-gray-200 dark:border-dark-border text-gray-500 dark:text-dark-text font-semibold">
                            <tr>
                                <th class="px-7 py-6">First Name</th>
                                <th class="px-7 py-6">Last Name</th>
                                <th class="px-7 py-6">Email</th>
                                <th class="px-7 py-6">Tracking Id</th>
                                <th class="px-7 py-6">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                            @foreach ($quotes as $quote)
                                <tr
                                    class="hover:bg-primary-200/50 dark:hover:bg-dark-icon hover:text-gray-500 dark:hover:text-dark-text group/tr">
                                    <td class="px-7 py-6">{{ $quote->first_name }}</td>
                                    <td class="px-7 py-6">{{ $quote->last_name }}</td>
                                    <td class="px-7 py-6">{{ $quote->email }}</td>
                                    <td class="px-7 py-6">
                                        <div class="flex items-center gap-2">
                                            <span>{{ $quote->tracking_id }}</span>
                                            <button type="button"
                                                onclick="copyToClipboard('{{ $quote->tracking_id }}')"
                                                class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon"
                                                title="Copy">
                                                <i class="ri-file-copy-line text-gray-500"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="px-7 py-6">
                                        <div class="flex items-center gap-1">
                                            <a href="{{ route('details', $quote) }}"
                                                class="size-7 rounded-50 flex-center hover:bg-blue-100 dark:hover:bg-dark-icon/50"
                                                title="View">
                                                <i class="ri-eye-line text-blue-600"></i>
                                            </a>
                                            <a href="{{ route('edits', $quote) }}"
                                                class="size-7 rounded-50 flex-center hover:bg-blue-100 dark:hover:bg-dark-icon/50"
                                                title="Edit">
                                                <i class="ri-edit-2-fill text-blue-600"></i>
                                            </a>

                                            <button type="button" data-modal-target="deleteModal{{ $quote->id }}"
                                                data-modal-toggle="deleteModal{{ $quote->id }}"
                                                class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon"
                                                title="Delete">
                                                <i class="ri-delete-bin-6-line text-red-500"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add Modal -->
        <div id="addAddressModal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-modal w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white dark:bg-dark-card-shade rounded-lg shadow">
                    <button type="button" data-modal-hide="addAddressModal"
                        class="absolute top-3 end-2.5 hover:bg-gray-200 dark:hover:bg-dark-icon rounded-lg size-8 flex-center">
                        <i class="ri-close-line text-gray-500 dark:text-dark-text text-xl"></i>
                    </button>
                    <div class="p-4 md:p-5">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-dark-text mb-4">Add Shipping Details
                        </h3>

                        <form action="{{ route('stay') }}" method="POST" enctype="multipart/form-data"
                            id="editQuoteForm">
                            @csrf
                            <div>
                                <label class="form-label">First Name</label>
                                <input type="text" name="first_name" class="form-input w-full"
                                    placeholder="First Name" value="{{ old('first_name') }}" required>
                                @error('first_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-input w-full" placeholder="Last Name"
                                    value="{{ old('last_name') }}" required>
                                @error('last_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-input w-full" placeholder="Your Email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone_number" class="form-input w-full"
                                    placeholder="Your Phone Number" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Shipment Type</label>
                                <select name="shipment_type" class="form-select w-full" required>
                                    <option value="">Shipment Type</option>
                                    @foreach ($shipmentTypes as $type)
                                        <option value="{{ $type }}"
                                            {{ old('shipment_type') == $type ? 'selected' : '' }}>{{ $type }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('shipment_type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Incoterms</label>
                                <select name="incoterms" class="form-select w-full" required>
                                    <option value="">Incoterms</option>
                                    @foreach ($incoterms as $term)
                                        <option value="{{ $term }}"
                                            {{ old('incoterms') == $term ? 'selected' : '' }}>{{ $term }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('incoterms')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Departure City</label>
                                <input type="text" name="city_departure" class="form-input w-full"
                                    placeholder="City Type Departure" value="{{ old('city_departure') }}" required>
                                @error('city_departure')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Delivery City</label>
                                <input type="text" name="delivery_city" class="form-input w-full"
                                    placeholder="Delivery City" value="{{ old('delivery_city') }}" required>
                                @error('delivery_city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Weight (kg)</label>
                                <input type="number" step="0.01" name="weight" class="form-input w-full"
                                    placeholder="Weight lbs" value="{{ old('weight') }}" required>
                                @error('weight')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Height (cm)</label>
                                <input type="number" step="0.01" name="height" class="form-input w-full"
                                    placeholder="Height in" value="{{ old('height') }}" required>
                                @error('height')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Width (cm)</label>
                                <input type="number" step="0.01" name="width" class="form-input w-full"
                                    placeholder="Width in" value="{{ old('width') }}" required>
                                @error('width')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Length (cm)</label>
                                <input type="number" step="0.01" name="length" class="form-input w-full"
                                    placeholder="Length in" value="{{ old('length') }}" required>
                                @error('length')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Number of Boxes</label>
                                <input type="number" name="box" class="form-input w-full"
                                    placeholder="Number Of Boxes" value="{{ old('box') }}" required>
                                @error('box')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Images (Max-4)</label>
                                <input type="file" name="images[]" class="form-input w-full" multiple
                                    accept="image/*">
                                @error('images.*')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="form-label">Package Content</label>
                                <textarea name="package_content" class="form-input w-full" placeholder="Package Details" rows="4">{{ old('package_content') }}</textarea>
                                @error('package_content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="checkbox" name="express_delivery" value="1"
                                    {{ old('express_delivery') ? 'checked' : '' }}>
                                <label>Express Delivery</label>
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="checkbox" name="insurance" value="1"
                                    {{ old('insurance') ? 'checked' : '' }}>
                                <label>Insurance</label>
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="checkbox" name="packaging" value="1"
                                    {{ old('packaging') ? 'checked' : '' }}>
                                <label>Custom Packaging</label>
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="submit" class="btn b-solid btn-primary-solid btn-sm">Request For A
                                    Quote</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($quotes as $quote)
            <!-- Delete Modal -->
            <div id="deleteModal{{ $quote->id }}" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-modal w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white dark:bg-dark-card-shade rounded-lg shadow">
                        <button type="button" data-modal-hide="deleteModal{{ $quote->id }}"
                            class="absolute top-3 end-2.5 hover:bg-gray-200 dark:hover:bg-dark-icon rounded-lg size-8 flex-center">
                            <i class="ri-close-line text-gray-500 dark:text-dark-text text-xl"></i>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <img src="/dash/images/icons/delete-record.png" alt="delete"
                                class="block h-12 mx-auto" />
                            <div class="mt-5">
                                <h5 class="mb-1">Are you sure?</h5>
                                <p class="text-gray-500 dark:text-dark-text">Delete tracking code
                                    <strong>{{ $quote->tracking_id }}</strong>?
                                </p>
                                <div class="flex justify-center gap-2 mt-6">
                                    <button type="button" data-modal-hide="deleteModal{{ $quote->id }}"
                                        class="btn b-light btn-danger-light btn-sm">Cancel</button>
                                    <form action="{{ route('quotes.destroy', $quote) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn b-solid btn-danger-solid btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>

    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                const btn = event.target.closest('button');
                const icon = btn.querySelector('i');
                const originalIcon = icon.className;
                icon.className = 'ri-check-line text-green-600';

                setTimeout(() => {
                    icon.className = originalIcon;
                }, 1500);
            });
        }
    </script>
</x-app-layout>
