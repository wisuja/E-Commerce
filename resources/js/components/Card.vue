<script>
import axios from "axios";

export default {
    props: ["card"],
    computed: {
        signedIn() {
            return window.App.signedIn;
        },
        stock() {
            return this.canBuy ? `Stocks: ${this.card.stock}` : "Out of Stocks";
        },
        canBuy() {
            return this.card.stock !== 0;
        }
    },
    methods: {
        addToCart(productId, quantity = 1) {
            Swal.fire({
                title: "Error!",
                text: "Do you want to continue",
                icon: "success",
                confirmButtonText: "Cool"
            });
        }
    }
};
</script>
