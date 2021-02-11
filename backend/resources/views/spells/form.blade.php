{{ Form::text('name', Request::old('name')) }}
{{ Form::text('cooldown', Request::old('cooldown')) }}
{{ Form::text('type', Request::old('type')) }}
<button type="submit">Save</button>