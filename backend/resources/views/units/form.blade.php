{{ Form::text('name', Request::old('name')) }}
{{ Form::text('rarity', Request::old('rarity')) }}
{{ Form::text('hp', Request::old('hp')) }}
{{ Form::text('attack', Request::old('attack')) }}
{{ Form::text('defense', Request::old('defense')) }}
{{ Form::text('speed', Request::old('speed')) }}
{{ Form::text('crit_chance_rate', Request::old('crit_chance_rate')) }}
{{ Form::text('crit_damage_rate', Request::old('crit_damage_rate')) }}
{{ Form::text('evasion_rate', Request::old('evasion_rate')) }}
{{ Form::text('hit_chance_rate', Request::old('hit_chance_rate')) }}
<select name="spell">
    @foreach($spells as $spell)
    <option value="{{ $spell->id }}">{{$spell->name}}</option>
    @endforeach
</select>
{{-- More fields... --}}
<button type="submit">Save</button>