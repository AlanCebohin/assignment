async function createProduct() {
    processing('Creating product', 'Wait a moment, we are creating the product');

    let form = document.getElementById('createProduct');
    let name = form.create_name.value;
    let price = form.create_price.value;

    return await fetch(`/products/store`, {
        credentials: "same-origin",
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-Token': CSRF
        },
        body: JSON.stringify({
            name,
            price
        })
    })
    .then(response => response.json())
    .then(res => {
        if (res.data) {
            if (document.getElementById('empty')) document.getElementById('empty').remove()
            buildProduct(res.data);
            goodJob('Product created!', 'The product was created successfully');
        } else {
            somethingIsWrong(res.message, res.errors);
        }
    })
    .catch(err => {
        somethingIsWrong('Sorry, the product could not be created')
        console.error(err);
    })
}

function buildProduct(product) {
    let obj = JSON.stringify(product);
    let price = parseFloat(product.price).toFixed(2);

    $('#table-products').prepend(`
        <tr class="products" id="product-${product.id}">
            <td class="border" id="product-name-${product.id}">${product.name}</td>
            <td class="border" id="product-price-${product.id}">${price}</td>
            <td>
                <span class="pointer"
                    id="openModal"
                    data-toggle="modal"
                    data-target="#editProductModal"
                    data-id="${product.id}"
                    data-name="${product.name}"
                    data-price="${price}"
                    onclick="setDataModal(this)"
                >Edit</span>
                /
                <span class="pointer"
                    data-toggle="modal"
                    onclick="youSure({'name':'${product.name}','id':${product.id}})"
                >Delete</span>
            </td>
        </tr>
    `);
}

function setDataModal(data) {
    document.getElementById('valueId').value = data.getAttribute('data-id');
    document.getElementById('nameId').value = data.getAttribute('data-name');
    document.getElementById('priceId').value = data.getAttribute('data-price');
}

async function editProduct() {
    processing('Updating product', 'Wait a moment, we are updating the product');

    let form = document.getElementById('editProduct');
    let id = form.valueId.value;
    let name = form.edit_name.value;
    let price = form.edit_price.value;

    return await fetch(`/products/update/${id}`, {
        credentials: "same-origin",
        method: 'PUT',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-Token': CSRF
        },
        body: JSON.stringify({
            name,
            price
        })
    })
    .then(response => response.json())
    .then(res => {
        if (res.data) {
            goodJob('Product edited!', 'The product was edited successfully');
            updateProduct(res.data);
        } else {
            somethingIsWrong(res.message, res.errors);
        }
    })
    .catch(err => {
        somethingIsWrong('Sorry', 'the product could not be updated')
        console.error(err);
    })
}

function updateProduct(data) {
    document.getElementById(`product-name-${data.id}`).innerText = data.name;
    document.getElementById(`product-price-${data.id}`).innerText = parseFloat(data.price).toFixed(2);
    document.getElementById('openModal').setAttribute('data-name', data.name);
    document.getElementById('openModal').setAttribute('data-price', data.price);
    document.getElementById('openModal').setAttribute('data-id', data.id);
}

async function deleteProduct(data) {
    let contentProduct = document.getElementById(`product-${data.id}`);

    return await fetch(`/products/delete/${data.id}`, {
        credentials: "same-origin",
        method: 'DELETE',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-Token': CSRF
        }
    })
    .then(response => response.json())
    .then(res => {
        if (res.data) {
            contentProduct.remove()
            if (!document.getElementsByClassName('products').length) location.reload()
        }
    })
    .catch(err => {
        console.error("ocurrio un error", err);
    });
}
