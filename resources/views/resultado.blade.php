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
<h2>Resultado questao 5</h2>
@if (isset($nome) && isset($tipo))
    <div style="border: solid 1px #000; width: 300px; height: 100px;">
        <p>Nome do Livro: {{$nome}}</p>
        <p>Tipo de pessoa: {{$tipo}}</p>
        <p>Prazo de devolução: {{$tempo}} dias.</p>
    </div>
@endif
<hr>
<h2>Resultado questao 6</h2>
@if (isset($tabuada))
    @foreach ($tabuada as $key => $tab)
        <p>{{$numero}} * {{$key}} = {{$tab}}</p>
    @endforeach
@endif
<hr>
