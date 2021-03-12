<div class="field {{ $classWrapper ?? '' }}">
    <select class="input select empty {{ $class ?? '' }}"
            name="{{ $name }}"
            id="{{ $name }}"
            aria-label="{{ $placeholder }}{{ $required ? '*' : '' }}"
        {{ $required ? 'required' : '' }}
    >
        <option class="selected" selected>{{ $placeholder }}{{ $required ? '*' : '' }}</option>
        @foreach($items as $key => $item)
            @isset($item->id)
                <option value="{{ $item->id }}" {{ isset($selected) && $selected === $item->id ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
            @else
                <option value="{{ $item }}" {{ isset($selected) && $selected === $key ? 'selected' : '' }}>
                    {{ $item }}
                </option>
            @endisset
        @endforeach
    </select>
    <input type="hidden" name="{{ $name }}_value" value="{{ $selected }}" />
    <div class="error-post error-{{ $name }}">{{ $error }}</div>
</div>
