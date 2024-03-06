<html>
<h2>Adicionar Aluno</h2>
<form method="POST" action="{{ route('alunos.salvar') }}">
    @csrf
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
    </div>
    <div>
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="curso">Curso:</label>
        <input type="text" name="curso" required>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
</html>
