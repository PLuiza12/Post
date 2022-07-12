<h1>EDitando: {{$post->titulo}}</h1>

<form action="/update-post/{{$post->id}}" method="POST">
   @csrf
   @method('PUT')
    <input type="text" name="titulo" placeholder="titulo" value="{{$post->titulo}}">
    <input type="text" name="texto" placeholder="texto" value="{{$post->texto}}">
    <input type="submit" value="enviar">
</form>