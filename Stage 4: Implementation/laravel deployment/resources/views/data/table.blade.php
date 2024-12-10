<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="data-table">
            <thead>
            <tr>
                <th>Sepal Length</th>
                <th>Sepal Width</th>
                <th>Petal Length</th>
                <th>Petal Width</th>
                <th>Species</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $data)
                <tr>
                    <td>{{ $data->sepal_length }}</td>
                    <td>{{ $data->sepal_width }}</td>
                    <td>{{ $data->petal_length }}</td>
                    <td>{{ $data->petal_width }}</td>
                    <td>{{ $data->species }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['data.destroy', $data->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('data.show', [$data->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('data.edit', [$data->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $data])
        </div>
    </div>
</div>
