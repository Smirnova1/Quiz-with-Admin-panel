<input name="topic_id" hidden value="{{$topic->id}}">
@foreach($topic->questions as $question )
    <div>{{$question->text}}</div>
    @foreach($question->options as $option)
        <div class="form-group">
            <input name="questions[{{$question->id}}][]" id="option{{$option->id}}[]"
                   type="{{$question->type}}"
                   @if ($question->type !== 'text') value="{{$option->text}}"@endif>
            @if($question->type == 'radio')
                <label class="form-check-label" for="option{{$option->id}}[]">{{$option->text}}</label>
            @elseif($question->type == 'checkbox')
                <label class="form-check-label" for="option{{$option->id}}[]">{{$option->text}}</label>
            @endif
        </div>
    @endforeach
@endforeach


<div class="form-group text-right">
    <input class="btn btn-outline-secondary btn-lg" type="submit" value="Result">
</div>