<h1>All Products</h1>
<ul>
    <?php foreach ($products as $product): ?>
        <li>{{$product['name']}} <strong>{{ $product['price'] }}</strong></li>
    <?php endforeach ?>
</ul>
<a href='/products/create'>Add New</a>