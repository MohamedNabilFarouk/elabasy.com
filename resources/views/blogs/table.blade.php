<div class="table-responsive-sm">
    <table class="table table-striped" id="blogs-table">
        <thead>
            <th>Title</th>
        <th>Des</th>
        <th>Image</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($blogs as $blogs)
            <tr>
                <td>{{ $blogs->title }}</td>
            <td>{{ $blogs->des }}</td>
            <td><img src="/images/{{ $blogs->image }}"</td>
                <td>
                    {!! Form::open(['route' => ['blogs.destroy', $blogs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('blogs.show', [$blogs->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('blogs.edit', [$blogs->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>