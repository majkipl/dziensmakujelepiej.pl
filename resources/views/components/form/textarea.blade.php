<div class="field {{ $classWrapper ?? '' }}">
    <textarea class="input {{ $class ?? '' }}"
              name="{{ $name }}"
              id="{{ $name }}"
              {{ $required ? 'required' : '' }}
              @if($max)
                  maxlength="{{ $max }}"
              @endif
              autocomplete="off"
              aria-label="{{ $placeholder }}{{ $required ? '*' : '' }}"
              placeholder="{{ $placeholder }}{{ $required ? '*' : '' }}"
    >{{ $slot }}</textarea>
    <div class="error-post error-{{ $name }}">{{ $error }}</div>
</div>
