<?php
namespace App\classes;
class Product
{
    protected $products=[];
public function getAllProduct()
{
    return[
        0=>[
            'id' => 1,
            'name' => 'T-shirt',
            'category' => 'Man Fashion',
            'Brand' => 'Yellow',
            'price' => '3500',
            'description' => 'Very brautiful T-Shirt',
            'image' => 'p1.jpg'
        ],
        1=>[
            'id' => 2,
            'name' => 'Mobile',
            'category' => 'Electronics',
            'Brand' => 'Realme',
            'price' => '12000',
            'description' => ' Excellent Mobile',
            'image' => 'p2.jpg'
        ],
        2=>[
            'id' => 3,
            'name' => 'Panjabi',
            'category' => 'Man Fashion',
            'Brand' => 'Rich Man',
            'price' => '3900',
            'description' => 'Good Looking Casual Outfit',
            'image' => 'p3.jpg'
        ],
        3=>[
            'id' => 4,
            'name' => 'Pant',
            'category' => 'Man Fashion',
            'Brand' => 'Rookies',
            'price' => '3900',
            'description' => 'Best Casual Outfit',
            'image' => 'p4.jpg'
        ],
        4=>[
            'id' => 5,
            'name' => 'Full Sleve Polo',
            'category' => 'Man Fashion',
            'Brand' => 'Bang',
            'price' => '3900',
            'description' => 'Best Winter Product',
            'image' => 'p5.jpg'
        ],
        5=>[
            'id' => 6,
            'name' => 'Shirt',
            'category' => 'Man Fashion',
            'Brand' => 'Bhoom',
            'price' => '1900',
            'description' => 'Casual Shirt',
            'image' => 'p6.jpg'
        ],
    ];
}
public function getProductById($id)
{
  $this->products = $this->getAllProduct();
  foreach($this->products as $product)
  {
      if($product['id'] == $id)
      {
          return $product;
      }
  }
}

}