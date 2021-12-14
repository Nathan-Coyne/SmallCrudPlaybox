const table = document.getElementById('wish-list-table');
const heading = document.getElementById('wish-list-heading')
const addCategory = document.querySelector('.addCategory');
const editCategory = $('.editCategory');
const deleteCategory = $('.deleteCategory');
const addProduct = $('.addProduct');
const editProduct = $('.editProduct');
const deleteProduct = $('.deleteProduct');

if(addCategory) {
    addCategory.addEventListener('click', function () {
        document.querySelector('.modal-header').innerHTML = 'Add New Category';
        document.querySelector('.modal-body').innerHTML = '<form id="newCategory">' +
            '<input type="text" id="newCategoryName" placeholder="name"/>' +
            '</form>';
        document.querySelector('#modal-placeholder-button').innerHTML = '<button type="button" id="addNewCategory" class="btn btn-primary">Save changes</button>'
        $('#addNewCategory').unbind();
        $('#addNewCategory').click(function () {
            axios({
                method: 'PUT',
                url: '/category',
                data: {
                    'name': $('#newCategoryName').val()
                }
            }).then(response => {
                location.reload()
            });
        })
    })
}

if(editCategory) {
    editCategory.click(function() {
        document.querySelector('.modal-header').innerHTML = 'Edit Product';
        document.querySelector('.modal-body').innerHTML = '<form id="newProduct">' +
            `<input type="text" id="editCategoryName" placeholder="name" value="${this.dataset.name}" />` +
            '</form>';
        document.querySelector('#modal-placeholder-button').innerHTML = '<button type="button" id="editCategoryBtn" class="btn btn-primary">Save changes</button>'
        $('#editCategoryBtn').click(() => {
            axios({
                method: 'PATCH',
                url: '/category',
                data: {
                    'name': $('#editCategoryName').val(),
                    'id': this.dataset.id
                }
            }).then(response => {
                location.reload()
            });
        })
    })
}
if(deleteCategory) {
    deleteCategory.click(function () {
        document.querySelector('.modal-header').innerHTML = `Delete ${this.dataset.name} Category`;
        document.querySelector('.modal-body').innerHTML = 'Are you sure you would like to delete this category?';
        document.querySelector('#modal-placeholder-button').innerHTML = '<button type="button" id="deleteCategoryBtn" class="btn btn-primary">Delete</button>'
        $('#deleteCategoryBtn').click(() => {
            console.log( this.dataset.id);
            axios({
                method: 'DELETE',
                url: '/category',
                data: {
                    'id': this.dataset.id
                }
            }).then(response => {
                location.reload()
            });
        })
    })
}
if(addProduct) {
    addProduct.click(function () {
        document.querySelector('.modal-header').innerHTML = 'Add New Product';
        document.querySelector('.modal-body').innerHTML = '<form id="newProduct">' +
            '<input type="text" id="newProductName" placeholder="name"/>' +
            '<input type="text" id="newProductDescription" placeholder="description"/>' +
            '<input type="number" id="newProductPrice" placeholder="amount"/>' +
            '<input type="number" id="newProductQuantity" placeholder="quantity"/>' +
            '</form>';
        document.querySelector('#modal-placeholder-button').innerHTML = '<button type="button" id="addNewProduct" class="btn btn-primary">Save changes</button>'
        $('#addNewProduct').click(() => {
            axios({
                method: 'PUT',
                url: '/product',
                data: {
                    'name': $('#newProductName').val(),
                    'desc':  $('#newProductDescription').val(),
                    'price': $('#newProductPrice').val(),
                    'quantity': $('#newProductQuantity').val(),
                    'category_id': this.dataset.categoryId
                }
            }).then(response => {
                //location.reload()
            });
        })
    })
}

if(editProduct) {
    editProduct.click(function() {
        document.querySelector('.modal-header').innerHTML = 'Edit Product';
        document.querySelector('.modal-body').innerHTML = '<form id="newProduct">' +
            `<input type="text" id="editProductName" placeholder="name" value="${this.dataset.name}" />` +
            `<input type="text" id="editProductDescription" placeholder="description" value="${this.dataset.description}"/>` +
            `<input type="number" id="editProductPrice" placeholder="amount" value="${this.dataset.price}"/>` +
            `<input type="number" id="editProductQuantity" placeholder="quantity" value="${this.dataset.quantity}"/>` +
            '</form>';
        document.querySelector('#modal-placeholder-button').innerHTML = '<button type="button" id="editProductBtn" class="btn btn-primary">Save changes</button>'
        $('#editProductBtn').click(() => {
            axios({
                method: 'PATCH',
                url: '/product',
                data: {
                    'name': $('#editProductName').val(),
                    'desc':  $('#editProductDescription').val(),
                    'price': $('#editProductPrice').val(),
                    'quantity': $('#editProductQuantity').val(),
                    'id': this.dataset.id
                }
            }).then(response => {
                location.reload()
            });
        })
    })
}

if(deleteProduct) {
    deleteProduct.click(function () {
        document.querySelector('.modal-header').innerHTML = `Delete ${this.dataset.name} Product`;
        document.querySelector('.modal-body').innerHTML = 'Are you sure you would like to delete this product?';
        document.querySelector('#modal-placeholder-button').innerHTML = '<button type="button" id="deleteProductBtn" class="btn btn-primary">Delete</button>'
        $('#deleteProductBtn').click(() => {
            axios({
                method: 'DELETE',
                url: '/product',
                data: {
                    'id': this.dataset.id
                }
            }).then(response => {
                location.reload()
            });
        })
    })
}

