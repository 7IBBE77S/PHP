@extends("layout.master")

@section("content")
<main class="container-fluid">
    <div class="m-c">
      <div class="m-r">
        <div class="m-col1">
          <div>
            <img src="/images/reviews/reviews-plaque.png" alt="" />
          </div>
          <div class="outside-link">
            <a class="" href="{{ route('reviews') }}">PRESS REVIEWS</a>
            <a class="" href="{{ route('testimonials') }}">TESTIMONIALS</a>
          </div>
        </div>
        <div class="m-col">
          <div class="row h-btn">
            <div class="dropdown r-btn">
              <button
                class="btn btn-secondary btn-r dropdown-toggle"
                type="button"
                id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <h5>Reviews</h5>
                & Testimonials
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('reviews') }}">PRESS REVIEWS</a>
                <a class="dropdown-item" href="{{ route('testimonials') }}"
                  >TESTIMONIALS</a
                >
              </div>
            </div>
          </div>
        </div>
      
  
        <div class="r-m-c r-c">
          <div class="con-a">
            <div class="h-c">
              <div class="martha">
                <img
                  class="s-r-l"
                  src="/images/reviews/whydidyousaythatname.png"
                  alt=""
                />
              </div>
              <div class="text-center rev-h">
                <div class="sec-t-review pb-1">
                  <h4>
                    JOHN HOWIE & PLANK <br />
                    COOKING<br />
                    ON MARTHA STEWART LIVING
                  </h4>
                </div>
                <p class="con-a-w pt-2">
                  "Delicious. This is a very unusual and tasty, tasty appetizer!"
                </p>
                <p class="con-a-w">"I think we should all try plank cooking."</p>
                <p class="con-a-w">
                  <i>Martha Stewart - Martha Stewart Living Television Show</i>
                </p>
              </div>
            </div>
            <div class="martha-no">
              <img
                class="jhsm"
                src="/images/reviews/whydidyousaythatname.png"
                alt="John Howie"
              />
            </div>
            <div class="text-center alt-hide">
              <div class="sec-t-review pb-1">
                <h4>
                  JOHN HOWIE & PLANK <br />
                  COOKING<br />
                  ON MARTHA STEWART LIVING
                </h4>
              </div>
              <p class="con-a-w pt-2">
                "Delicious. This is a very unusual and tasty, tasty appetizer!"
              </p>
              <p class="con-a-w">"I think we should all try plank cooking."</p>
              <p class="con-a-w">
                <i>Martha Stewart - Martha Stewart Living Television Show</i>
              </p>
            </div>
          </div>
          <div class="shop-h">
          <div class="sec-t-s-i text-center">
            <h4>SIMPLY SEAFOOD MAGAZINE ©</h4>
          </div>
          </div>
          <div class="con-s" >
            <div class="flexy-row pt-2" >
              <p class="con-a-w con-g text-center col" >
                "Guests will delight in the delectable fragrance of salmon mingled
                with the aroma of the heated plank." Simply Seafood Magazine
              </p>
              <!-- <p class="con-a-w text-center"></p> -->
              <div class="col">
                <img src="/images/reviews/simply-food.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
@endsection