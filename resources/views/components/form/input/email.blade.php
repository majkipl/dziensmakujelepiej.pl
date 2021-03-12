<div class="field {{ $classWrapper ?? '' }}">
    <input type="email"
           class="input {{ $class ?? '' }}"
           name="{{ $name }}"
           placeholder="{{ $placeholder }}{{ $required ? '*' : '' }}"
           aria-label=""{{ $placeholder }}{{ $required ? '*' : '' }}"
    value="{{ $value }}"
    @if($max)
        maxlength="{{ $max }}"
    @endif
    />
    <div class="error-post error-{{ $name }}">{{ $error }}</div>
</div>

