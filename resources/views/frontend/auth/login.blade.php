@extends('layouts.frontend')
@section('content')
<div>
    <section class="contact contact-bg my80" id="contact">
        <div class="wrapper">
            <x-section-title title="Admin login" />
            <div class=" w-50 m-auto py-5 box-shadow bg-waterlap">
                <div class="container-contact100">
                    <div class="wrap-contact100">
                        <form id="contactForm" class="contact100-form">
                            <div class="wrap-input100 validate-input mt-20" data-validate="Valid email is required: ex@abc.xyz">
                                <input id="email" class="input100" type="email" name="email" placeholder="Enter your email">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input mt-20" data-validate="Valid email is required: ex@abc.xyz">
                                <input id="email" class="input100" type="password" name="email" placeholder="Enter your email">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="d-flex justify-content-center align-items-center w-100">
                                <button class="submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

</section>
</div>
@endsection