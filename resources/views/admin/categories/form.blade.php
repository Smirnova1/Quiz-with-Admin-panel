<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">Name:</label>
    <input class="form-control" name="name" type="text" id="name"
           value="{{ isset($category->name) ? $category->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
@if($formMode === 'edit')
    <div class="form-group">
        <div>Topics:</div>
        @foreach($category->getAllTopics() as $topic)
            <div>
                <input name="topic_id[]" value="{{$topic->id}}"
                       type="checkbox" id="topic{{$topic->id}}"
                       @foreach($category->topics()->get() as $item)
                           @if($item->name == $topic->name) checked @endif
                        @endforeach>
                <label for="topic{{$topic->id}}" class="control-label">{{$topic->name}}</label>
            </div>
        @endforeach
    </div>

@endif


<div class="form-group text-right">
    <input class="btn btn-outline-secondary btn-lg" type="submit"
           value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>