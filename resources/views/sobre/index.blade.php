@extends("layout.user")

@section("title","Pagina sobre: ")

<div class="container-fluid">
    <h1 class="lead">PAGINA DE CONTATOS | CONSULTE NOSSOS SERVIÇOS NO NUMERO: XXXXX-XXXX</h1>
    <table class="table table-bordered table-hover w-100 text-center">
            <tr>
                <th>NOME</th>
                <th>TELEFONE</th>
                <th>CARGO</th>
            </tr>
    @foreach ($var as $key)
            <tr>
                <td>{{ $key->nome }}</td>
                <td>{{ $key->tel }}</td>
                <td>{{$key->cargo}}</td>
            </tr>
    @endforeach

    </table>
</div>