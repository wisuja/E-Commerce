<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach ($promotionItems as $item)
    <li data-target="#carousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
    @endforeach
  </ol>

  <div class="carousel-inner">
    @foreach ($promotionItems as $item)
      <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
        <img class="d-block w-100" src="{{ asset('images/headset-1.jpg') }}">

        <div class="carousel-caption d-none d-md-block">
          <h1>{{ $item->name }}</h1>
          <h4>${{ $item->price }}.00</h4>
          <button class="btn btn-primary btn-xl mb-3">Buy Now</button>
        </div>
      </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
