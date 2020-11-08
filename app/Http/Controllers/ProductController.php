<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomCrawler;

class ProductController extends Controller
{
    protected const URL = "https://www.digikala.com/product/";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('singleProduct');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id = 'dkp-90825')
    {
        $crw = new CustomCrawler(self::URL . $id);
        try {
            $title = $crw->getCustomTagWithClass('.c-product__title');
            $price = $crw->getCustomTagWithClass('.c-product__seller-price-pure');
            $image  = $crw->getImage($title,'data-src');
        }catch (\InvalidArgumentException $e){
            return response()->json(['message' => 'ایدی کالا نامعتبر می باشد'],404);
        }catch (\Throwable $e){
            report($e);
        }
        return response()->json([
            'title' => $title,
            'price' => $price,
            'image' => $image
        ]);

    }



}
