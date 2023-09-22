<x-app-layout>
    <div class="flex justify-center items-center pt-10">
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
                    <td><button class="btn btn-info">Editar</button></td>
                    <td><button class="btn btn-error">Excluir</button></td>
                  </tr>
                    @endforeach
              </tbody>
            </table>
          </div>
    </div>
</x-app-layout>
