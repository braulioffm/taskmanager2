
<div class="card">

    <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Ingrese el nombre de un cliente">
    </div>

    @if ($clients->count()) 

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Proyectos</th>
                    <th colspan="1">Opciones</th>
                </tr>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{$client->name}}</td>
                            <td>{{$client->projects->count()}}</td>
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
        {{ $clients->links() }}
    </div>
    @else
    <div class="card-body"><strong>No hay ningun registro</strong></div>
    @endif

</div>
