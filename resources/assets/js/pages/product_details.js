(function (){
    'use strict'

    ESTORE.product.details = function(){
        var app = new Vue({
           el:'#product',
           data: {
               product: [],
               category: [],
               subCategory: [],
               productId: $('#product').data('id'),
               loading: false
           }
        });
    }
})();