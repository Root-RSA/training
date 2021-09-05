<x-layout>
    <h1>
        {!! $post->title !!}
    </h1>
    <article>
        {!! $post->body !!}
    </article>

    <p>
        <a href="#">{{ $post->category->name }}</a>
    </p>

    <p>
        {!! $post->date !!}
    </p>

    <a href="/">Go back</a>
</x-layout>







