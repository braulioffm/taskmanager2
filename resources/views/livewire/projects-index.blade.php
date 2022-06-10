
<div class="card">

    <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Ingrese el nombre de un proyecto">
    </div>

    @if ($projects->count()) 

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{$project->id}}</td>
                            <td>{{$project->name}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="#">Editar</a>    
                            </td>
                            <td width="10px">
                                <form action="#" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>        
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
