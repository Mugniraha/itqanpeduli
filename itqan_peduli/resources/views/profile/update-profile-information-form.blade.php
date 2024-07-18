<x-form-section submit="updateProfileInformation" class="bg-white max-w-[512px] mx-auto p-4">
    <x-slot name="title">
        {{-- {{ __('Profil Saya') }} --}}
        <div class="flex my-6">
            <a href="{{ url('/akun') }}" type="button"
                class="text-white  ms-0 bg-white shadow-md hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                <svg class="w-4 h-4  text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
            </a>
            <p class="text-center mx-6 mt-1.5 font-semibold text-xl">Edit Profile</p>
        </div>
    </x-slot>

    <x-slot name="description">
        {{-- {{ __('Update your account\'s profile information and email address.') }} --}}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{ photoName: null, photoPreview: null }" class=" col-span-6 ">
                <!-- Profile Photo File Input -->
                <input type="file" id="photo" class="hidden" wire:model.live="photo" x-ref="photo"
                    x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2 flex justify-center" x-show="! photoPreview">
                    <img src="{{ Storage::url($this->user->profile_photo_path) }}" alt="{{ $this->user->name }}"
                        class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                        x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>
                <div class="flex justify-center">
                    <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('Select A New Photo') }}
                    </x-secondary-button>

                    @if ($this->user->profile_photo_path)
                        <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                            {{ __('Remove Photo') }}
                        </x-secondary-button>
                    @endif
                </div>


                <x-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Jenis Duta -->
        <div class="relative col-span-6">
            <x-label for="jenis_duta" value="{{ __('Jenis Duta') }}" />
            {{-- <x-input id="jenis_duta" type="text" class="mt-1 block w-full" wire:model="state.jenis_duta" required
                autocomplete="name" placeholder="Perorangan" /> --}}
            <select id="jenis_duta" wire:model="state.jenis_duta" required autocomplete="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Perorangan</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>
            <x-input-error for="jenis_duta" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="relative col-span-6">
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" required
                autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="relative col-span-6 ">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model="state.email" required
                autocomplete="username" />
            <x-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
                    !$this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button type="button"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>
        <!-- Phone Number -->
        <div class="relative col-span-6">
            <x-label for="phone_number" value="{{ __('No telepon') }}" />
            <x-input id="phone_number" type="text" class="mt-1 block w-full" wire:model="state.phone_number" required
                autocomplete="name" />
            <x-input-error for="phone_number" class="mt-2" />
        </div>
        <!-- Provinsi -->
        <div class="relative col-span-6">
            <x-label for="provinsi" value="{{ __('Provinsi') }}" />
            {{-- <x-input id="provinsi" type="text" class="mt-1 block w-full" wire:model="state.provinsi" required
                autocomplete="name" placeholder="Provinsi" /> --}}
            <select id="provinsi" wire:model="state.provinsi" required autocomplete="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Jawa Barat</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>
            <x-input-error for="provinsi" class="mt-2" />
        </div>
        <!-- Kabkota -->
        <div class="relative col-span-6">
            <x-label for="kabkota" value="{{ __('Kab/Kota') }}" />
            {{-- <x-input id="kabkota" type="text" class="mt-1 block w-full"  placeholder="Kab/Kota" /> --}}
            <select id="kabkota" wire:model="state.kabkota" required autocomplete="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Kab. Bandung</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>
            <x-input-error for="kabkota" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
