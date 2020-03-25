<a17-fieldset open="{{ (isset($open)) ? $open:true }}" title="{{ $title }}" @isset($id) id="{{ $id }}" @endisset>
    {{ $slot }}
</a17-fieldset>
