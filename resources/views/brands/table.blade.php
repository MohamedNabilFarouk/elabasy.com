<div class="table-responsive-sm">
    <table class="table table-striped" id="brands-table">
        <thead>
            <th>Id</th>
        <th>Name</th>
        <th>Name Ar</th>
        <th>Image</th>
        <th>Category Id</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
            <td>{{ $brand->name }}</td>
            <td>{{ $brand->name_ar }}</td>
            <td><img src="{{asset('images/'.$brand->image)}}" class="" alt="" /></td>
            <td>{{ $brand->category->name_ar ?? $brand->category->name}}</td>
                <td>
                    {!! Form::open(['route' => ['brands.destroy', $brand->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('brands.show', [$brand->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('brands.edit', [$brand->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>