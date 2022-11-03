@foreach ($users as $user)
    <div>
        <h1>{{ $user->name }}</h1>
        <h1>{{ $user->email }}</h1>
        <h1>{{ $user->role->role }}</h1>
    </div>
@endforeach
