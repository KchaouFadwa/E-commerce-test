@extends('layouts.master' )

@section('title')
    E-commerce
@endsection

@section('content')

   <div  id="shoppingCart">
       <div id="cartItemsContainer">
           <h2 class="text-center">Current Visitor identify :<span class="identification">{{$visit->id}}</span></h2>
               <!cart not empty>
               <h2 class="text-center" id="notEmpty">Items in your cart</h2>
            <!cart empty>
               <h2 class="text-center" id="empty">No item in cart</h2>
           <i class="fa fa-times-circle-o fa-3x openCloseCart" aria-hidden="true"></i>
           <div class="row" >
                <div id="cartItems">
                </div>
           </div>
           <div class="row">
               <span class="price" id="cartTotal"></span>
           </div>
           <div class="row">
               <button  class="btn-success center-block" id="checkout"> Checkout </button>
               <button class="btn-danger center-block" id="notinterrested"> Not Interested </button>
           </div>

       </div>
   </div>

    <div class="container center-block">
        <div class="row">
                <div>
                    <div>

                        <h3 class="text-center">France</h3>
                        <div class="text-center">
                            <img src="{{ URL::to('src/images/France.jpg') }}" alt=""/>
                        </div>
                        <div class="itemText">
                            <span  style ="display: none  " class="id" >1</span>
                            <p class="price-container text-center">€<span class="price">10</span></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <button class="add add1 btn btn-success center-block ">Add to cart</button>

                    <button  style ="display: none "class='removeItem1  btn btn-danger center-block'>Remove from cart </button>

                </div>
        </div>
            <div class="row">
                <div>
                    <div>
                        <h3 class="text-center">Bali</h3>
                        <div class="text-center">
                            <img src="{{ URL::to('src/images/Bali.jpg') }}" alt=""  />
                        </div>
                        <div class="itemText">
                            <span  style ="display: none  " class="id" >2</span>
                            <p class="price-container text-center">€<span class="price">15</span></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <button class="add add2 btn btn-success center-block ">Add to cart</button>
                    <button  style ="display: none "class='removeItem2 btn btn-danger center-block'>Remove from cart </button>
                </div>
            </div>
        <div class="row">
            <div>
                    <div>
                        <h3 class="text-center">Japan</h3>

                        <div class="text-center ">
                            <img src="{{ URL::to('src/images/Japn.jpg') }}" alt=""  />
                        </div>
                        <div class="itemText">
                            <span  style ="display: none  " class="id" >3</span>
                            <p class="price-container text-center">€<span class="price">20</span></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <button class="add add3 btn btn-success center-block ">Add to cart</button>
                    <button  style ="display: none "class='removeItem3 btn btn-danger center-block'>Remove from cart </button>
                </div>
            </div>

    </div>







@endsection

