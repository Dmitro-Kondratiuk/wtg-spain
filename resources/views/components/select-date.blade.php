@php $status = ['asc'=>'Asc','desk'=>'Desk']
@endphp
<select id="dateFilter">
    @foreach($status as $key=>$value)
        <option value="{{$key}}">{{$value}}</option>
    @endforeach
</select>
