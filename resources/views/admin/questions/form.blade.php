<div class="form-group {{ $errors->has('text') ? 'has-error' : ''}}">
    <label for="text" class="control-label">Text:</label>
    <input class="form-control" name="text" type="text" id="text"
           value="{{ isset($question->text) ? $question->text : ''}}" required>
    {!! $errors->first('text', '<p class="help-block">:message</p>') !!}
</div>

@if($formMode === 'create')
    <div class="form-group">
        <div>Type:</div>
        <select id="questionType">
            <option selected hidden disabled>Type of question</option>
            @foreach(\App\Models\Question::TYPES as $type)
                <option value="{{$type}}">{{$type}}</option>
            @endforeach
        </select>
        <input name="type" id="typeValue" hidden>
        <button type="button" id="resetSelect" hidden>reset</button>
    </div>
    {!! $errors->first('options', '<p class="help-block">:message</p>') !!}

    <div class="form-group">
        <button type="button" hidden id="addOptions">Add option</button>
        <button type="button" hidden id="removeOptions">Remove option</button>
        <div class="optionFields"></div>
    </div>
@endif

@if($formMode === 'edit')
    <div class="form-group">
        <div>Type: {{$question->type}}</div>
        <input name="type" value="{{$question->type}}" hidden>
    </div>
    @foreach($question->options as $option)
        <input class="form-control" type="text" name="options[]" required value="{{$option->text}}">
        <input name="option_id[]" hidden value="{{$option->id}}">
        @if($question->type == 'text')
            <input name="is_correct" hidden value="1">
        @elseif($question->type == 'radio' || $question->type == 'checkbox')
            <input type="hidden" name="is_correct[{{$loop->index}}]" value="0">
            <input id="is_correct-{{$option->id}}" type="checkbox" name="is_correct[{{$loop->index}}]" value="1"
                   @if($option->is_correct) checked @endif>
            <label for="is_correct-{{$option->id}}" class="label">correct option</label>
        @endif
    @endforeach
@endif

<div class="form-group text-right">
    <input class="btn btn-outline-secondary btn-lg" type="submit"
           value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>