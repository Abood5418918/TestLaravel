@props(['id', 'name', 'label', 'value' => ''])

<div class="mb-3">
    <label for="{{$id}}">{{ $label }}</label>
    <div>
        <textarea class="form-control @error($name) is-invalid @enderror" rows="3" id="{{ $id }}"
            name="{{ $name }}" placeholder="{{ $label }}">{{ old($name, $value) }}</textarea>
        @error($name)
            <p class="invalid-feedback"> {{ $message }}</p>
        @enderror
    </div>
</div>
