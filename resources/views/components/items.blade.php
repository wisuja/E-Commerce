<div class="container mt-3">
  <h1 class="font-weight-bold mb-0">See All Products</h1>
  <div class="row">
      @foreach ($listItems as $item)
          @include('components._item', ['item' => $item])
      @endforeach
  </div>
</div>