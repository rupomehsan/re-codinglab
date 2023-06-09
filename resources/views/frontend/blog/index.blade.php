@extends('layouts.app')
@section('content')
<div class="row wrapper">
    <div class="col-md-9">

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card bg-dark text-white py-3 ">
                    <div class="px-3">
                        <h2>TITLE HEADING</h2>
                        <h5>Title description, Dec 7, 2017</h5>
                    </div>

                    <div class="p-1" style="height:200px;">
                        <!-- <img src="{{asset('')}}" alt=""> -->
                        <div class="h-100 p-0">
                            <iframe class="w-100 h-100" src="https://www.youtube.com/embed/dTFXufTgfOE"
                                title="Build a Fullstack E-commerce using Next.js (react.js, mongo, tailwind, styled components)"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="p-3">
                        <p>Some text..</p>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit,
                            sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco.</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <button class="btn-primary">see more</button>
                        <p>view : 100K</p>
                        <p>like : 100K</p>
                        <p>comments : 100K</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-dark text-white py-3 ">
                    <div class="px-3">
                        <h2>TITLE HEADING</h2>
                        <h5>Title description, Dec 7, 2017</h5>
                    </div>

                    <div class="border p-1" style="height:200px;">
                        <!-- <img src="{{asset('')}}" alt=""> -->
                        <div class="h-100 p-0">
                            <iframe class="w-100 h-100" src="https://www.youtube.com/embed/dTFXufTgfOE"
                                title="Build a Fullstack E-commerce using Next.js (react.js, mongo, tailwind, styled components)"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="p-3">
                        <p>Some text..</p>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit,
                            sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco.</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">

                        <a href="{{url('/blog-details')}}" class="btn btn-primary">see more</a>
                        <p>view : 100K</p>
                        <p>like : 100K</p>
                        <p>comments : 100K</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-dark text-white py-3 ">
                    <div class="px-3">
                        <h2>TITLE HEADING</h2>
                        <h5>Title description, Dec 7, 2017</h5>
                    </div>

                    <div class="border p-1" style="height:200px;">
                        <!-- <img src="{{asset('')}}" alt=""> -->
                        <div class="h-100 p-0">
                            <iframe class="w-100 h-100" src="https://www.youtube.com/embed/dTFXufTgfOE"
                                title="Build a Fullstack E-commerce using Next.js (react.js, mongo, tailwind, styled components)"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="p-3">
                        <p>Some text..</p>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit,
                            sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco.</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <button class="btn-primary">see more</button>
                        <p>view : 100K</p>
                        <p>like : 100K</p>
                        <p>comments : 100K</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="col-md-3">
        <div class=" border">
            <aside>
                <h3>Categories</h3>
                <ul class="list-group">
                    <li class="list-group-item">Technology</li>
                    <li class="list-group-item">Travel</li>
                    <li class="list-group-item">Food</li>
                    <li class="list-group-item">Fashion</li>
                </ul>

                <h3>Recent Posts</h3>
                <ul class="list-group">
                    <li class="list-group-item">Post 1</li>
                    <li class="list-group-item">Post 2</li>
                    <li class="list-group-item">Post 3</li>
                    <li class="list-group-item">Post 4</li>
                </ul>
                <h3>populer Posts</h3>
                <ul class="list-group">
                    <li class="list-group-item">Post 1</li>
                    <li class="list-group-item">Post 2</li>
                    <li class="list-group-item">Post 3</li>
                    <li class="list-group-item">Post 4</li>
                </ul>
                <h3>Tags</h3>
                <ul class="list-group">
                    <li class="list-group-item">Post 1</li>
                    <li class="list-group-item">Post 2</li>
                    <li class="list-group-item">Post 3</li>
                    <li class="list-group-item">Post 4</li>
                </ul>
            </aside>
        </div>
    </div>
</div>



@endsection