@section('scripts')

    <script>
            $(document).ready(function(){

            let itemCount = 0;
            let priceTotal = 0;
            let visitId = parseInt($('.identification').text());

            sessionStorage.setItem(1, 0);
            sessionStorage.setItem(2, 0);
            sessionStorage.setItem(3, 0);
            sessionStorage.setItem(priceTotal, 0);
            sessionStorage.setItem("id",visitId );


            // Hide and Show Cart Items
            $('.openCloseCart').click(function(){

              if (itemCount == 0) {
                  $('#empty').css('display', 'block');
                  $('#notEmpty').css('display', 'none');
                  $('#checkout').css('display', 'none');
                    $('#notinterrested').css('display', 'block');
                }else {
                  $('#notEmpty').css('display', 'block');
                  $('#empty').css('display', 'none');
                    $('#notinterrested').css('display', 'none');
                    $('#checkout').css('display', 'block');
                }

                $('#shoppingCart').toggle();

                $('#cartItems').find( ".removeItem1" ).css('display', 'none');
                $('#cartItems').find( ".removeItem2" ).css('display', 'none');
                $('#cartItems').find( ".removeItem3" ).css('display', 'none');

            });

            $('.add').click(function (){
                itemCount ++;
                let id =$(this).siblings().find('.id').text();


                $('#itemCount').text(itemCount).css('display', 'block');
                
                $(this).siblings().clone().appendTo('#cartItems').append('<button class="removeItem btn-danger">Remove from cart</button>');

                // Calculate Total Price
                let price = parseInt($(this).siblings().find('.price').text());
                priceTotal += price;
                $('#cartTotal').text("Total: €" + priceTotal);
                if (id=="1"){
                    sessionStorage.setItem(1, 1);
                $('.add1').css('display', 'none');
                $('.removeItem1').css('display', 'block');

                }
                if (id=="2"){
                    sessionStorage.setItem(2, 1);

                    $('.add2').css('display', 'none');
                    $('.removeItem2').css('display', 'block');

                }

                if (id=="3"){
                    sessionStorage.setItem(3, 1);

                    $('.add3').css('display', 'none');
                    $('.removeItem3').css('display', 'block');

                }


            });

            $('.removeItem1').click(function (){
                $('#cartItems').find( ".itemDetails1" ).remove();

                itemCount --;
                priceTotal -= 10;
                $('.add1').css('display', 'block');
                $('.removeItem1').css('display', 'none');
                $('#cartTotal').text("Total: €" + priceTotal);
                sessionStorage.setItem(1, 0);


            });

            $('.removeItem2').click(function (){
                $('#cartItems').find( ".itemDetails2" ).remove();

                itemCount --;
                priceTotal -= 15;
                $('.add2').css('display', 'block');
                $('.removeItem2').css('display', 'none');
                $('#cartTotal').text("Total: €" + priceTotal);
                sessionStorage.setItem(2, 0);


            });
            $('.removeItem3').click(function (){
                $('#cartItems').find( ".itemDetails3" ).remove();

                itemCount --;
                priceTotal -= 20;
                $('.add3').css('display', 'block');
                $('.removeItem3').css('display', 'none');
                $('#cartTotal').text("Total: €" + priceTotal);
                sessionStorage.setItem(3, 0);


            });



            $('#checkout').click(function () {
                    let P1=sessionStorage.getItem(1);
                    let P2=sessionStorage.getItem(2);
                    let P3=sessionStorage.getItem(3);

                let url = "{{ route('checkout') }}?id="+visitId+"&prod1="+P1+"&prod2="+P2+"&prod3="+P3+"";
                $(location).attr('href', url); // Using this
            });

            $('#notinterrested').click(function () {


                let url = "{{ route('notinterrested') }}?id="+visitId+"";
                $(location).attr('href', url); // Using this
            });






            // Remove Item From Cart
            $('#shoppingCart').on('click', '.removeItem', function(){
                $(this).parent().remove();
                itemCount --;
                $('#itemCount').text(itemCount);

                // Remove Cost of Deleted Item from Total Price
                let price = parseInt($(this).siblings().find('.price').text());
                let id =parseInt($(this).siblings().find('.id').text());
                if (id=="1"){
                    $('.add1').css('display', 'block');
                    $('.removeItem1').css('display', 'none');
                    sessionStorage.setItem(1, 0);


                }
                if (id=="2"){
                    $('.add2').css('display', 'block');
                    $('.removeItem2').css('display', 'none');
                    sessionStorage.setItem(2, 0);


                }
                if (id=="3"){
                    $('.add3').css('display', 'block');
                    $('.removeItem3').css('display', 'none');
                    sessionStorage.setItem(3, 0);


                }

                priceTotal -= price;
                $('#cartTotal').text("Total: €" + priceTotal);

                if (itemCount == 0) {
                    $('#itemCount').css('display', 'none');
                    $('#checkout').css('display', 'none');
                    $('#notinterrested').css('display', 'block');
                }
            });

        });


    </script>

@endsection





