<input type="hidden" name="{{ $name }}" value="0" />
<input type="checkbox" name="{{ $name }}" value="1" {{ $checked ? 'checked="checked"' : '' }}
{{-- for each html param passed, add it to the input and close it up --}}
@foreach($options as $key => $value)
 {{ $key }} = "{{ $value }}"
@endforeach
 />

