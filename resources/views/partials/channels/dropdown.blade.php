<label for="channel_id"></label>
<select name="{{$field ?? 'channel_id'}}" id="channel_id">
    @foreach($channels as $channel)
        <option value="{{$channel->id}}">{{$channel->name}}</option>
    @endforeach
</select>
