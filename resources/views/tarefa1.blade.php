<h2>Questão 1</h2>
<form action="{{route('tarefa1.questao1')}}" method="post">
    @csrf
    <div>
        <label for="nota1">Nota 1</label>
        <input type="text" name="nota[]" id="nota1">
    </div>
    <div>
        <label for="nota2">Nota 2</label>
        <input type="text" name="nota[]" id="nota2">
    </div>
    <div>
        <label for="nota3">Nota 3</label>
        <input type="text" name="nota[]" id="nota3">
    </div>
    <div>
        <label for="nota4">Nota 4</label>
        <input type="text" name="nota[]" id="nota4">
    </div>
    <div style="margin-top: 10px;">
        <button>Calcular</button>
    </div>
    
</form>
<hr>