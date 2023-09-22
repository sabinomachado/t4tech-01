<x-app-layout>

    <div class="flex justify-center items-center pt-3">
        <form method="POST" action="{{ route('noticias.store') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <x-input-label for="title" :value="__('Título')" />

                <x-text-input id="title" class="block mt-1 w-full"
                                type="text"
                                name="title"
                                 />

                <x-input-error :messages="$errors->get('title')" class="mt-2" />

                <x-input-label for="conteudo" :value="__('Conteúdo')" />

                <x-forms.tinymce-editor id="content"/>

                <x-input-error :messages="$errors->get('content')" class="mt-2" />


               <x-input-label for="category_id" :value="__('Categoria')" />


                    <select name="category_id" id="category_id">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}"> {{$category->name}} </option>
                        @endforeach
                    </select>


                    <x-input-error :messages="$errors->get('category_id')" class="mt-2" />

                <x-primary-button>
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </div>
  </x-app-layout>
