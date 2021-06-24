{{ Form::text('name', Request::old('name')) }}
{{ Form::text('type', Request::old('type')) }}
{{ Form::text('rarity', Request::old('rarity')) }}
<button type="submit">Save</button>