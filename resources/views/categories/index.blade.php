<a href="{{route('categories.create')}}">Create new Category</a>
<table>
    <thead>
    <th>#</th>

    <th>Name</th>
    <th>desc</th>
    <th>action</th>
    </thead>
    <tbody>
    @foreach($categories as $k=>$category)
        <tr>
            <th>{{$k}}</th>
            <th>{{$category->name}}</th>
            <th>{{$category->description}}</th>
            <th>
                <a href="">edit</a>
                <a href="">show</a>
                <a href="">delete</a>

            </th>
        </tr>
    @endforeach
    </tbody>

</table>