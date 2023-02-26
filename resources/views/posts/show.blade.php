@extends('master')
@section('meta')
    <title>Liste des posts</title>
@endsection
@section('content')
    <h1>Page du Post</h1>
    <br><br><br><br><br><br><br>
    <div class="show">
        <img src="https://ps.w.org/user-avatar-reloaded/assets/icon-256x256.png?rev=2540745" alt="">
        <br>
        <small class="cr">created by {{ $post->user->name }}</small>
        <h3>{{ $post->title }}</h3>


        <section>
            {{ $post->content }}
        </section>
        <small class="pub">publié le {{ $post->created_at->format('d/m/Y H:i:s') }}</small>
        <h2>comments:</h2>
    </div>
@endsection
