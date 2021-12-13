@include('common_pages.header')
<h2>{{$productList[0]['name']}} Category</h2>
<div>
    <div>
        <button class="addProduct btn btn-primary" data-toggle="modal" data-target="#myModal" data-category-id="{{$productList[0]['id']}}">Add New Item</button>
    </div>
    <table>
        <th><tr><td>Name</td><td>Price</td><td>Description</td><td>Created At</td></tr></th>
        <?php foreach ($productList[0]['products'] as $list): ?>
        <tr>
            <td>{{$list['name']}}</td>
            <td>{{$list['price']}}</td>
            <td>{{$list['description']}}</td>
            <td>{{$list['created_at']}}</td>
            <td><button class="btn btn-warning editProduct" data-toggle="modal"
                        data-target="#myModal"
                        data-name="{{$list['name']}}"
                        data-price="{{$list['price']}}"
                        data-description="{{$list['description']}}"
                        data-id="{{$list['id']}}"
                >Edit</button></td>
            <td><button class="btn btn-danger deleteProduct" data-toggle="modal" data-target="#myModal" data-name="{{$list['name']}}" data-id="{{$list['id']}}">Delete</button></td>
        </tr>
        <?php endforeach ?>
    </table>
</div>
<div></div>

@include('common_pages.modal')

@include('common_pages.footer')
