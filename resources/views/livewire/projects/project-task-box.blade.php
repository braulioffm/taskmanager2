<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">{{$title}} ({{$tasks->count()}})</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample1">
        <div class="card-body">
            <div class="row">
                @foreach($tasks as $task)
                <div class="col-lg-2 col-6 mb-2">
                    <div class="card border-primary shadow h-100 p-2">
                        {{$task->name}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
