<x-app-layout>


    <div class="flex justify-center items-center min-h-screen">
        <!-- Primeiro card -->
        <div class="p-6 m-4">
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="flex justify-center items-center px-10 pt-10">
                    <div class="avatar">
                        <div class="w-24 rounded-xl">
                          <img src="https://ui-avatars.com/api/?name={{$categorys}}&background=ff3903&color=fff" />
                        </div>
                    </div>
                </div>
                <div class="card-body items-center text-center">
                  <h2 class="card-title">Categorias</h2>
                  <p>Atualmente temos {{$categorys}} categorias cadastradas</p>
                  <div class="card-actions">
                    <button class="btn btn-wide btn-primary" href="/categorias/index" >
                        <a href="/categorias">
                            Visualizar
                        </a>
                        </button>
                  </div>
                </div>
            </div>
        </div>

        <!-- Segundo card (duplicado e centralizado) -->
        <div class="p-6 m-4">
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="flex justify-center items-center px-10 pt-10">
                    <div class="avatar">
                        <div class="w-24 rounded-xl">
                          <img src="https://ui-avatars.com/api/?name={{$news}}&background=ff3193&color=fff" />
                        </div>
                    </div>
                </div>
                <div class="card-body items-center text-center">
                  <h2 class="card-title">Notícias</h2>
                  <p>Atualmente temos {{$news}} noticias cadastradas</p>
                  <div class="card-actions">
                    <button class="btn btn-wide btn-primary">
                        <a href="/noticias">
                            Visualizar
                        </a></button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
