(function (){
    'use strict'

    ESTORE.product.cart = function (){

        var app = new Vue({
            el: '#shopping_cart',
            data: {
                items: [],
                cartTotal: [],
                fail: false,
                message: '',
                loading: false
            }
        });
    }
})();