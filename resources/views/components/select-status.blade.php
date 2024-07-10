@php $status = ['pending','in progress','completed']
@endphp
<select id="statusSort">
    @foreach($status as $item)
        <option value="{{$item}}">{{$item}}</option>
    @endforeach
</select>
