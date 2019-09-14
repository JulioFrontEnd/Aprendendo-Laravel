@extends("layout.user")

@section("title","Pagina de contatos")
@section("content")
<div class="container-fluid">
    <h1 class="lead">PAGINA DE CONTATOS | CONSULTE NOSSOS SERVIÇOS NO NUMERO: (XX) XXXX-XXXX</h1>
    <table class="table table-bordered table-hover w-100 text-center" style="cursor: pointer;">
            <tr>
                <th>NOME</th>
                <th>TELEFONE</th>
                <th>CARGO</th>
            </tr>
    @foreach ($var as $key)
            <tr>
                <td><a href="./sobre/{{$key->nome}}">{{ $key->nome }}</a></td>
                <td>{{ $key->tel }}</td>
                <td>{{$key->cargo}}</td>
            </tr>
    @endforeach        
    </table>
</div>
@endsection