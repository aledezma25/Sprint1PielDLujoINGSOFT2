@extends('layouts.app')

@section('content')
{{-- Vista para mostrar el perfil del usuario --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- Vista para mostrar el perfil del usuario --}}
            <div class="card">
                <div class="card-header">Perfil de Usuario</div>

                <div class="card-body">
                    {{-- <img src="{{ asset('storage/' . $user->image) }}" alt="Imagen de perfil" class="img-fluid"><br>
                    --}}
                    <p><strong>Nombre:</strong> {{ $user->name }}</p>
                    <p><strong>Correo Electrónico:</strong> {{ $user->email }}</p>
                    <p><strong>Dirección:</strong> {{ $user->address }}</p>
                    <p><strong>Teléfono:</strong> {{ $user->phone }}</p>
                    {{-- Puedes mostrar otros campos aquí según tu estructura de datos --}}
                    {{-- Boton para editar perfil --}}
                    <a href="{{ route('profileedit', $user->id) }}" class="btn btn-primary">Editar Perfil</a>

                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">Eliminar Cuenta</button>
                    <form id="delete-form" method="POST" action="{{ route('profiledestroy', $user->id) }}" style="display: none;">
                        @csrf
                        @method('DELETE') <!-- Utiliza DELETE para eliminar la cuenta -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete() {
        if (confirm('¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.')) {
            document.getElementById('delete-form').submit();
        }
    }
</script>

@endsection
