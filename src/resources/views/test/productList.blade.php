@include('common_pages.header')
<h2>{{$productList[0]['name']}} Category</h2>
<div>
    <div>
        <button class="addProduct btn btn-primary" data-toggle="modal" data-target="#myModal" data-category-id="{{$productList[0]['id']}}">Add New Item</button>
    </div>
    <table class="table table-light">
        <thead class="thead-dark"><tr><td scope="col">Name</td><td scope="col">Price</td><td scope="col">Quantity</td><td scope="col">Description</td><td scope="col">Created At</td><td></td><td></td></tr></thead>
        <tbody>
        <?php foreach ($productList[0]['products'] as $list): ?>
        <tr>
            <td>{{$list['name']}}</td>
            <td>{{$list['price']}}</td>
            <td>{{$list['quantity']}}</td>
            <td>{{$list['description']}}</td>
            <td>{{$list['created_at']}}</td>
            <td><button class="btn btn-warning editProduct" data-toggle="modal"
                        data-target="#myModal"
                        data-name="{{$list['name']}}"
                        data-price="{{$list['price']}}"
                        data-quantity="{{$list['quantity']}}"
                        data-description="{{$list['description']}}"
                        data-id="{{$list['id']}}"
                >Edit</button></td>
            <td><button class="btn btn-danger deleteProduct" data-toggle="modal" data-target="#myModal" data-name="{{$list['name']}}" data-id="{{$list['id']}}">Delete</button></td>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
<div></div>

@include('common_pages.modal')

@include('common_pages.footer')
