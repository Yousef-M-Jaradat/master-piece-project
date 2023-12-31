@extends('template.layout.master')
@section('content')
    <div class="hero-wrap hero-bread"
        style="background-image: url('{{ asset('image/mas/img/pexels-anna-tarazevich-72999571.jpg') }}');">
        <!-- Content for the hero section goes here -->
    </div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span>
                </p>
                <h1 class="mb-0 bread">Products</h1>
            </div>
        </div>
    </div>
    </div>

    {{-- <div class="wrapper">
        <div class="d-md-flex align-items-md-center">
            <div class="h3">Fruits and vegetables</div>
            <div class="ml-auto d-flex align-items-center views"> <span class="btn text-success"> <span
                        class="fas fa-th px-md-2 px-1"></span><span>Grid view</span> </span> <span class="btn"> <span
                        class="fas fa-list-ul"></span><span class="px-md-2 px-1">List view</span> </span> <span
                    class="green-label px-md-2 px-1">428</span> <span class="text-muted">Products</span> </div>
        </div>
        <div class="d-lg-flex align-items-lg-center pt-2">
            <div class="form-inline d-flex align-items-center my-2 mr-lg-2 radio bg-light border"> <label
                    class="options">Most Popular <input type="radio" name="radio"> <span class="checkmark"></span>
                </label> <label class="options">Cheapest <input type="radio" name="radio" checked> <span
                        class="checkmark"></span> </label> </div>
            <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label
                    class="tick">Farm <input type="checkbox" checked="checked"> <span class="check"></span> </label>
                <span class="text-success px-2 count"> 328</span> </div>
            <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label
                    class="tick">Bio <input type="checkbox"> <span class="check"></span> </label> <span
                    class="text-success px-2 count"> 72</span> </div>
            <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label
                    class="tick">Czech republic <input type="checkbox"> <span class="check"></span> </label> <span
                    class="border px-1 mx-2 mr-3 font-weight-bold count"> 12</span> <select name="country" id="country"
                    class="bg-light">
                    <option value="" hidden>Country</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="Uk">UK</option>
                </select> </div>
        </div>
        <div class="d-sm-flex align-items-sm-center pt-2 clear">
            <div class="text-muted filter-label">Applied Filters:</div>
            <div class="green-label font-weight-bold p-0 px-1 mx-sm-1 mx-0 my-sm-0 my-2">Selected Filtre <span
                    class=" px-1 close">&times;</span> </div>
            <div class="green-label font-weight-bold p-0 px-1 mx-sm-1 mx-0">Selected Filtre <span
                    class=" px-1 close">&times;</span> </div>
        </div>
        <div class="filters"> <button class="btn btn-success" type="button" data-toggle="collapse"
                data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filter<span
                    class="px-1 fas fa-filter"></span></button> </div>
        <div id="mobile-filter">
            <div class="py-3">
                <h5 class="font-weight-bold">Categories</h5>
                <ul class="list-group">
                    <li
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                        vegetables <span class="badge badge-primary badge-pill">328</span> </li>
                    <li
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                        Fruits <span class="badge badge-primary badge-pill">112</span> </li>
                    <li
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                        Kitchen Accessories <span class="badge badge-primary badge-pill">32</span> </li>
                    <li
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                        Chefs Tips <span class="badge badge-primary badge-pill">48</span> </li>
                </ul>
            </div>
            <div class="py-3">
                <h5 class="font-weight-bold">Brands</h5>
                <form class="brand">
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Royal Fields <input
                                type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Crasmas Fields <input
                                type="checkbox" checked> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma Farm <input
                                type="checkbox" checked> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field Eve <input
                                type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar Steve <input
                                type="checkbox"> <span class="check"></span> </label> </div>
                </form>
            </div>
            <div class="py-3">
                <h5 class="font-weight-bold">Rating</h5>
                <form class="rating">
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label>
                    </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span
                                class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                </form>
            </div>
        </div>
        <div class="content py-md-0 py-3">
            <section id="sidebar">
                <div class="py-3">
                    <h5 class="font-weight-bold">Categories</h5>
                    <ul class="list-group">
                        <li
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                            vegetables <span class="badge badge-primary badge-pill">328</span> </li>
                        <li
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                            Fruits <span class="badge badge-primary badge-pill">112</span> </li>
                        <li
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                            Kitchen Accessories <span class="badge badge-primary badge-pill">32</span> </li>
                        <li
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                            Chefs Tips <span class="badge badge-primary badge-pill">48</span> </li>
                    </ul>
                </div>
                <div class="py-3">
                    <h5 class="font-weight-bold">Brands</h5>
                    <form class="brand">
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Royal Fields <input
                                    type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Crasmas Fields
                                <input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma Farm
                                <input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field Eve
                                <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar Steve
                                <input type="checkbox"> <span class="check"></span> </label> </div>
                    </form>
                </div>
                <div class="py-3">
                    <h5 class="font-weight-bold">Rating</h5>
                    <form class="rating">
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span>
                            </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                    class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                    class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                    class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span
                                    class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                    class="check"></span> </label> </div>
                    </form>
                </div>
            </section> <!-- Products Section -->
            <section id="products">
                <div class="container py-3">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                            <div class="card"> <img class="card-img-top"
                                    src="https://www.freepnglogos.com/uploads/cucumber-png/cucumber-png-image-purepng-transparent-png-26.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                            class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-md-0 pt-4">
                            <div class="card"> <img class="card-img-top"
                                    src="https://www.freepnglogos.com/uploads/carrot-png/carrot-mint-with-turmeric-chia-equine-pure-delights-12.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                            class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-0 pt-4">
                            <div class="card"> <img class="card-img-top"
                                    src="https://www.freepnglogos.com/uploads/tomato-png/tomato-bunch-fresh-tomatoes-png-image-pngpix-24.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                            class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                            <div class="card"> <img class="card-img-top"
                                    src="https://www.freepnglogos.com/uploads/grapes-png/grapes-grape-red-transparent-png-stickpng-5.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                            class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                            <div class="card"> <img class="card-img-top"
                                    src="https://www.freepnglogos.com/uploads/cucumber-png/cucumber-png-image-purepng-transparent-png-26.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                            class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                            <div class="card"> <img class="card-img-top"
                                    src="https://www.freepnglogos.com/uploads/watermelon-png/watermelon-gea-products-2.png">
                                <div class="card-body">
                                    <h6 class="font-weight-bold pt-1">Product title</h6>
                                    <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                            class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3">
                                        <div class="d-flex flex-column">
                                            <div class="h6 font-weight-bold">36.99 USD</div>
                                            <div class="text-muted rebate">48.56</div>
                                        </div>
                                        <div class="btn btn-primary">Buy now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div> --}}
    </div>

    @include('template.product.sections.filter')
    @include('template.product.sections.products')
@endsection
