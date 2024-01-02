@php
$type ??= 'text';
$class ??= null;
$name ??= '';
$value ??= '';
$label ??= ucfirst($name);
@endphp

<div @class(['champs-formulaire', $class])>
    
    @if($type === 'textarea')
        <label class="" for="{{ $name }}">{{ $label }}</label>
        <textarea class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $name }}">{{ old($name, $value) }}</textarea>
        <span class="is_invalid_js_{{ $name }}"></span>
    @elseif($type === 'file')
        <input class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}">
        <span class="is_invalid_js_{{ $name }}"></span>
    @else
        <label class="label-inactive" for="{{ $name }}">{{ $label }}</label>
        <input class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}">
        <span class="is_invalid_js_{{ $name }}"></span>
    @endif
    @error($name) 
    <div class="invalid-feedback">
        {{ $message }} 
    </div>
    @enderror

</div>