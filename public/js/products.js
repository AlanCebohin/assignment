async function createProduct() {
    processing('Creating product', 'Wait a moment, we are creating the product');

    let form = document.getElementById('createProduct');
    let name = form.create_name.value;
    let price = form.create_price.value;
    let description = form.description.value;
    let image = form.url_image.value;
    let category_id = form.category_id.value;
    let brand = form.brand.value;

    return await fetch(`/products/store`, {
        credentials: "same-origin",
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-Token': CSRF
        },
        body: JSON.stringify({
            name, price, description, image, category_id, brand
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

    console.log(product);
    
    $('#table-products').prepend(`
        <tr class="products" id="product-${product.id}">
            <td class="border" id="product-name-${product.id}">
                <a href='/products/${product.slug}'>${product.name}</a>
            </td>
            <td class="border" id="product-price-${product.id}">${price}</td>
            <td class="border" id="product-image-${product.image}">
                <img
                    src="${product.image}"
                    alt="${product.name}"
                    class="rounded img-fluid w-25 p-3"
                >
            </td>
            <td class="border" id="product-brand-${product.brand}">${product.brand}</td>
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
    document.getElementById('description').value = data.getAttribute('data-description');
    document.getElementById('brand').value = data.getAttribute('data-brand');
    document.getElementById('url_image').value = data.getAttribute('data-url_image');
    
    document.getElementsByClassName('category')[0].value = data.getAttribute('data-category');
    document.getElementsByClassName('category')[1].value = data.getAttribute('data-category');
}

async function editProduct() {
    processing('Updating product', 'Wait a moment, we are updating the product');

    let form = document.getElementById('editProduct');
    let id = form.valueId.value;
    let name = form.edit_name.value;
    let price = form.edit_price.value;
    let description = form.description.value;
    let image = form.url_image.value;
    let category_id = form.category_id.value;
    let brand = form.brand.value;

    return await fetch(`/products/update/${id}`, {
        credentials: "same-origin",
        method: 'PUT',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-Token': CSRF
        },
        body: JSON.stringify({
            name, price, description, image, category_id, brand
        })
    })
    .then(response => response.json())
    .then(res => {
        if (res.data) {
            goodJob('Product edited!', 'The product was edited successfully');
            updateProduct(res.data, id);
        } else {
            somethingIsWrong(res.message, res.errors);
        }
    })
    .catch(err => {
        somethingIsWrong('Sorry', 'the product could not be updated')
        console.error(err);
    })
}

function updateProduct(data, old_slug) {
    document.getElementById(`product-name-${old_slug}`).innerHTML = `<a href='/products/${data.slug}'>${data.name}</a>`;
    document.getElementById(`product-price-${old_slug}`).innerText = parseFloat(data.price).toFixed(2);
    document.getElementById(`product-image-${old_slug}`).src = data.image;
    document.getElementById(`product-brand-${old_slug}`).innerText = data.brand;

    document.getElementById('openModal').setAttribute('data-name', data.name);
    document.getElementById('openModal').setAttribute('data-price', data.price);
    document.getElementById('openModal').setAttribute('data-id', data.slug);
}

async function deleteProduct(data) {
    let contentProduct = document.getElementById(`product-${data.slug}`);

    return await fetch(`/products/delete/${data.slug}`, {
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
