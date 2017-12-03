<form action="{{route('categories.store')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="name" >
    <textarea name="desc">
    </textarea>
    <input type="submit" value="Create New Category">
</form>