<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">Name:</label>
    <input class="form-control" name="name" type="text" id="name"
           value="{{ isset($topic->name) ? $topic->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
@if($formMode === 'edit')
    <div class="form-group">
        <div>Categories:</div>
        @foreach($topic->getAllCategories() as $category)
            <div>
                <input name="category_id[]" value="{{$category->id}}"
                       type="checkbox" id="category{{$category->id}}"
                       @foreach($topic->categories()->get() as $item)
                       @if($item->name == $category->name) checked @endif
                        @endforeach>
                <label for="category{{$category->id}}" class="control-label">{{$category->name}}</label>
            </div>
        @endforeach
    </div>
    <div class="form-group">
        <div>Questions:</div>
        @foreach($topic->getAllQuestions() as $question)
            <div>
                <input name="question_id[]" value="{{$question->id}}"
                       type="checkbox" id="question{{$question->id}}"
                       @foreach($topic->questions()->get() as $item)
                       @if($item->text == $question->text) checked @endif
                        @endforeach>
                <label for="question{{$question->id}}" class="control-label">{{$question->text}}</label>
            </div>
        @endforeach
    </div>

@endif


<div class="form-group text-right">
    <input class="btn btn-outline-secondary btn-lg" type="submit"
           value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>