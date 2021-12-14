@include('common_pages.header')
<h2>Category Selection</h2>
<div>
    <div>
        <button class="addCategory btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Category</button>
    </div>
    <table class="table table-light">
        <thead class="thead-dark"><tr><td scope="col">Name</td><td scope="col">Created At</td><td scope="col">View</td><td></td><td></td></tr></thead>
        <tbody>
        <?php foreach ($wishList as $list): ?>
        <tr>
            <td>{{$list['name']}}</td>
            <td>{{$list['created_at']}}</td>
            <td><a href="product?id={{$list['id']}}">View</a></td>
            <td><button class="btn btn-warning editCategory"  data-toggle="modal" data-target="#myModal" data-name="{{$list['name']}}" data-id="{{$list['id']}}">Edit</button></td>
            <td><button class="btn btn-danger deleteCategory"  data-toggle="modal" data-target="#myModal" data-name="{{$list['name']}}" data-id="{{$list['id']}}">Delete</button></td>
        </tr>
    <?php endforeach ?>
        </tbody>
    </table>
</div>
<div></div>

@include('common_pages.modal')

@include('common_pages.footer')
