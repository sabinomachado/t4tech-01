<x-app-layout>

  <div class="flex justify-center items-center pt-5">
    <button class="btn btn-accent btn-wide">
      <a href="{{ route('noticias.create') }}">
          Cadastar Notícia
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
                  <th>Categoria</th>
                  <th>Editar</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($news as $key => $n)
                  <tr>
                    <th>{{$n->id}}</th>
                    <td>{{$n->title}}</td>
                    <td>{{$n->category['name']}}</td>
                    <td><button class="btn btn-info">
                            <a href="{{ route('noticias.edit', $n->id) }}">
                                Editar
                            </a>
                        </button>
                    </td>
                      <td>
                          <form method="POST" action="{{route('noticias.destroy', $n->id) }}"  >
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
        {{$news->links()}}
      </div>
    </div>
</x-app-layout>
