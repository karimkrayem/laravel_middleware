<form action="/article/update/{{ $articles->id }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Name</label>
    <input type="text" name="title">
    <label for="">text</label>
    <input type="text" name="text">
    <select name="user_id" id="">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
