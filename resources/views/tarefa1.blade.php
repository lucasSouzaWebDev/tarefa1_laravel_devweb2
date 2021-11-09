<h2>Questão 1</h2>
<form action="{{route('tarefa1.questao1')}}" method="post">
    @csrf
    <div>
        <label for="nota1">Nota 1: </label>
        <input type="text" name="nota[]" id="nota1">
    </div>
    <div>
        <label for="nota2">Nota 2: </label>
        <input type="text" name="nota[]" id="nota2">
    </div>
    <div>
        <label for="nota3">Nota 3: </label>
        <input type="text" name="nota[]" id="nota3">
    </div>
    <div>
        <label for="nota4">Nota 4: </label>
        <input type="text" name="nota[]" id="nota4">
    </div>
    <div style="margin-top: 10px;">
        <button>Calcular</button>
    </div>
    
</form>
<hr>
<h2>Questão 2</h2>
<form action="{{route('tarefa1.questao2')}}" method="post">
    @csrf
    <div>
        <label for="mes">Digite o número do mês:</label>
        <input type="text" name="mes" id="mes">
    </div>
    <div style="margin-top: 10px;">
        <button>Buscar</button>
    </div>
    
</form>
<hr>
<h2>Questão 3</h2>
<form action="{{route('tarefa1.questao3')}}" method="post">
    @csrf
    <div>
        <label for="valor1">Valor 1</label>
        <input type="text" name="valores[]" id="valor1">
    </div>
    <div>
        <label for="valor2">Valor 2</label>
        <input type="text" name="valores[]" id="valor2">
    </div>
    <div>
        <label for="valor3">Valor 3</label>
        <input type="text" name="valores[]" id="valor3">
    </div>
    <div style="margin-top: 10px;">
        <button>Buscar</button>
    </div>
    
</form>
<hr>
<h2>Questão 4</h2>
<form action="{{route('tarefa1.questao4')}}" method="post">
    @csrf
    <div>
        <label for="valor1">Valor 1</label>
        <input type="text" name="valores[]" id="valor1">
    </div>
    <div>
        <label for="valor2">Valor 2</label>
        <input type="text" name="valores[]" id="valor2">
    </div>
    <div>
        <label for="valor3">Valor 3</label>
        <input type="text" name="valores[]" id="valor3">
    </div>
    <div style="margin-top: 10px;">
        <button>Buscar</button>
    </div>
    
</form>
<hr>
<h2>Questão 5</h2>
<form action="{{route('tarefa1.questao5')}}" method="post">
    @csrf
    <div>
        <label for="nome">Nome do livro:</label>
        <input type="text" name="nome" id="nome">
    </div>
    <div>
        <label for="tipo">Tipo de pessoa:</label>
        <select name="tipo" id="tipo">
            <option value="professor">Professor</option>
            <option value="aluno">Aluno</option>
        </select>
    </div>
    <div style="margin-top: 10px;">
        <button>Emprestar</button>
    </div>
    
</form>
<hr>
<h2>Questão 6</h2>
<form action="{{route('tarefa1.questao6')}}" method="post">
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