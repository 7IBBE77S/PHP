@extends("layout.master")

@section("content")
<main class="container-fluid">
    <div class="h-c">
      <div class="p-bg">
        <img class="s-lg" src="/images/salmon.png" alt="plank cooking logo" />
      </div>
      <div class="npbg">
        <img class="s-sm" src="/images/salmon.png" alt="Salmon" />
      </div>
    </div>
    <div class="h-pg-p">
      <div class="h-c c-s">
        <div class="pr-1">
          <a href="{{ route('shop.spicerubs') }}">
            <img
              src="/images/spice-rubs.png"
              class="h-p"
              href="#"
              alt="spice rubs"
            />
          </a>
          <a href="{{ route('shop.bakingplanks') }}">
            <img src="/images/bakingplanks.png" class="h-p" alt="spice rubs" />
          </a>
        </div>
  
        <div class="">
          <a href="{{ route('shop.cookbooks') }}">
            <img src="/images/cookbooks.png" class="h-p" alt="spice rubs" />
          </a>
          <a href="{{ route('shop.bbqplanks') }}">
            <img src="/images/bbqplanks.png" class="h-p" alt="spice rubs" />
          </a>
        </div>
      </div>
    </div>
    <div class="h-pg-p">
      <div class="h-c c-s">
        <img src="/images/FooterPlank.png" alt="footer" class="foot-plank" />
      </div>
    </div>
  </main>
@endsection