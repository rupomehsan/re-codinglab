<div>
    <div wire:ignore>
        <label for="" class="text-capitalize my-2">{{$lb}}</label>
        <textarea name="{{$name}}" wire:model.defer="{{$model}}" id="{{$id}}" cols="30" class="form-control"
            data-attr="@this">{{$value ?? '' }}</textarea>

    </div>
    @error($name)
    <div class="text-danger mt-1">
        {{$message}}
    </div>
    @enderror
</div>
@push('custom-js')
<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#{{$name}}'))
    .then(editor => {
        // editor.model.document.on('change:data', () => {
        //     let item = $('#{{$name}}').data('attr');
        //     eval(item).set('{{$model}}', editor.getData());
        // })
        document.querySelector('#submit').addEventListener('click', () => {
            let item = $('#{{$name}}').data('attr');
            eval(item).set('{{$model}}', editor.getData());
        })
    })
    .catch(error => {
        console.error(error);
    });
</script>
@endpush