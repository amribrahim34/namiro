<template>
    <div class="col-md-6 col-xl-4 product">
        <div class="product-wrapper mb-30">
            <div class="product-img">
                <a href="">
                    <!-- {{$product->getFirstMedia('cover')}}                          -->
                    <img src="{{asset('assets/namiro/img/product/fashion-colorful/no-image-available-grid.png')}}" alt="">
                </a>
                <span>hot</span>
                <div class="product-action">
                    <a class="animate-left" title="Wishlist" href="#">
                        <i class="pe-7s-like"></i>
                    </a>
                    <form class="d-inline p-0" action="{{route('processes.carts.store')}}" method="post">
                        <!-- @csrf -->
                        <input type="hidden" name="product_id" value="id">
                        <button type="submit" class="animate-top btn " title="اضافة الي السلة ">
                            <i class="pe-7s-cart"></i>
                        </button>
                    </form>
                    
                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#product id" href="#">
                        <i class="pe-7s-look"></i>
                    </a>
                </div>
            </div>
            <div class="product-content text-right">
                <h4><a href=""> name </a></h4>
                <span>price</span>
            </div>
        </div>
    </div>
</template>

<script>

export default defineComponent({
    data:function(){
        return {
            products:[],
        }
    },
    mounted(){
        this.loadProducts();
    },
    methods:{
        loadProducts:function(){

        },
    },
    setup() {
        
    },
})
</script>
