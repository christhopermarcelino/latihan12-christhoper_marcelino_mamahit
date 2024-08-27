<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = [
            [
                'name' => 'Samsung',
                'uniqueID' => 'S004'
            ],
            [
                'name' => 'Apple',
                'uniqueID' => 'A007'
            ]
        ];
        $product = [
            'name' => 'Samsung S24',
            'uniqueID' => 'S00401'
        ];

        // return view('category.index', compact('category'));
        // return view('category.index')->with('category', $category)->with('product', $product);
        return view('category.index', [
            'category' => $category,
            'product' => $product
        ]);
    }

    public function products()
    {
        $datas = [
            [
                'id' => 1,
                'name' => 'Samsung',
                'created_at' => now(),
                'updated_at' => now(),
                'products' => [
                    [
                        'id' => 1,
                        'name' => 'Samsung S24 Ultra',
                        'category_id' => 1,
                        'price' => 24000000,
                        'discount' => rand(0, 100),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'id' => 2,
                        'name' => 'Samsung S24 FE',
                        'category_id' => 1,
                        'price' => 11000000,
                        'discount' => rand(0, 100),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ]
            ],
            [
                'id' => 2,
                'name' => 'Apple',
                'created_at' => now(),
                'updated_at' => now(),
                'products' => [
                    [
                        'id' => 3,
                        'name' => 'IPhone 16 Pro Max',
                        'category_id' => 1,
                        'price' => 27000000,
                        'discount' => rand(0, 100),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'id' => 4,
                        'name' => 'IPhone 15',
                        'category_id' => 1,
                        'price' => 16000000,
                        'discount' => rand(0, 100),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'id' => 4,
                        'name' => 'IPhone 12',
                        'category_id' => 1,
                        'price' => 10000000,
                        'discount' => rand(0, 100),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ]
            ]
        ];

        return view('category.index', compact('datas'));
    }
}
