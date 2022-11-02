<form action="/newarticle/store/" method="POST">
    @csrf
    <div>
        <label for="">User</label>
        <select name="user_id" id="">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <input name="title" type="text">
        <textarea name="text" id="" cols="30" rows="10">Enter text</textarea>
        <button type="submit"
            class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
    </div>
</form>
