<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Administrador</h1>
        <form method="GET" action="{{ route('admin') }}" class="form-inline mb-4">
            <div class="form-group mr-2">
                <input type="text" name="search_gpid" class="form-control" placeholder="Buscar por GPID" value="{{ request()->input('search_gpid') }}">
            </div>
            <div class="form-group mr-2">
                <input type="text" name="search_email" class="form-control" placeholder="Buscar por Email" value="{{ request()->input('search_email') }}">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Buscar</button>
            <a href="{{ route('admin') }}" class="btn btn-secondary">Limpiar</a>
        </form>
        <div class="table-container">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>GPID</th>
                        <th>Cedula</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id ?? 'null' }}</td>
                            <td>{{ $user->name ?? 'null' }}</td>
                            <td>{{ $user->gpid ?? 'null' }}</td>
                            <td>{{ $user->cedula ?? 'null' }}</td>
                            <td>{{ $user->celular ?? 'null' }}</td>
                            <td>{{ $user->email ?? 'null' }}</td>
                            <td>{{ $user->address ?? 'null' }}</td>
                            <td>{{ $user->ciudad ?? 'null' }}</td>
                            <td>
                                @if ($user->estado_id == 1)
                                    Activo
                                @elseif ($user->estado_id == 2)
                                    Inactivo
                                @elseif ($user->estado_id == 3)
                                    Ganador
                                @elseif ($user->estado_id == 4)
                                    Administrador
                                @else
                                    {{ $user->estado_id ?? 'null' }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $users->links('vendor.pagination.custom-pagination') }}
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>