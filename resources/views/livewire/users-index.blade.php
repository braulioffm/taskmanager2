
<div class="card">

    <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Ingrese el nombre de un usuario">
    </div>

    @if ($users->count()) 

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Proyectos</th>
                    <th colspan="1">Opciones</th>
                </tr>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->projects->count()}}</td>
                            <td width="20px">
                                <a class="btn btn-primary btn-sm" href="#">Ver</a>    
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </thead>

        </table>
    </div>


    <div class="card-footer">        
        {{ $users->links() }}
    </div>
    @else
    <div class="card-body"><strong>No hay ningun registro</strong></div>
    @endif

</div>
