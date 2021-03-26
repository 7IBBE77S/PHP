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
  
        <div class="r-m-c a-con">
          <div class="con-a">
            <p class="con-a-w pt-2">
              “I must tell you I’m very impressed with the prompt delivery of the
              four planks I ordered on December 4th and received on December 7th.
              My husband and I have thoroughly enjoyed our own plank and have
              experimented quite a bit. I probably cook on it twice a week. Thanks
              for the great service." -Becky C
            </p>
            <div class="sec-t-review pb-1">
              <h4></h4>
            </div>
            <p class="con-a-w pt-2">
              "Last night, I used your dry herb rub for salmon to enhance the
              flavor of shrimp. My husband and I enjoyed the flavors that both the
              cedar plank and herb rub gave the shellfish. But the added benefit
              was the woodsy aroma throughout the house. It brought me back to my
              Vermont days, with a wood burning fire place." -A. Cardello
            </p>
            <div class="sec-t-review pb-1">
              <h4></h4>
            </div>
            <p class="con-a-w pt-2">
              "Thank you for a great product. We use it all the time. It might
              even keep us away from your restaurant since we can make our own
              great meals!" -Kyle Ohashi
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection