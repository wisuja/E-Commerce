<card :card={{ $item }} inline-template>
  <div class="col-12 col-md-4 col-xl-2">
      <div class="card w-100 my-3">
          <img src="{{ asset($item->photo) }}" class="card-img-top">
          <div class="card-body">
              <h5 class="card-title text-primary"><a href="#">{{ $item->name }}</a></h5>
              <p class="card-text">${{ $item->price }}.00</p>
              <p class="card-text" v-text="stock"></p>
              <button class="btn btn-warning btn-xl" v-if="signedIn && canBuy" @click="addToCart({{ $item->id }})">
                  <i class="fas fa-shopping-cart"></i>
                  <span>Add to Cart</span>
              </button>
          </div>
      </div>
  </div>
</card>