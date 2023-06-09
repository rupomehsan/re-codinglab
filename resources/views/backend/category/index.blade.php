@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            <div>
                <h3 class="mb-2">User management</h3>
                <div class="conatiner">
                    <div class="card list_card">
                        <div class="card-header">
                            <h4>
                                All Users
                                <!---->
                            </h4>
                            <div class="search">
                                <form action="#"><input placeholder="search..." type="search"
                                        class="form-control border border-info"></form>
                            </div>
                            <div class="btns d-flex gap-2 align-items-center"><span><a href="#/user/create"
                                        class="btn rounded-pill btn-outline-info"><i class="fa fa-pencil me-5px"></i>
                                        Create
                                    </a>
                                    <!---->
                                </span>
                                <div class="table_actions"><a href="#" class="btn px-1 btn-outline-secondary"><i
                                            class="fa fa-list"></i></a>
                                    <ul>
                                        <li><a href=""><i class="fa-regular fa-hand-point-right"></i>
                                                Export All
                                            </a></li>
                                        <!---->
                                        <li><a href="#/user/import" class=""><i
                                                    class="fa-regular fa-hand-point-right"></i>
                                                Import
                                            </a></li>
                                        <li><a href="#" title="display data that has been deactivated" class="d-flex"><i
                                                    class="fa-regular fa-hand-point-right"></i>
                                                Deactivated data
                                            </a></li>
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
                                            Photo
                                            <!---->
                                        </th>
                                        <th class="cursor_n_resize">
                                            Name
                                            <!---->
                                        </th>
                                        <th class="cursor_n_resize">
                                            Email
                                            <!---->
                                        </th>
                                        <th class="cursor_n_resize">
                                            Mobile NO
                                            <!---->
                                        </th>
                                        <th class="cursor_n_resize">
                                            Status
                                            <!---->
                                        </th>
                                        <th aria-label="actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input"></td>
                                        <td>1</td>
                                        <td><img src="http://127.0.0.1:8000/avatar.png" alt="Avatar"
                                                class="rounded-circle" style="height: 30px;"></td>
                                        <td><span class="text-warning cursor_pointer">
                                                super admin
                                            </span></td>
                                        <td>superadmin@gmail.com</td>
                                        <td>
                                            016123
                                        </td>
                                        <td><span class="badge bg-label-success me-1">active</span>
                                            <!---->
                                        </td>
                                        <td>
                                            <div class="table_actions"><a href="#"
                                                    class="btn btn-sm btn-outline-secondary"><i
                                                        class="fa fa-gears"></i></a>
                                                <ul>
                                                    <li><a href=""><i class="fa text-info fa-eye"></i>
                                                            Quick View
                                                        </a></li>
                                                    <li><span><a href="#/user/details/1" class=""><i
                                                                    class="fa text-secondary fa-eye"></i>
                                                                Details
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span><a href="#/user/edit/1" class=""><i
                                                                    class="fa text-warning fa-pencil"></i>
                                                                Edit
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span>
                                                            <!----> <a href="#" class=""><i
                                                                    class="fa text-danger fa-trash"></i>
                                                                Deactive
                                                            </a>
                                                        </span></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input"></td>
                                        <td>2</td>
                                        <td><img src="http://127.0.0.1:8000/avatar.png" alt="Avatar"
                                                class="rounded-circle" style="height: 30px;"></td>
                                        <td><span class="text-warning cursor_pointer">
                                                mr admin
                                            </span></td>
                                        <td>admin@gmail.com</td>
                                        <td>
                                            016124
                                        </td>
                                        <td><span class="badge bg-label-success me-1">active</span>
                                            <!---->
                                        </td>
                                        <td>
                                            <div class="table_actions"><a href="#"
                                                    class="btn btn-sm btn-outline-secondary"><i
                                                        class="fa fa-gears"></i></a>
                                                <ul>
                                                    <li><a href=""><i class="fa text-info fa-eye"></i>
                                                            Quick View
                                                        </a></li>
                                                    <li><span><a href="#/user/details/2" class=""><i
                                                                    class="fa text-secondary fa-eye"></i>
                                                                Details
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span><a href="#/user/edit/2" class=""><i
                                                                    class="fa text-warning fa-pencil"></i>
                                                                Edit
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span>
                                                            <!----> <a href="#" class=""><i
                                                                    class="fa text-danger fa-trash"></i>
                                                                Deactive
                                                            </a>
                                                        </span></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input"></td>
                                        <td>3</td>
                                        <td><img src="http://127.0.0.1:8000/avatar.png" alt="Avatar"
                                                class="rounded-circle" style="height: 30px;"></td>
                                        <td><span class="text-warning cursor_pointer">
                                                mr production
                                            </span></td>
                                        <td>production@gmail.com</td>
                                        <td>
                                            016125678
                                        </td>
                                        <td><span class="badge bg-label-success me-1">active</span>
                                            <!---->
                                        </td>
                                        <td>
                                            <div class="table_actions"><a href="#"
                                                    class="btn btn-sm btn-outline-secondary"><i
                                                        class="fa fa-gears"></i></a>
                                                <ul>
                                                    <li><a href=""><i class="fa text-info fa-eye"></i>
                                                            Quick View
                                                        </a></li>
                                                    <li><span><a href="#/user/details/3" class=""><i
                                                                    class="fa text-secondary fa-eye"></i>
                                                                Details
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span><a href="#/user/edit/3" class=""><i
                                                                    class="fa text-warning fa-pencil"></i>
                                                                Edit
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span>
                                                            <!----> <a href="#" class=""><i
                                                                    class="fa text-danger fa-trash"></i>
                                                                Deactive
                                                            </a>
                                                        </span></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input"></td>
                                        <td>4</td>
                                        <td><img src="http://127.0.0.1:8000/avatar.png" alt="Avatar"
                                                class="rounded-circle" style="height: 30px;"></td>
                                        <td><span class="text-warning cursor_pointer">
                                                mr branch1
                                            </span></td>
                                        <td>branch1@gmail.com</td>
                                        <td>
                                            016125
                                        </td>
                                        <td><span class="badge bg-label-success me-1">active</span>
                                            <!---->
                                        </td>
                                        <td>
                                            <div class="table_actions"><a href="#"
                                                    class="btn btn-sm btn-outline-secondary"><i
                                                        class="fa fa-gears"></i></a>
                                                <ul>
                                                    <li><a href=""><i class="fa text-info fa-eye"></i>
                                                            Quick View
                                                        </a></li>
                                                    <li><span><a href="#/user/details/4" class=""><i
                                                                    class="fa text-secondary fa-eye"></i>
                                                                Details
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span><a href="#/user/edit/4" class=""><i
                                                                    class="fa text-warning fa-pencil"></i>
                                                                Edit
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span>
                                                            <!----> <a href="#" class=""><i
                                                                    class="fa text-danger fa-trash"></i>
                                                                Deactive
                                                            </a>
                                                        </span></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input"></td>
                                        <td>5</td>
                                        <td><img src="http://127.0.0.1:8000/avatar.png" alt="Avatar"
                                                class="rounded-circle" style="height: 30px;"></td>
                                        <td><span class="text-warning cursor_pointer">
                                                mr branch2
                                            </span></td>
                                        <td>branch2@gmail.com</td>
                                        <td>
                                            0161256
                                        </td>
                                        <td><span class="badge bg-label-success me-1">active</span>
                                            <!---->
                                        </td>
                                        <td>
                                            <div class="table_actions"><a href="#"
                                                    class="btn btn-sm btn-outline-secondary"><i
                                                        class="fa fa-gears"></i></a>
                                                <ul>
                                                    <li><a href=""><i class="fa text-info fa-eye"></i>
                                                            Quick View
                                                        </a></li>
                                                    <li><span><a href="#/user/details/5" class=""><i
                                                                    class="fa text-secondary fa-eye"></i>
                                                                Details
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span><a href="#/user/edit/5" class=""><i
                                                                    class="fa text-warning fa-pencil"></i>
                                                                Edit
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span>
                                                            <!----> <a href="#" class=""><i
                                                                    class="fa text-danger fa-trash"></i>
                                                                Deactive
                                                            </a>
                                                        </span></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input"></td>
                                        <td>6</td>
                                        <td><img src="http://127.0.0.1:8000/avatar.png" alt="Avatar"
                                                class="rounded-circle" style="height: 30px;"></td>
                                        <td><span class="text-warning cursor_pointer">
                                                mr user
                                            </span></td>
                                        <td>user@gmail.com</td>
                                        <td>
                                            01612567
                                        </td>
                                        <td><span class="badge bg-label-success me-1">active</span>
                                            <!---->
                                        </td>
                                        <td>
                                            <div class="table_actions"><a href="#"
                                                    class="btn btn-sm btn-outline-secondary"><i
                                                        class="fa fa-gears"></i></a>
                                                <ul>
                                                    <li><a href=""><i class="fa text-info fa-eye"></i>
                                                            Quick View
                                                        </a></li>
                                                    <li><span><a href="#/user/details/6" class=""><i
                                                                    class="fa text-secondary fa-eye"></i>
                                                                Details
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span><a href="#/user/edit/6" class=""><i
                                                                    class="fa text-warning fa-pencil"></i>
                                                                Edit
                                                            </a>
                                                            <!---->
                                                        </span></li>
                                                    <li><span>
                                                            <!----> <a href="#" class=""><i
                                                                    class="fa text-danger fa-trash"></i>
                                                                Deactive
                                                            </a>
                                                        </span></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-1 border-top-0">
                            <div class="d-inline-block">
                                <!---->
                            </div>
                            <div class="show-limit d-inline-block"><span>Limit:</span> <select>
                                    <option value="10">
                                        10
                                    </option>
                                    <option value="5">
                                        5
                                    </option>
                                    <option value="25">
                                        25
                                    </option>
                                    <option value="50">
                                        50
                                    </option>
                                    <option value="100">
                                        100
                                    </option>
                                </select></div>
                            <div class="show-limit d-inline-block"><span>Total:</span> <span>6</span></div>
                        </div>
                    </div>
                    <div class="canvas_backdrop">
                        <!---->
                    </div>
                    <div class="canvas_backdrop">
                        <div class="content right">
                            <div class="content_header">
                                <h3 class="offcanvas-title">Selected Users</h3> <i class="fa fa-times"></i>
                            </div>
                            <div class="cotent_body table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>id</th>
                                            <th>name</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection