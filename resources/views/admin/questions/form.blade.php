<div class="form-group {{ $errors->has('text') ? 'has-error' : ''}}">
    <label for="text" class="control-label">Text:</label>
    <input class="form-control" name="text" type="text" id="text"
           value="{{ isset($question->text) ? $question->text : ''}}" required>
    {!! $errors->first('text', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <div>Type:</div>
    <select id="questionType">
        <option selected hidden disabled>Type of question</option>
        @foreach(\App\Models\Question::TYPES as $type)
            <option value="{{$type}}">{{$type}}</option>
        @endforeach
    </select>
    <input name="type" id="typeValue" hidden>
</div>
<div class="form-group text-right">
    <input class="btn btn-outline-secondary btn-lg" type="submit"
           value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>