@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Perfil</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profileupdate', $user->id) }}">
                        @csrf
                        @method('PUT') <!-- Utiliza PUT para actualizar el perfil -->

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input type="text" id="address" name="address" class="form-control" value="{{ $user->address }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="text" id="phone" name="phone" class="form-control" value="{{ $user->phone }}">
                        </div>

                        <!-- Puedes agregar otros campos aquí según tu estructura de datos -->

                        <!-- Agregar un botón para enviar el formulario de edición -->
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
