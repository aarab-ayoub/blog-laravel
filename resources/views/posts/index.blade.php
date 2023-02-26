@extends('master')
@section('meta')
    <title>Liste des posts</title>
@endsection
@section('content')
    <h1 style="position: relative;top:10px;">Liste de posts:</h1>
    @if (count($posts) > 0)
        <div class="list-group-container">
            @foreach ($posts as $post)
                <div class="list-group-item">
                    <br><br>
                    <h3> {{ $post->title }} </h3>
                    <p>{{ $post->content }} </p>
                    <small>publié le {{ $post->created_at->format('d/m/Y H:i:s') }}</small>
                    <br>
                    <small style="position: relative;left:68px">modifié le {{ $post->updated_at->format('d/m/Y H:i:s') }}</small>
                    <a href="{{ route('posts.show', $post) }}" style="color:blue">
                        <button class="button-17" role="button">More Details</button>
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <p>Aucun post disponible dans la base de données</p>
    @endif
@endsection
