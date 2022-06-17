
<div class="card">

    <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Ingrese el nombre de un proyecto">
    </div>

    @if ($projects->count()) 

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Encargado</th>
                    <th>Cliente</th>
                    <th colspan="1">Opciones</th>
                </tr>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{$project->name}}</td>
                            <td>{{$project->user->name}}</td>
                            <td>{{$project->client->name}}</td>
                            <td width="20px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.projects.show', $project)}}">Ver</a>    
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </thead>

        </table>
    </div>


    <div class="card-footer">        
        {{ $projects->links() }}
    </div>
    @else
    <div class="card-body"><strong>No hay ningun registro</strong></div>
    @endif

</div>
