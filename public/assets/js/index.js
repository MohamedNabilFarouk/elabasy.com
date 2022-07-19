$(document).ready(function () {
   let url = window.location.hostname;

   url = "http://"+url + '/';




   function add_to_cart (item_id,qty = 1) {
       let data = {
           qty,
           id:item_id,
       };

       axios.post(url  + `add_to_cart`,data).then(res => {
           console.log('ss');
           $('.my_loader').css('display','flex');

           setTimeout(function () {

               $('.my_loader').css('display','none');
           },1000)
           return res;
       }).then(function (res) {

           $('#my_cart').html(res.data.totalQty);

       }).catch(error => {
           $('.my_loader').css({display:'none'});

       });
   }


   $('.e-product').click(function (e) {
       e.preventDefault();
       var product_id = $(this).data('id');
       add_to_cart(product_id);

   })















});
