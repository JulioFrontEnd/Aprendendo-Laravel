@extends("layout.user")

@section("title","Envie imagem")
@section("content")
<div class="container">
    <h1 class="text-center lead display-4">Tester de imagem</h1>
    <div class="container" style="border: 1px solid #cecece;">
        
        <form class="d-flex flex-column p-2" method="post" action="{{route('Tester.enviar')}}" 
        enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nome da imagem</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escreva aqui ,__," name="title">
                <small id="emailHelp" class="form-text text-muted">
                    Pense em um bom nome !
                </small>
            </div>
            <div class="form-group">
                <label for="imagem">Adicione uma imagem</label>
                <input type="file" class="form-control-file" id="imagem" name="imagem">
            </div>
            <button type="submit" class="btn btn-outline-success">Submit</button>
        </form>
    </div>
</div>
@endsection