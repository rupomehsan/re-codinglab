<div>
    <div class="app-content content">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <div>
                    <div class="d-flex align-items-center justify-content-between border p-1 mb-2 ">
                        <h3 class="">Blogs</h3>
                        <div class="btns">
                            <span>
                                <a href="{{url('admin/blogs/create')}}" class="btn rounded-pill btn-outline-info"><i
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
                                    All Blogs
                                </h4>
                                <x-search-input wire:model.debounce.500ms="searchItems" />
                                <x-sort-items-by-status :all="$allBlogsCount" :active="$allAcitveBlogsCount"
                                    :inactive="$allInactiveBlogsCount" :pending="$allPendingBlogsCount"
                                    :status="$status" />
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
                                                Title

                                            </th>
                                            <th class="cursor_n_resize">
                                                Description

                                            </th>
                                            <th class="cursor_n_resize">
                                                Photo

                                            </th>
                                            <th class="cursor_n_resize">
                                                Create Date

                                            </th>

                                            <th class="cursor_n_resize">
                                                Status

                                            </th>
                                            <th aria-label="actions">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">


                                        @if(count($blogs))
                                        @foreach($blogs as $item)
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input"></td>
                                            <td>{{$loop->iteration}}</td>
                                            <td><span class="text-warning cursor_pointer">
                                                    {{$item->title}}
                                                </span>
                                            </td>
                                            <td><span class="text-warning cursor_pointer">
                                                    {{ $item->description }}
                                                </span>
                                            </td>
                                            <td><img src="http://127.0.0.1:8000/avatar.png" alt="Avatar"
                                                    class="rounded-circle" style="height: 30px;"></td>
                                            <td>
                                                <span
                                                    class="badge bg-label-success me-1">{{$item->created_at->toFormateDate()}}</span>

                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-label-{{$item->status_badge}} me-1">{{$item->status}}</span>

                                            </td>
                                            <td>
                                                <div class="table_actions">
                                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i
                                                            class="fa fa-gears"></i></a>
                                                    <ul>
                                                        <li><a href="{{route('admin.blog.edit',$item)}}"><i
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
                                <div class="card-footer">
                                    <div>{{$blogs->links()}}</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sweet alert javaxrcipt -->
    <!-- sweet alert javaxrcipt -->
    <x-alert.sweet-alert />
</div>