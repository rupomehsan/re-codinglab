<div>
    <div class="app-content content">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <div>
                    <div class="d-flex align-items-center justify-content-between border p-1 mb-2 ">
                        <h3 class="">Category</h3>
                        <div class="btns">
                            <span>
                                <a wire:click.prevent="openModal" class="btn rounded-pill btn-outline-info"><i
                                        class="fa fa-pencil me-5px"></i>
                                    Create
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="conatiner">
                        <div class="card list_card">
                            <div class="card-header">
                                <h4>
                                    All Categories
                                </h4>
                                <x-search-input wire:model.debounce.500ms="searchItems" />
                                <div class="btns d-flex gap-2 align-items-center">
                                    <div class="table_actions">
                                        <a href="#" class="btn px-1 btn-outline-secondary"><i
                                                class="fa fa-list"></i></a>
                                        <ul>
                                            <li><a href=""><i class="fa-regular fa-hand-point-right"></i>
                                                    Export All
                                                </a>
                                            </li>

                                            <li><a href="#/user/import" class=""><i
                                                        class="fa-regular fa-hand-point-right"></i>
                                                    Import
                                                </a>
                                            </li>
                                            <li><a href="#" title="display data that has been deactivated"
                                                    class="d-flex"><i class="fa-regular fa-hand-point-right"></i>
                                                    Deactivated data
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive card-body text-nowrap">
                                <table class="table table-hover table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th><input type="checkbox" class="form-check-input"></th>
                                            <th aria-label="id" class="cursor_n_resize">
                                                ID
                                                <span><i class="fa-solid fa-arrow-down-a-z text-success"></i></span>
                                            </th>

                                            <th class="cursor_n_resize">
                                                Name

                                            </th>
                                            <th class="cursor_n_resize">
                                                Photo

                                            </th>

                                            <th class="cursor_n_resize">
                                                Status

                                            </th>
                                            <th aria-label="actions">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0 ">


                                        @if(count($category))
                                        @foreach($category as $item)
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input"></td>
                                            <td>{{$loop->iteration}}</td>
                                            <td><span class="text-warning cursor_pointer">
                                                    {{$item->name}}
                                                </span>
                                            </td>
                                            <td><img src="{{Storage::disk('photos')->url($item->image)}}" alt="Avatar"
                                                    class="rounded-circle" style="height: 30px;"></td>



                                            <td>
                                                <span class="badge bg-label-success me-1">{{$item->status}}</span>

                                            </td>
                                            <td>
                                                <div class="table_actions">
                                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i
                                                            class="fa fa-gears"></i></a>
                                                    <ul>
                                                        <li><a wire:click.prevent="editData({{$item}})"><i
                                                                    class="fa text-info fa-eye"></i>
                                                                Edit
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <span>
                                                                <a wire:click.prevent="confirmDelete({{$item->id}})"
                                                                    class=""><i class="fa text-danger fa-trash"></i>
                                                                    Delate
                                                                </a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <div class="alert alert-warning p-1">No data found</tr>
                                            @endif
                                    </tbody>
                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="alert pb-1 d-flex justify-content-center mt-1">
                <div>{{$category->links()}}</div>
            </div>
        </div>
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            @if($editItem)
                            <span>Category create</span>
                            @else
                            <span>Update Category</span>
                            @endif
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="user_create_form" wire:submit.prevent="{{$editItem ? 'createItem' : 'updateItem'}}">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group  mb-2">
                                    <div class="field_wrapper">
                                        <x-form.input name="name" model="formData.name" type="text"
                                            ph='Enter Category Name' class />
                                    </div>

                                </div>
                                <div class="form-group  mb-2">
                                    <div class="field_wrapper">
                                        <x-form.select attribute="" name="parent_id" model="formData.parent_id" class
                                            :data="$allCategory" lb="Select parent Category" />
                                    </div>
                                </div>
                                <div class="form-group  mb-2">
                                    <div class="field_wrapper">
                                        <label for="photo" class="text-capitalize d-block">
                                            <span class="mb-2 d-block">photo</span> <input type="file" accept="image/*"
                                                id="photo" wire:model.defer="image" class="form-control">

                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <div class="card-footer text-center"><button type="submit" class="btn btn-outline-info"><i
                                        class="fa fa-upload"></i>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- sweet alert javaxrcipt -->
    <!-- sweet alert javaxrcipt -->
    <x-alert.sweet-alert />
</div>

@push('custom-js')
<script>
$(document).ready(function() {
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
    }
})
window.addEventListener('show-modal', event => {
    $('#addModal').modal('show')
})
window.addEventListener('hide-modal', event => {
    $('#addModal').modal('hide')
    toastr.success(event.detail.message, 'Success!')
})
</script>



@endpush