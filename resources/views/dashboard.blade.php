<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <table>
                        <tr>
                            <th>Titulo</th>
                            <th>Texto</th>
                        </tr>
                        @foreach(Auth::user()->post as $post)
                          <tr>
                               <td>{{$post->titulo}}</td>
                               <td>{{$post->texto}}</td>
                               <td>
                                  <form action="/apagar-post/{{$post->id}}" method="POST">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" name="Apagar" data-toogle="modal" data-target="data-exampleModal" onclick="return confirm('Tem certeza que deseja excluir esse Post');">Apagar</button>
                                  </form>
                                   <a href="/editar-post/{{$post->id}}" method="GET">editar</a>
                              </td>
                           </tr>
                        @endforeach
                    </table>
                    <form action="/add-post" method="POST">
                        @csrf
                        <input type="text" name="titulo" placeholder="titulo">
                        <input type="text" name="texto" placeholder="texto">
                        <input type="submit" value="enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
