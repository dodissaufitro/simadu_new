<x-filament::page>
    <form wire:submit.prevent="save" class="space-y-6">
        {{ $this->form }}

        <div class="flex items-center justify-between mt-6">
            <a href="{{ route('filament.admin.pages.edit-password') }}" class="text-primary-600 hover:underline">
                Change Password
            </a>

            <x-filament::button type="submit">
                Save Changes
            </x-filament::button>
        </div>
    </form>
</x-filament::page>
