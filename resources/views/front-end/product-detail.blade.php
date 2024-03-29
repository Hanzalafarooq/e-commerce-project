<x-main/>
<x-header-sep/>


<div class="pd-wrap">
  <div class="container">
    <div class="heading-section">
      <h2>Product Details</h2>
    </div>
    {{-- <form action="{{ route('cart.store', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf --}}
    <div class="row">
      <div class="col-md-6">
        <div id="slider" class="owl-carousel product-slider">
          <div class="item">
            <input type="hidden" name="image" value="{{$product->image }}"/>
            <img src="{{ asset('asset/images/' . $product->image) }}" style="height: 20pc"/>
          </div>
          <div class="item">
            <img src="" />
          </div>

        </div>
        <div id="thumb" class="owl-carousel product-thumb">
            @foreach ($gallery as $photo)
          <div class="item">
            <img src="{{ asset('asset/images/' . $photo->gallery) }}" />
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-6">
        <div class="product-dtl">
          <div class="product-info" >
            <div class="product-name">{{ $product->title }}</div>

            <div class="reviews-counter">
              <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" checked />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" checked />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" checked />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
              </div>
              <span>4 Reviews</span>
            </div>
          <div class="product-price-discount" ><input type="hidden" name="dprice" value="{{$product->Discounted_Price }}"/>
            <span>{{ $product->Discounted_Price }}</span><input type="hidden" name="price" value="{{$product->price }}"/>
            <span class="line-through" >{{ $product->price }}</span>
        </div>
    </div>
          <input type="text" name="description" value="{{$product->Discription}}">
          <div class="row">
            <div class="col-md-4">
              <label for="size">Size</label>
              <select id="size" name="size" class="form-control">
                <option value="" disabled selected>Select Size</option>
                @foreach ($sizes as $size)
                <option value="{{ $size->id }}">{{ $size->size_name }}</option>
                @endforeach
                {{-- <option>M</option>
                <option>L</option>
                <option>XL</option> --}}
              </select>
            </div>
            <div class="col-md-4">
              <label for="color">Color</label>
              <select id="color" name="color" class="form-control">
                <option value="" disabled selected>Select color</option>
                @foreach ($colors as $color)
                <option value="{{ $color->id }}">{{ $color->color_name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          {{-- <div class="product-count">
            <label for="size">Quantity</label>

              <div class="qtyminus">-</div>
              <input type="text" name="quantity" value="1" class="qty">
              <div class="qtyplus">+</div> --}}

              <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $product->id }}" name="id">
                <input type="hidden" value="{{ $product->title }}" name="name">
                <input type="hidden" value="{{ $product->price }}" name="price">
                <input type="hidden" value="{{ $product->image}}"  name="image">
                <input type="hidden" value="1" name="quantity">
                {{-- <input type="submit" value="add to cards"> --}}
                <button class="px-4 py-2 text-white bg-dark rounded" type="submit">Add To Cart</button>
        </form>
          {{-- </div> --}}
        </div>
      </div>
    </div>

    <div class="product-info-tabs">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
        </div>
        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
          <div class="review-heading">REVIEWS</div>
          <p class="mb-20">There are no reviews yet.</p>
          <form class="review-form">
            <div class="form-group">
              <label>Your rating</label>
              <div class="reviews-counter">
                <div class="rate">
                  <input type="radio" id="star5" name="rate" value="5" />
                  <label for="star5" title="text">5 stars</label>
                  <input type="radio" id="star4" name="rate" value="4" />
                  <label for="star4" title="text">4 stars</label>
                  <input type="radio" id="star3" name="rate" value="3" />
                  <label for="star3" title="text">3 stars</label>
                  <input type="radio" id="star2" name="rate" value="2" />
                  <label for="star2" title="text">2 stars</label>
                  <input type="radio" id="star1" name="rate" value="1" />
                  <label for="star1" title="text">1 star</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Your message</label>
              <textarea class="form-control" rows="10"></textarea>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Name*">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Email Id*">
                </div>
              </div>
            </div>
            <button class="round-black-btn">Submit Review</button>
          </form>
        </div>
      </div>
    </div>

    <div style="text-align:center;font-size:14px;padding-bottom:20px;">Get free icon packs for your next project at <a href="http://iiicons.in/" target="_blank" style="color:#ff5e63;font-weight:bold;">www.iiicons.in</a></div>
  </div>
</div>

    <x-newsletter-inner/>
    <x-footer/>
