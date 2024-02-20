{{--
<x-main/>
<x-header-sep/>
	<!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{url('/hom')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="{{url('/shopgrid')}}">Shop Grid</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container px-6 mx-auto">
    <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($products as $product)
        <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
            <img src="{{ url('asset/images/'. $product->image) }}" alt="" class="w-full max-h-60" >
            <div class="flex items-end justify-end w-full bg-cover">

            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">{{ $product->title }}</h3>
                <span class="mt-2 text-gray-500">${{ $product->price }}</span>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->title }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="{{ $product->image }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                </form>
            </div>

        </div>
        @endforeach
    </div>
</div>
<x-newsletter-inner/>
<x-footer/> --}}





<x-main/>
<x-header-sep/>
	<!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{url('/hom')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="{{url('/shopgrid')}}">Shop Grid</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Product Style -->
    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="shop-sidebar">
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Categories</h3>
                                <ul class="categor-list">
                                    @foreach ($categories as $category)
                                    <li><a href="#">{{ $category->name }}</a></li>
                                @endforeach
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Shop By Price -->
                                <div class="single-widget range">
                                    <h3 class="title">Shop by Price</h3>
                                    <div class="price-filter">
                                        <div class="price-filter-inner">
                                            <div id="slider-range"></div>
                                                <div class="price_slider_amount">
                                                <div class="label-input">
                                                    <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="check-box-list">
                                        <li>
                                            <label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>
                                        </li>
                                        <li>
                                            <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>
                                        </li>
                                        <li>
                                            <label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count">(8)</span></label>
                                        </li>
                                    </ul>
                                </div>
                                <!--/ End Shop By Price -->
                            <!-- Single Widget -->
                            <div class="single-widget recent-post">
                                <h3 class="title">Recent post</h3>
                                <!-- Single Post -->
                                <div class="single-post first">
                                    <div class="image">
                                        <img src="https://via.placeholder.com/75x75" alt="#">
                                    </div>
                                    <div class="content">
                                        <h5><a href="#">Girls Dress</a></h5>
                                        <p class="price">$99.50</p>
                                        <ul class="reviews">
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li><i class="ti-star"></i></li>
                                            <li><i class="ti-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                                <!-- Single Post -->
                                <div class="single-post first">
                                    <div class="image">
                                        <img src="https://via.placeholder.com/75x75" alt="#">
                                    </div>
                                    <div class="content">
                                        <h5><a href="#">Women Clothings</a></h5>
                                        <p class="price">$99.50</p>
                                        <ul class="reviews">
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li><i class="ti-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                                <!-- Single Post -->
                                <div class="single-post first">
                                    <div class="image">
                                        <img src="https://via.placeholder.com/75x75" alt="#">
                                    </div>
                                    <div class="content">
                                        <h5><a href="#">Man Tshirt</a></h5>
                                        <p class="price">$99.50</p>
                                        <ul class="reviews">
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Manufacturers</h3>
                                <ul class="categor-list">
                                    <li><a href="#">Forever</a></li>
                                    <li><a href="#">giordano</a></li>
                                    <li><a href="#">abercrombie</a></li>
                                    <li><a href="#">ecko united</a></li>
                                    <li><a href="#">zara</a></li>
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <!-- Shop Top -->
                            <div class="shop-top">
                                <div class="shop-shorter">
                                    <div class="single-shorter">
                                        <label>Show :</label>
                                        <select>
                                            <option selected="selected">09</option>
                                            <option>15</option>
                                            <option>25</option>
                                            <option>30</option>
                                        </select>
                                    </div>
                                    <div class="single-shorter">
                                        <label>Sort By :</label>
                                        <select>
                                            <option selected="selected">Name</option>
                                            <option>Price</option>
                                            <option>Size</option>
                                        </select>
                                    </div>
                                </div>
                                <ul class="view-mode">
                                    <li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
                                    <li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                            </div>
                            <!--/ End Shop Top -->
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($products as $prices)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="{{url('/detail', ['id' => $prices->id]) }}">
                                        <img class="default-img"  src="{{ asset('asset/images/' .$prices->image) }}" alt="#">
                                        <img class="hover-img" src="{{ asset('asset/images/' .$prices->image) }}" alt="#">
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{ $prices->id }}" name="id">
                                                <input type="hidden" value="{{  $prices->title }}" name="name">
                                                <input type="hidden" value="{{ $prices->price }}" name="price">
                                                <input type="hidden" value="{{ $prices->Discounted_Price}}" name="discount">
                                                <input type="hidden" value="{{ $prices->image }}"  name="image">
                                                <input type="hidden" value="1" name="quantity">
                                                <button class="px-4 py-2 text-white bg-dark rounded">Add To Cart</button>
                                        </form>
                                            {{-- <a title="Add to cart" href="#">Add to cart</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{url('/detail', ['id' => $prices->id]) }}">{{$prices->title}}</a></h3>
                                    <div class="product-price">
                                        <span class="line-through">${{ $prices->price }}</span><br>
                                        <span >${{ $prices->Discounted_Price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Product Style 1  -->
    <x-newsletter-inner/>
    <x-footer/>
