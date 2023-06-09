@extends('layouts.admin')
@section('content')

<div class="app-content content">
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            <div>
                <h3 class="mb-2">User management</h3>
                <div class="container">
                    <div class="card list_card">
                        <div class="card-header">
                            <h4>Create</h4>
                            <div class="btns"><a href="#/user/"
                                    class="btn rounded-pill btn-outline-warning router-link-active"><i
                                        class="fa fa-arrow-left me-5px"></i>
                                    Back
                                </a></div>
                        </div>
                        <form class="user_create_form">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="admin_form form_1">
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div><label class="mb-2 text-capitalize">
                                                        Select user role
                                                    </label>
                                                    <div id="user_role_id" class="multiple_select_body">
                                                        <div class="multiple_select_data">
                                                            <div class="btn btn-sm btn-outline-danger">
                                                                no user role selected
                                                            </div>
                                                        </div>
                                                        <!---->
                                                        <div class="canvas_backdrop">
                                                            <!---->
                                                        </div>
                                                        <div class="canvas_backdrop">
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper"><label for="first_name"
                                                        class="text-capitalize d-block"><span class="mb-2 d-block">First
                                                            Name</span> <input type="text" id="first_name"
                                                            name="first_name" class="form-control">
                                                        <!---->
                                                    </label>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper"><label for="last_name"
                                                        class="text-capitalize d-block"><span class="mb-2 d-block">Last
                                                            Name</span> <input type="text" id="last_name"
                                                            name="last_name" class="form-control">
                                                        <!---->
                                                    </label>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper"><label for="user_name"
                                                        class="text-capitalize d-block"><span class="mb-2 d-block">User
                                                            Name</span> <input type="text" id="user_name"
                                                            name="user_name" class="form-control">
                                                        <!---->
                                                    </label>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper"><label for="email"
                                                        class="text-capitalize d-block"><span
                                                            class="mb-2 d-block">Email</span> <input type="email"
                                                            id="email" name="email" class="form-control">
                                                        <!---->
                                                    </label>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper"><label for="mobile_number"
                                                        class="text-capitalize d-block"><span
                                                            class="mb-2 d-block">Mobile Number</span> <input type="text"
                                                            id="mobile_number" name="mobile_number"
                                                            class="form-control">
                                                        <!---->
                                                    </label>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper"><label for="password"
                                                        class="text-capitalize d-block"><span
                                                            class="mb-2 d-block">Password</span> <input type="password"
                                                            id="password" name="password" class="form-control">
                                                        <!---->
                                                    </label>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper"><label for="password_confirmation"
                                                        class="text-capitalize d-block"><span
                                                            class="mb-2 d-block">confirm password</span> <input
                                                            type="password" id="password_confirmation"
                                                            name="password_confirmation" class="form-control">
                                                        <!---->
                                                    </label>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper"><label for="photo"
                                                        class="text-capitalize d-block"><span
                                                            class="mb-2 d-block">photo</span> <input type="file"
                                                            accept="image/*" id="photo" name="photo" multiple="multiple"
                                                            class="form-control">
                                                        <!---->
                                                    </label>
                                                    <div class="file_preview"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center"><button type="button" class="btn btn-outline-info"><i
                                        class="fa fa-upload"></i>
                                    Submit
                                </button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection