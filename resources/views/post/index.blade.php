@extends('layouts.app')

@section('content')
<div class="mb-4">
  {!! Form::open(['url' => 'posts', 'method' => 'post']) !!}
  <div class="card">
    <div class="card-body">
      @include('post.form')
      <button type="submit" class="btn btn-primary">投稿する</button>
    </div>
  </div>
  {!! Form::close() !!}
</div>

<h2>投稿一覧</h2>

<div class="card">
  <div class="card-body">
    @foreach ($posts as $i => $post)
    <div>
      <h3>{{ $post->title }}</h3>
      <p>{!! nl2br(e($post->body)) !!}</p>
      <div class="text-right text-muted"><small>{{ $post->created_at->format('Y-m-d H:i') }}</small></div>
      <div class="d-flex justify-content-end">
        <a href="{{ url("posts/{$post->id}/edit") }}" class="btn btn-info" role="button">編集</a>
        {!! Form::open(['url' => "posts/{$post->id}", 'method' => 'delete', 'class' => 'ml-2']) !!}
        <button type="submit" class="btn btn-danger">削除</button>
        {!! Form::close() !!}
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
