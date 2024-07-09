<div class="row">
    Senhas chamadas
</div>
<div class="row">
@foreach($chamadas as $chamada)
    <div class="col">{{ $chamada->senha}}<br>{{ $chamada->nome}}</div>
@endforeach
</div>
