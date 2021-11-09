<h2>Resultado questao 1</h2>
@if (isset($media) && $media)
    <p>Aprovado</p>
@else
    <p>Reprovado</p>
@endif
<hr>
<h2>Resultado questao 2</h2>
@if (isset($resultado))
    <p>{{$resultado}}</p>
@endif
<hr>
<h2>Resultado questao 3</h2>
@if (isset($valoresAsc))
    @foreach ($valoresAsc as $val)
        <p>{{$val}}</p>
    @endforeach
@endif
<hr>
<h2>Resultado questao 4</h2>
@if (isset($valoresDesc))
    @foreach ($valoresDesc as $val)
        <p>{{$val}}</p>
    @endforeach
@endif
<hr>
