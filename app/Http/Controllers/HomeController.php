<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


    public function Home()
    {
        # code...

        $categores = ['phones', 'watches', 'sport_waer', 'other'];


        $products
            =
            [
                'product1' => [
                    'id' => 1,
                    'price' => 24.99,
                    'desc' => 'desc1'
                ],
                'product2' => [

                    'id' => 2,
                    'price' => 50.99,
                    'desc' => 'desc2'
                ],

                'product3' => [

                    'id' => 3,
                    'price' => 60.99,
                    'desc' => 'desc3'
                ]
                ,


                'product4' => [

                    'id' => 4,
                    'price' => 379.99,
                    'desc' => 'Shirts'



                ]

                ,


                'product5' => [

                    'id' => 5,
                    'price' => 379.99,
                    'desc' => 'Shirts'



                ]

                ,


                'product6' => [

                    'id' => 6,
                    'price' => 379.99,
                    'desc' => 'Shirts'



                ]


                ,


                'product7' => [

                    'id' => 7,
                    'price' => 379.99,
                    'desc' => 'Shirts'



                ]
                ,


                'product8' => [

                    'id' => 8,
                    'price' => 379.99,
                    'desc' => 'Shirts'



                ]

                ,


                'product9' => [

                    'id' => 9,
                    'price' => 379.99,
                    'desc' => 'Shirts'



                ]

                ,


                'product10' => [

                    'id' => 10,
                    'price' => 379.99,
                    'desc' => 'Shirts'



                ]

            ];


        // $products=['phones','watches','sport_waer','other'];
        // return view('home' ,['products'=>$products]);

        // return view('home' ,['categores'=>$categores ])->with('products',$products);
        // with(compact('store'))
        return view('home', ['categores' => $categores ,'products' => $products ]);
        // return view('home', ['categores' => $categores ]);

        // return view('home' ,['categores'=>$categores ]);



    }






    public function Products(Request $request)
    {
        # code...

        // $categores = ['phones', 'watches', 'sport_waer', 'other'];
        $id = $request['id'];
      

        $products
        =
        [
            'product1' => [
                'id' => 1,
                'price' => 24.99,
                'desc' => 'desc1'
            ],
            'product2' => [

                'id' => 2,
                'price' => 50.99,
                'desc' => 'desc2'
            ],

            'product3' => [

                'id' => 3,
                'price' => 60.99,
                'desc' => 'desc3'
            ]
            ,


            'product4' => [

                'id' => 4,
                'price' => 379.99,
                'desc' => 'Shirts'



            ]

            ,


            'product5' => [

                'id' => 5,
                'price' => 379.99,
                'desc' => 'Shirts'



            ]

            ,


            'product6' => [

                'id' => 6,
                'price' => 379.99,
                'desc' => 'Shirts'



            ]


            ,


            'product7' => [

                'id' => 7,
                'price' => 379.99,
                'desc' => 'Shirts'



            ]
            ,


            'product8' => [

                'id' => 8,
                'price' => 379.99,
                'desc' => 'Shirts'



            ]

            ,


            'product9' => [

                'id' => 9,
                'price' => 379.99,
                'desc' => 'Shirts'



            ]

            ,


            'product10' => [

                'id' => 10,
                'price' => 379.99,
                'desc' => 'Shirts'



            ]

        ];
           

        // $products=['phones','watches','sport_waer','other'];
        // return view('home' ,['products'=>$products]);
// var_dump($id);
        //$product=$products[$id];
        // $product=echo (array_search($id,$products,true));
        
        function searchForId($id, $array) {
            foreach ($array as $key => $val) {
                if ($val['id'] == $id) {
                    return $val;
                }
            }
            return null;
         }
         $product = searchForId($id, $products);
        // foreach ($products as $key => $value) {
        //     $product=$value[$id];
        // }
        // var_dump($product);
        // return view('home' ,['categores'=>$categores ])->with('products',$products);
        // with(compact('store'))
        return view('product',['product' => $product]);
        // return view('home' ,['categores'=>$categores ]);



    }




}
