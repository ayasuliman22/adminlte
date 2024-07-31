<form action="{{ route('add-category') }}" method="post">
    @csrf
    <input type="text" name="categoryName" placeholder="Please insert a name"/>
    <input type="submit" value="Add">
</form>
