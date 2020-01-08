<div class="form-group {{ $errors->has('text') ? 'has-error' : ''}}">
    <label for="text" class="control-label">Text:</label>
    <input class="form-control" name="text" type="text" id="text"
           value="{{ isset($option->text) ? $option->text : ''}}" required>
    {!! $errors->first('text', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('is_correct') ? 'has-error' : ''}}">
    <div>Is it correct option?</div>
    <input type="radio" name="is_correct" value="1">
    <label for="is_correct">Yes</label>
    <input type="radio" name="is_correct" value="0">
    <label for="is_correct">No</label>
    {!! $errors->first('is_correct', '<p class="help-block">:message</p>') !!}
</div>

@if($formMode === 'edit')
    <div class="form-group {{ $errors->has('question_id') ? 'has-error' : ''}}">
        <div>Question:</div>
        @foreach($option->getAllQuestions() as $question)
            <div>
                <input name="question_id" value="{{$question->id}}"
                       type="radio" id="question{{$question->id}}"
                       @if(!empty($option->question->text) && $option->question->text == $question->text) checked @endif>
                <label for="question{{$question->id}}" class="control-label">{{$question->text}}</label>
            </div>
        @endforeach
        {!! $errors->first('question_id', '<p class="help-block">:message</p>') !!}
    </div>
@endif
<div class="form-group text-right">
    <input class="btn btn-outline-secondary btn-lg" type="submit"
           value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>