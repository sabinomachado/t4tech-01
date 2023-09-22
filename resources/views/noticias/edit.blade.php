<x-app-layout>
    <div class="flex justify-center items-center pt-3">
        <form method="POST" action="{{ route('noticias.update', $new->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="title" :value="__('Título')" />

                <x-text-input id="title" class="block mt-1 w-full"
                              type="text"
                              name="title"
                              value="{{$new->title}}"

                />

                <x-input-error :messages="$errors->get('title')" class="mt-2" />

                <x-input-label for="conteudo" :value="__('Conteúdo')" />

                //TO-DO: PASSAR VALOR OLD PARA O EDITOR
                <x-forms.tinymce-editor id="content" />

                <x-input-error :messages="$errors->get('content')" class="mt-2" />


                <x-input-label for="category_id" :value="__('Categoria')" />

                <select name="category_id" id="category_id">
                    @foreach($categories as $category)
                            <option value="{{$category->id}}"  @if($category->id == $new->category_id) selected @endif> {{$category->name}} </option>
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
