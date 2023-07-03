<div>
    <label for="{{$name}}" class="text-capitalize d-block"><span class="my-2 d-block ">{{$name}}</span>
        <input type="{{$type}}" id="{{$name}}" wire:model.defer="{{$model}}"
            class="form-control {{$class}}  @error($name)is-invalid   @enderror" placeholder="{{$ph}}">
        @error($name)
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </label>
</div>