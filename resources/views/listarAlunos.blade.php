<html>
<body>
<div>
    <h1>Lista de Alunos</h1>
    @error('erro')
        <div>{{ $message }}</div>
    @enderror

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
        <tbody>
        @foreach ($alunos as $aluno)
            <tr>
                <td>{{ $aluno->id }}</td>
                <td>{{ $aluno->nome }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>


