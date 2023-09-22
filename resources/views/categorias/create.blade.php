<x-app-layout>

    <div class="flex justify-center items-center pt-3">
        <form method="POST" action="{{ route('categorias.store') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <x-input-label for="name" :value="__('Título')" />

                <x-text-input id="name" class="block mt-1 w-full"
                              type="text"
                              name="name"
                />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />


                <x-primary-button>
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
