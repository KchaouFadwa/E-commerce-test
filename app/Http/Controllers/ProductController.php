<?php

namespace App\Http\Controllers;
use App\Product;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cart;
use App\Visit;

class ProductController extends Controller
{
    //

    public function getIndex(){
        //$products=Product::all();
        $visit=new Visit ();
        $visit->save();




        //return view('shop.index',['products'=>$products ]);
        return view('shop.index',['visit'=>$visit ]);

    }

    public function getAddToCart(Request $request,$id){

        $product=Product::find($id);
        $oldCart= Session::has('cart')? Session::get('cart'):null;
        $cart =new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
       // dd($request->session()-> get('cart'));
        return redirect()->route('product.index');

    }

    public function getCart(Request $request){
       if (!Session::has('cart')){

         return View('shop.shooping-cart',['products'=>null]);
       }

       $oldCart=Session::get('cart');
       $cart =new cart($oldCart);
       return view('shop.shooping-cart',[

           'products'=>$cart->items,
           'totalPrice'=>$cart->totalPrice

       ]);

    }



    public function create(){


        $products=Product::create([
             'imagePath'=>'http:',
            'title'=>'test',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ',
            'price'=> 25


        ]);
         $id=$products->id;
         $title=$products->title;
       // return 'created succeful product with the id '+$id+'with the title '+$title;

        return  response()->json([
            'id' => $id,
            'title' => $title
        ]);



    }


    public function checkout(Request $request){
        //$id=Session::get('id');
        //dd($request->session()-> get('1'));
          $prod1=$request->prod1;
          $prod2=$request->prod2;
          $prod3=$request->prod3;
          $visit=Visit::find($request->id);
          $visit->prod1=$prod1;
          $visit->prod2=$prod2;
          $visit->prod3=$prod3;





        $visit->save();

        return view('shop.exit1',['visit'=>$visit ]);


    }

    public function notinterrested(Request $request){

        $visit=Visit::find($request->id);
        return view('shop.exit2',['visit'=>$visit ]);


    }



    public function getlist(Request $request){
        $visits=Visit::all();
        $product1=Product::find(1);

        $product2=Product::find(2);
        $product3=Product::find(3);



        $list=array();

        foreach ($visits as $visit) {

            $listProduits=array();

            if($visit->prod1==1){
                $name=$product1->title;
                array_push($listProduits,$name);

            }
            if($visit->prod2==1){
                $name2=$product2->title;
                array_push($listProduits,$name2);

            }
            if($visit->prod3==1){
                $name3=$product3->title;
                array_push($listProduits,$name3);

            }


            $list[$visit->id]=$listProduits;

        }
        $visit=new Visit();


        return view('shop.list',['list'=>$list,'visit'=>$visit ]);




    }















}
