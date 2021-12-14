<?php

namespace App\Module\Product\Repository;

use App\Module\Product\Model\Product;

class Repository
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function createProduct(string $name, float $price, string $description, int $categoryId, int $quantity)
    {
        $this->product = new Product();

        $this->product->name = $name;
        $this->product->price = $price;
        $this->product->description = $description;
        $this->product->wish_list_id = $categoryId;
        $this->product->quantity = $quantity;
        $this->product->save();
    }

    public function getAllProducts(): object
    {
        return $this->product->all();
    }

    public function updateProduct($name, $price, $desc, $id, $quantity)
    {
        $this->product = new Product();
        $this->product->where('id', $id)->update([
            'name' => $name,
            'price' => $price,
            'description' => $desc,
            'quantity' => $quantity
        ]);
    }

    public function deleteProduct($id)
    {
        $this->product = new Product();
        $this->product->where('id', $id)->delete();
    }


}
