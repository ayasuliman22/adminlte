<form action="{{ route('add-product') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Please insert a name"/><br /><br />
    <input type="text" name="price" placeholder="Please insert a price"/><br /><br />
    <input type="text" name="description" placeholder="Please insert a description"/><br /><br />

    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach

    </select>
    <br /><br />
    <input type="submit" value="Add">
</form>
