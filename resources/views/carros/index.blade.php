{{-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Carros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('carros.index') }}">CRUD Carros</a>
            <div>
                <a href="{{ route('carros.create') }}" class="btn btn-success">+ Novo Carro</a>
            </div>
        </div>
    </nav>

    <div class="container">
        {{-- Exibir mensagens de sucesso ou erro --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Aqui entram os conteúdos das views --}}
        @yield('content')
    </div>
   <div>
    <ul>
        @foreach ($carros as $cr)
            <li>{{ $cr->modelo }} - {{ $cr->placa }}</li>
        @endforeach
    </ul>
</div>

</body>
</html> --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Carros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('carros.index') }}">CRUD Carros</a>
            <div>
                <a href="{{ route('carros.create') }}" class="btn btn-success">+ Novo Carro</a>
            </div>
        </div>
    </nav>

    <div class="container">
        {{-- Exibir mensagens de sucesso ou erro --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2>Lista de Carros</h2>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Placa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carros as $cr)
                    <tr>
                        <td>{{ $cr->id }}</td>
                        <td>{{ $cr->modelo }}</td>
                        <td>{{ $cr->placa }}</td>
                        <td>
                            {{-- Editar --}}
                            <a href="{{ route('carros.edit', $cr->id) }}" class="btn btn-warning btn-sm">Editar</a>

                            {{-- Excluir --}}
                            <form action="{{ route('carros.destroy', $cr->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir este carro?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
