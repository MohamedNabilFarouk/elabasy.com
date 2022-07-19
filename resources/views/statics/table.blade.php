<div class="table-responsive-sm">
    <table class="table table-striped" id="statics-table">
        <thead>
            <th>Code</th>
        <th>Value</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($statics as $statics)
            <tr>
                <td>{{ $statics->code }}</td>
            <td>{{ $statics->value }}</td>
                <td>
                    {!! Form::open(['route' => ['statics.destroy', $statics->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('statics.show', [$statics->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('statics.edit', [$statics->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>