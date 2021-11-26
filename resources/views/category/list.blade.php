<table class="table table-active table-bordered table-hover table-light mt-3">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Control</th>
        <th>Date / Time</th>
    </tr>
    <tbody>
    @foreach(\App\Models\Category::all() as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>
            <td>
                <a href="{{route('category.edit',$category->id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                <form action="{{route('category.destroy',$category->id)}}" method="post" class="d-inline-block">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger">Delete</button>
                </form>
            </td>
            <td>{{$category->created_at->format('d/M/y,h:m')}}</td>
        </tr>
    @endforeach
    </tbody>
    </thead>
</table>
</div>
</div>
</div>
</body>
</html>
