<x-guest-layout>
    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <div class="mt-10 sm:mt-0">
            @livewire('profile.update-password-form')
        </div>
    
        <x-section-border />
    @endif

</x-guest-layout>