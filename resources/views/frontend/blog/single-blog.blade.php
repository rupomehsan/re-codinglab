@extends('layouts.app')
@section('content')
<div class="row wrapper">
    <div class="col-md-9">

        <div class="row g-4">
            <div class="col-md-12">
                <div class="card bg-dark text-white py-3 ">
                    <div class="px-3">
                        <h2>TITLE HEADING</h2>
                        <h5>Title description, Dec 7, 2017</h5>
                    </div>

                    <div class="border p-1" style="height:500px;">
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor ad neque minima architecto
                            cum amet reiciendis vero provident ipsa placeat porro necessitatibus nobis quas, voluptatem
                            expedita officia repellendus quibusdam. Eveniet odit omnis voluptatum dicta aliquid, sequi
                            similique necessitatibus soluta sed, culpa voluptates, aut asperiores dignissimos cum. Modi
                            molestiae delectus impedit perferendis totam eveniet a saepe voluptatibus molestias natus,
                            optio, culpa iure deleniti velit ab corrupti possimus odit voluptates explicabo praesentium
                            vero sed, ullam iusto! Facilis, placeat voluptates! Aut vitae, accusantium repellendus
                            numquam explicabo natus saepe, ea sit modi illum odit debitis autem! Atque, eos, earum natus
                            reprehenderit placeat consequuntur totam deleniti, aspernatur eaque excepturi fugit est.
                            Sapiente id tenetur quaerat magnam, modi pariatur repellendus hic harum rerum omnis iste
                            adipisci exercitationem ipsa facilis eveniet, aperiam sed, eligendi tempora eos in error
                            delectus nam. Natus accusantium repellat totam numquam a id et voluptatibus, dicta voluptate
                            aspernatur provident voluptatem voluptas architecto reprehenderit debitis! Enim odio
                            suscipit quis sit? Perferendis, ab autem, assumenda labore voluptatem corporis similique quo
                            est eaque, iste saepe provident tenetur beatae eius ducimus dignissimos. Aspernatur velit
                            soluta commodi, nesciunt facere nisi reiciendis ab iusto tenetur eius tempora eos sequi
                            accusantium dolorum veniam! Nobis accusamus quibusdam ullam. Nobis expedita obcaecati
                            pariatur dolorum provident rerum nemo repellendus, assumenda corrupti consectetur facilis!
                            Laudantium quis nesciunt debitis dicta suscipit laborum commodi omnis laboriosam, distinctio
                            nulla vero aut corporis dolores iste tempora impedit accusantium. Soluta dolor ratione
                            temporibus magni rem, maiores quisquam odit vitae delectus error ut expedita consequuntur!
                            Accusamus fugit totam nobis beatae magni itaque error temporibus rerum, voluptate provident
                            consequatur ipsum porro eligendi molestias velit tempora minima suscipit vel impedit nisi
                            voluptatibus animi rem consectetur? Eligendi quas suscipit obcaecati, excepturi repellendus
                            minima? Exercitationem ipsa impedit eligendi, quaerat quia quis temporibus eos deleniti
                            voluptas voluptatibus illo molestias similique ullam, possimus pariatur quasi earum.</p>
                    </div>
                </div>


                <div>
                    <h3>Comments</h3>
                    <hr>
                    <div class="comments">
                        <div class="row justify-content-start align-items-center">
                            <div class="col-md-2">
                                <img class="rounded-circle" style="height:100px; width:100px"
                                    src="{{asset('assets/images/profile.JPG')}}" alt="">
                            </div>
                            <div class="col-md-8 p-0">
                                <div>
                                    <p>Mary R. Peterson</p>
                                    <p>nano purse as fully me or point. Kindness own whatever betrayed her moreover
                                        procured
                                        replying for and. Proposal indulged no do do sociable he throwing settling.me
                                    </p>
                                    <p>Sep 26, 2016 at 14:35</p>
                                </div>

                            </div>
                            <div class="col-md-2"><button for="exampleInputEmail1">reply</button></div>
                        </div>
                        <hr>
                        <div class="reply ms-5">
                            <div class="row justify-content-start align-items-center ">
                                <div class="col-md-2">
                                    <img class="rounded-circle" style="height:100px; width:100px"
                                        src="{{asset('assets/images/profile.JPG')}}" alt="">
                                </div>
                                <div class="col-md-8 p-0">
                                    <div>
                                        <p>Mary R. Peterson</p>
                                        <p>nano purse as fully me or point. Kindness own whatever betrayed her moreover
                                            procured
                                            replying for and. Proposal indulged no do do sociable he throwing
                                            settling.me
                                        </p>
                                        <p>Sep 26, 2016 at 14:35</p>
                                    </div>

                                </div>
                                <div class="col-md-2"><button>reply</button></div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>

                <div class="write-comments">
                    <p>WRITE A COMMENT</p>
                    <div>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Comments</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>


                            <button class="btn btn-success">Submit</button>
                        </form>
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