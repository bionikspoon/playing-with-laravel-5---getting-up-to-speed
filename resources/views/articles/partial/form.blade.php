<!-- Title Form Input -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', NULL, ['class' => 'form-control']) !!}
</div>

<!-- Body Form Input -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', NULL, ['class' => 'form-control']) !!}
</div>

<!-- Published at Form Input -->
<div class="form-group">
    {!! Form::label('published_at', 'Published at:') !!}
    {!! Form::input('date', 'published_at', $article->published_at, ['class' => 'form-control']) !!}
</div>

<!-- Tags Form Input -->
<div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, NULL, ['class' => 'form-control', 'multiple', 'id'=>'tag_list']) !!}
</div>

<!-- {{ $submitButtonText }} Form Input -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>

@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder: "Choose a tag"
        });
    </script>
@endsection