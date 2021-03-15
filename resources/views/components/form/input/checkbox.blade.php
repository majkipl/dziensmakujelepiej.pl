<div class="field {{ $classWrapper ?? '' }}">
    <label class="label {{ $class ?? '' }}">
        <input type="checkbox"
               class="col-auto checkbox"
               name="{{ $name }}"
               id="{{ $name }}"
               {{ $required ? 'required' : '' }}
               {{ $checked ? 'checked' : '' }}
        />
        <span class="col-auto checkbox-text">{{ $required ? '*' : '' }}{{ $slot }}</span>
    </label>
    <div class="error-post error-{{ $name }}">{{ $error }}</div>
</div>
