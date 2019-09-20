<h1>{{$id}}</h1>
<form method="get" action="{{route('fruta')}}">
	@method('get')
	@csrf()
	Nome: <input type="text" name="nome">
	<input type="submit" value="enviar">
</form>