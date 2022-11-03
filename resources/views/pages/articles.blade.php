@foreach ($articles as $article)
    <div class="bg-black">
        <a href="/fullarticle/{{ $article->id }}"> {{ $article->title }}</a>
    </div>
@endforeach
