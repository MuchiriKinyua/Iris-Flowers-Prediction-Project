<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="mls-table">
            <thead>
            <tr>
                <th>Model Name</th>
                <th>Version</th>
                <th>Accuracy</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mls as $ml)
                <tr>
                    <td>{{ $ml->model_name }}</td>
                    <td>{{ $ml->version }}</td>
                    <td>{{ $ml->accuracy }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['mls.destroy', $ml->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('mls.show', [$ml->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('mls.edit', [$ml->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $mls])
        </div>
    </div>
</div>
