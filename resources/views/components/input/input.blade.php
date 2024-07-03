<div class="form-group">
    <label for="" class="control-label">{{ $label ?? '' }}</label>
    <input type="{{ $type ?? 'text' }}" name="{{ $name ?? '' }}"
        value="@isset($value){{ $value }}@else{{ old($name) }}@endisset"
        class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder ?? '...' }}"
        autocomplete="off">

    @error($name)
        <span>{{ $message }}</span>
    @enderror
</div>
