<x-filament::page>
    {{ $this->infolist }}

    <div class="mt-6">
        <x-filament::card>
            <div class="flex flex-col md:flex-row gap-4">
                <a
                    href="{{ route('filament.admin.pages.edit-profile') }}"
                    class="flex items-center justify-center px-6 py-3 bg-primary-600 text-white font-semibold rounded-lg hover:bg-primary-700 transition-all duration-300 w-full md:w-auto"
                >
                    ✏️ Edit Profile
                </a>
                <a
                    href="{{ route('filament.admin.pages.edit-password') }}"
                    class="flex items-center justify-center px-6 py-3 bg-primary-600 text-white font-semibold rounded-lg hover:bg-primary-700 transition-all duration-300 w-full md:w-auto"
                >
                    🔒 Change Password
                </a>

                {{-- <a
                    href="{{ route('filament.admin.pages.edit-password') }}"
                    class="flex items-center justify-center px-6 py-3 bg-pink-600 text-white font-semibold rounded-lg hover:bg-pink-700 transition-all duration-300 w-full md:w-auto"
                >
                    🔒 Change Password
                </a> --}}
            </div>

        </x-filament::card>
    </div>
</x-filament::page>
