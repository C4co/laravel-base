<div class="field">
    <label>
        @isset($label)
            <span class="field__label"> {{ $label }} </span>
        @endisset

        <input
            class="field__input"
            {!! $attributes !!}
        >
    </label>

    @error($name)
        <span class="field__error-message"> {{ $message }} </span>
    @enderror
</div>
