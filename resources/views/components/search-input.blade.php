<div class="d-flex align-items-center justify-content-center">
    <div class="search">
        <input {{ $attributes }} placeholder="search..." type="search" class="form-control border border-info">
    </div>
    <div wire:loading.delay wire:target="searchItems">
        <div class="spinner-border text-success" style="margin-left: -30px;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>