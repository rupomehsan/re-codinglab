<div>

    <label for="{{$name}}" class="text-capitalize d-block ">
        <span class="mb-2 d-block ">{{$lb}}</span>
        <select {{$attribute}} wire:model.defer="{{$model}}" id="{{$name}}" class="form-select  {{$class}}  @error($name)is-invalid   @enderror">
            <option value="">--Select--</option>
            @if($data && count($data))
            @foreach($data as $item)
            @php

            $item = (object)$item

            @endphp
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
            @endif
        </select>

        @error($name)
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror

    </label>
</div>