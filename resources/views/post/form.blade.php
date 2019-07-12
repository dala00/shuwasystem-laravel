<div class="form-group">
  <label for="title">タイトル</label>
  {!! Form::text('title', $post->title, ['id' => 'title', 'class' => 'form-control', 'required' => true]) !!}
</div>
<div class="form-group">
  <label for="body">内容</label>
  {!! Form::textarea(
    'body',
    $post->body,
    ['id' => 'body', 'class' => 'form-control', 'rows' => 8, 'required' => true]
  ) !!}
</div>
