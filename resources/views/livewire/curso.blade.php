<div>
    <h1 class="mt-5 mb-3 text-center">Cursos</h1>
    @if($error != '')
        <div class="my-3 alert alert-warning alert-dismissible fade show" role="alert">
            <strong>¡Atención!</strong> {{ $error }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form wire:submit.prevent='save'>
        <input type="text" class="form-control mb-3" wire:model='curso' placeholder="Nuevo curso">
        <button class="btn btn-primary">Guardar</button>
    </form>

    @if($cursos != null)
        <hr>
        <table class="tabe table-hover mt-5 mb-3">
            <thead>
                <tr>
                    <td>Nombre</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $item)
                    <tr>
                        <td>{{ $item->nombre }}</td>
                        <td>
                            <button class="btn btn-danger rounded-circle" wire:click='eliminar({{ $item->id }})'>
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
