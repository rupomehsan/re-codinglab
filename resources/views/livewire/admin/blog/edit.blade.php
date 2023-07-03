<div>
    <div class="app-content content">
        <div class="content-wrapper container-xxl p-0">
            <div class="d-flex align-items-center justify-content-between border p-1 mb-2 ">
                <h3 class="">Blogs / Create</h3>
                <div class="btns">
                    <span>
                        <a href="{{url('admin/blogs')}}" class="btn rounded-pill btn-outline-info">
                            See All
                        </a>
                    </span>
                </div>
            </div>
            <form action="" wire:submit.prevent="updateItem">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="field_wrapper">
                                <x-form.select attribute="multiple" name="category_id" model="formData.category_id"
                                    class :data="$categories" lb="Select Category" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="field_wrapper">
                                <x-form.select attribute="" name="status" model="formData.status" class :data="$status"
                                    lb="Select Status" />
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <div class="field_wrapper">
                                <x-form.input name="date" model="formData.date" type="date" ph='' class />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group  mb-2">
                            <div class="field_wrapper">
                                <x-form.input name="time" model="formData.time" type="time" ph='' class />
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-12">
                        <div class="form-group  mb-2">
                            <div class="field_wrapper">
                                <x-form.input name="title" model="formData.title" type="text" ph='' class />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group  mb-2">
                            <div class="field_wrapper">
                                <x-form.text-input name="description" model="formData.description" id="description"
                                    lb="description" :value="$formData['description']" />
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group  mb-2">
                            <div wire:ignore class="field_wrapper">
                                <x-form.text-input name="additional_content_one" model="formData.additional_content_one"
                                    id="additional_content_one" lb="Addition Content"
                                    :value="$formData['additional_content_one']" />
                            </div>
                        </div>
                    </div>

                </div>
                <button id="submit" type="submit" class="btn btn-outline-info"><i class="fa fa-upload"></i>
                    Submit
                </button>
            </form>


        </div>
    </div>
</div>
@push('custom-js')
<script>
$(document).ready(function() {
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
    }
    window.addEventListener('success', event => {
        toastr.success(event.detail.message, 'Success!')
    })
})
</script>
@endpush