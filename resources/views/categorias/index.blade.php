<x-app-layout>

    <div class="flex justify-center items-center pt-5">
        <button class="btn btn-accent btn-wide">
            <a href="{{ route('categorias.create') }}">
                Cadastar Categoria
            </a>
        </button>
    </div>
    <div class="flex justify-center items-center pt-5">
        <div class="row">
            <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $key => $category)
                        <tr>
                            <th>{{$category->id}}</th>
                            <td>{{$category->name}}</td>
                            <td><button class="btn btn-info">
                                    <a href="{{ route('categorias.edit', $category->id) }}">
                                        Editar
                                    </a>
                                </button>
                            </td>
                            <td>
                                <form method="POST" action="{{route('categorias.destroy', $category->id) }}"  >
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-error">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        <div class="mt-4 flex justify-center items-center">
            {{$categories->links()}}
        </div>
    </div>
</x-app-layout>
