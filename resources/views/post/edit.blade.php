@extends('layouts.app')

@section('content')
<h2>編集</h2>

<div class="mb-4">
  {!! Form::open(['url' => "posts/{$post->id}", 'method' => 'patch']) !!}
  <div class="card">
    <div class="card-body">
      @include('post.form')
      <button type="submit" class="btn btn-primary">更新する</button>
    </div>
  </div>
  {!! Form::close() !!}
</div>
@endsection
