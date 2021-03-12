<div class="row file-row text-center {{ $class ?? '' }}">
    <div class="col-sm-6">
        <div class="d-flex flex-row justify-content-center align-content-center flex-wrap info">
            {{ $slot }}
            <button class="button file-button button-uploads" type="button">Wybierz plik</button>

            <div class="uploads uploads-d-none">
                <input type="file"
                       name="{{ $name }}"
                       id="{{ $name }}"
                       {{ $required ? 'required' : '' }}
                       class="upload-image upload-file file"/>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="d-flex flex-row justify-content-center align-content-center flex-wrap thumbs">
            <img src="{{ asset('images/svg/form/placeholder.svg') }}" alt="thumbs" id="{{ $name }}_thumb"
                 class="file-img"/>
        </div>
    </div>

    <div class="col-12">
        <span class="error-post error-{{ $name }}">{{ $error }}</span>
    </div>
</div>
