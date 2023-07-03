<div>

    <div class="btn-group border" role="group" aria-label="Basic checkbox toggle button group">
        <input wire:click="sortDataBYStatus" type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
        <label class="btn {{($status === '' || $status === null  ? 'btn-secondary' : '')}} " for="btncheck1">all <span class="text-danger">
                ( {{ $all }} )</span>
        </label>

        <input wire:click=" sortDataBYStatus('active')" type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
        <label class="btn  {{($status === 'active' ? 'btn-secondary' : '')}}" for="btncheck2"> Active<span class="text-warning"> ( {{$active}} )
            </span></label>

        <input wire:click="sortDataBYStatus('inactive')" type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
        <label class="btn {{($status === 'inactive' ? 'btn-secondary' : '')}}" for="btncheck3"> Inactive<span class="text-info"> ({{$inactive}} )
            </span></label>
        <input wire:click="sortDataBYStatus('pending')" type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
        <label class="btn {{($status === 'pending' ? 'btn-secondary' : '')}}" for="btncheck4"> pending <span class="text-info"> ( {{$pending}} )
            </span></label>
    </div>
</div>