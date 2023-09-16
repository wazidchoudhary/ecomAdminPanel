const knifeHandles = {
    "CAMEL & CATTLE BONE SCALE": ["WHITE SMOOTH BONE SCALES", "DYED STABILIZED BONE SCALES", "DYED STABILIZED JIGGED BONE SCALES", "IN STAG BONE SCALES"],
    "WATER BUFFALO HORN SCALES": ["WATER BUFFALO HORN SCALES", "WATER BUFFALO HORN DYED AND JIGGED SCALES", "WATER BUFFALO HORN BARK SCALES"],
    "RAM'S (SHEEP) HORN SCALE": ["NATURAL HORN SCALES"],
    "ACRYLIC SCALES": [],
    "WOOD SCALES": [],
    "HORN ROLLS": [],
};

const products = {
    "GUITAR PARTS": ["BONE NUT & SADDLES", "HORN NUT & SADDLES", "BONE PICK BLANKS", "HORN PICK BLANKS", "BONE BRIDGE PIN BLANKS", "PICKS"],
    "HAIR COMBS": ["HORN COMB", "MUSTACHE HORN COMB", "BONE COMB", "HAIR BONE NEEDLE", "WOODEN COMB"],
    "PEN BLANKS": ["BONE PEN BLANKS", "ACRYLIC PEN BLANKS", "HORN PEN BLANKS", "WOODEN PEN BLANKS"],
    "BONE & HORN BEADS": ["BONE BEADS", "BONE HAIR PIPE BEADS", "HORN BEADS", "HORN HAIR PIPE BEADS"],
    "DRINKING HORN & MUG": ["DRINKING HORN", "HORN MUG"],
    "BONE FOLDER": ["BONE FOLDER", "TEFLON BONE FOLDER", "SHOE HORN", "BULL SHOE HORN"],
    "BULL HORN CUTLERY": ["HORN BOWL", "HORN SPOON"],
    "BUFFALO HORN PLATES": ["BONE BUTTONS", "BONE PENDANTS", "BUFFALO HORN SPACER", "BUFFALO HORN STRIKER"],
    JEWELLERY: ["BONE AND INLAY JEWELLERY BOX"],
    "BONE DICE": [],
    "WOODEN CUTLERY": [],
    "HORN AND BONE BUTTON": [],
};

const addCategory = () => {
    const name = document.getElementById("categoryName");
    Id = Math.floor(Math.random() * 1000000000);
    let err;
    if (name.value.trim() === "") {
        swal.fire({
            icon: "error",
            title: "error",
            text: "Please fill all given input Fields",
        });
        return;
    }
    let obj = {}
    obj[name.value] = [""]
    update(ref(db, "category/"), 
    obj
    ).catch((error) => {
        err = error;
    });
    if (err) {
        swal.fire({
            icon: "error",
            title: "error",
            text: err.message,
        });
    } else {
        swal.fire({
            icon: "success",
            title: "Category",
            text: "Added Successfully",
        });
        name.value = "";
        viewSelectCategory();
    }
};
const addSubCategory = () => {
    const categoryName = document.getElementById("selectProductCategory");
    const name = document.getElementById("subCategoryName");
    Id = Math.floor(Math.random() * 1000000000);
    if (name.value.trim() === "") {
        swal.fire({
            icon: "error",
            title: "error",
            text: "Please fill all given input Fields",
        });
        return;
    }
    let err;
    
    get(child(ref(db), `category/${categoryName.value}/`)).then((snapshot) => {
        if (snapshot.exists()) {
            const subCategory = [...snapshot.val()]
            if(subCategory[0] == ""){
                subCategory[0] = name.value
            }else{
                subCategory.push(name.value)
            }
            
            set(ref(db, "category/" + categoryName.value), subCategory)
            .then(()=>{
                swal.fire({
                    icon: "success",
                    title: "Sub-Category",
                    text: "Added Successfully",
                });
                name.value = ""
            })
            .catch((error) => {
                    err = error;
            })
             
        }
    })
};

const addPriceCategory = () => {
    const name = document.getElementById("priceCategoryName");
    Id = Math.floor(Math.random() * 1000000000);
    if (name.value.trim() === "") {
        swal.fire({
            icon: "error",
            title: "error",
            text: "Please fill all given input Fields",
        });
        return;
    }
    set(ref(db, "priceCategory/" + Id), {
        categoryName: name.value,
    })
        .catch((error) => {
            swal.fire({
                icon: "error",
                title: "error",
                text: error.message,
            });
        })
        .then(() => {
            swal.fire({
                icon: "success",
                title: "Category",
                text: "Added Successfully",
            });
            name.value = "";
        });
};

const showCategory = () => {
    document.getElementById("categoryShow").innerHTML = "";
    const dbRef = ref(db);
    get(child(dbRef, `category/`)).then((snapshot) => {
        if (snapshot.exists()) {
            snapshot.forEach(function (childSnapshot) {
                var category = childSnapshot.val();
                var id = childSnapshot.key;
                document.getElementById("categoryShow").innerHTML +=
                    `<tr style="border-bottom:.5px solid #000005">
                        <td class="d-none d-lg-table-cell"  scope="row">` +
                    id +
                    `</td>
                        <td>` +
                    category.map((cat)=> cat)+
                    `</td>
                        <td><button class="btn-delete" type="button"  onclick="onDeleteCategory('` +
                    id +
                    `')"><span class="fa fa-trash"></span></button></td>
                    </tr>`;
            });
        }
    });
};

const onDeleteCategory = (key) => {
    remove(ref(db, "category/" + key)).then(() => {
        remove(ref(db, "subCategory/" + key)).then(() => {
            swal.fire("good job", "Category Deleted", "success");
            showCategory();
        });
    });
};

const viewSelectCategory = () => {
    const dbRef = ref(db);
    document.getElementById("selectProductCategory").innerHTML = "";
    get(child(dbRef, `category/`))
        .then((snapshot) => {
            if (snapshot.exists()) {
                snapshot.forEach((childSnapshot) => {
                    var category = childSnapshot.val();
                    var id = childSnapshot.key;
                    document.getElementById("selectProductCategory").innerHTML += `
                    <option value="${id}"> ${id}</option>`;
                });
            } else {
                console.log("No data available");
            }
        })
        .catch((error) => {
            console.error(error);
        });
};

const fetchPriceCategory = () => {
    const dbRef = ref(db);
    document.getElementById("priceCategory").innerHTML = "";
    get(child(dbRef, `priceCategory/`))
        .then((snapshot) => {
            document.getElementById("priceCategory").innerHTML = `
                    <option value="None">None</option>`;
            if (snapshot.exists()) {

                snapshot.forEach((childSnapshot) => {
                    var category = childSnapshot.val();
                    var id = childSnapshot.key;
                    document.getElementById("priceCategory").innerHTML += `
                    <option value="${id}"> ${category.categoryName}</option>`;
                });
            } else {
                console.log("No data available");
            }
        })
        .catch((error) => {
            console.error(error);
        });
};

/*-----------------------------------------------------------------------------------------------------------------*/

const preview = (e, type) => {
    // document.getElementById("showImage").src = URL.createObjectURL(
    //     e.target.files[0]
    // );
    let container = "previewContainer";
    if (type === "Edit") {
        container = "previewContainerEdit";
    }
    document.getElementById(container).innerHTML = "";
    const files = e.target.files;
    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        const imageURL = URL.createObjectURL(file);

        // Create image preview element
        const imgPreview = document.createElement("img");
        imgPreview.src = imageURL;
        imgPreview.style.width = "30%"; // Adjust the image size as needed
        imgPreview.style.height = "170px";
        imgPreview.style.objectFit = "cover";
        imgPreview.style.margin = "1.6%";

        // Add image preview to the container
        if (type === "Edit") {
            previewContainerEdit.appendChild(imgPreview);
        } else {
            previewContainer.appendChild(imgPreview);
        }

        // Create option for main image selector
        // const option = document.createElement('option');
        // option.value = imageURL;
        // option.innerText = `Image ${i + 1}`;
        // mainImageSelector.appendChild(option);
    }
};
const viewCategory = () => {
    const dbRef = ref(db);
    document.getElementById("productCategory").innerHTML = "";
    get(child(dbRef, `category/`)).then((snapshot) => {
        if (snapshot.exists()) {
            document.getElementById("productCategory").innerHTML = `<option value="select">Select Category</option>`;
            snapshot.forEach((childSnapshot) => {
                var category = childSnapshot.val();
                var id = childSnapshot.key;
                document.getElementById("productCategory").innerHTML += `<option value="${id}">${id}</option>`;
            });
        }
    });
};
const viewSubCategory = (category) => {
    const dbRef = ref(db);
    get(child(dbRef, `category/${category}/`)).then((snapshot) => {
        if (snapshot.exists()) {
            document.getElementById("productSubCategory").innerHTML = `<option value="select">select SubCategory</option>`;
            if (typeof snapshot.val() !== "string") {
                snapshot.val().forEach((child) => {
                    document.getElementById("productSubCategory").innerHTML += `
                  <option value="${child}">${child}</option>`;
                });
            }
        }
    });
};
const according = (e) => {
    //const Category=document.getElementById("productCategory");
    viewSubCategory(e.target.value);
};

function lowestHighestPrice(stringsArray) {
    if (stringsArray.length === 0) {
        return null; // Handle empty array case
    }

    let lowest = Number(stringsArray[0].price); // Initialize with the first element
    let highest = Number(stringsArray[0].price); // Initialize with the first element

    for (let i = 1; i < stringsArray.length; i++) {
        const num = Number(stringsArray[i].price);
        if (!isNaN(num)) {
            // Check if the conversion is successful
            if (num < lowest) {
                lowest = num;
            }
            if (num > highest) {
                highest = num;
            }
        }
    }

    return { lowest, highest };
}
const addFeatured = (id,event) =>{
    update(ref(db, "product/" + id), {
        featured:event.target.checked
    })
}
const showProduct = () => {
    const dbRef = ref(db);
    document.getElementById("showProduct").innerHTML = "";
    get(child(dbRef, `product/`)).then((snapshot) => {
        if (snapshot.exists()) {
            snapshot.forEach(function (childSnapshot) {
                var product = childSnapshot.val();
                var id = childSnapshot.key;
                var price =
                    typeof product.productPrice == "string"
                        ? product.productPrice
                        : lowestHighestPrice(product.productPrice).lowest + " - " + lowestHighestPrice(product.productPrice).highest;
                // Create a DOMParser instance
                var parser = new DOMParser();
                // Parse the HTML string
                var doc = parser.parseFromString(product.productDescription, "text/html");

                // Get all div elements
                var divElements = doc.querySelectorAll("div");
                let divText = "";
                // Loop through each div and extract text
                divElements.forEach(function (div) {
                    divText += div.textContent.trim(); // Get the text content and remove leading/trailing whitespace
                });

                document.getElementById("showProduct").innerHTML += `
                <tr>
                  <td><input style="-webkit-appearance: checkbox" type="checkbox" id="vehicle1" name="vehicle1" value="Bike" onclick="addFeatured(${product.productId},event)" ${product.featured ? 'checked' : ''}></td>
                  <td><img src=${product.productImage} height="50px" width="50px" /></td>
                  <td>${product.productName}</td>
                  <td style="width:80px">${divText.substring(0, 100)}...</td>
                  <td>${product.productCategory}</td>
                  <td>${product.productSubCategory}</td>
                  <td>${price}</td>
                  <td>${product.productQty}</td>
                  <td>${product.productType}</td>
                  <td>${product.productColor}</td>
                  <td>${product.productSize}</td>

                  <td><button class="btn-edit" type="button"  onclick="onEditProducts('${id}')"><span class="fa fa-edit"></span></button><button class="btn-delete" type="button"  onclick="onDeleteProducts('${id}')"><span class="fa fa-trash"></span></button></td>
                </tr>`;
            });
        }
    });
};

let multiplePrice = [];
const addMultiplePrice = () => {
    const price = document.getElementById("productMultiplePrice");
    const type = document.getElementById("priceType");
    document.getElementById("priceList").innerHTML = "";
    if (price.value.trim() != "" && type.value.trim() != "") {
        multiplePrice.push({ type: type.value, price: price.value });
    }

    price.value = "";
    type.value = "";
    const priceCategory = document.getElementById("priceCategory");
    multiplePrice.forEach((res, i) => {
        if (res) {
            document.getElementById("priceList").innerHTML += `
            <div class="col-4" style="padding:10px">${res.type} ${priceCategory.options[
                priceCategory.selectedIndex
            ].innerHTML.trim()}</div> <div class="col-4" style="padding:10px">$${
                res.price
            }</div>  <div class="col-3"> <button type="button" class="btn-delete" onclick="removeMultiplePrice('${i}')"><span class="fa fa-trash"></span></button></div>
            `;
        }
    });
};

const removeMultiplePrice = (index) => {
    multiplePrice.splice(index, 1);
    addMultiplePrice();
};

const clearMultiplePrice = () => {
    multiplePrice = [];
    addMultiplePrice();
};

const addProduct = async () => {
    const image = document.getElementById("productImage").files;
    const name = document.getElementById("productName");
    const description = document.getElementById("productDescription");
    const selectCategory = document.getElementById("productCategory");
    const subCategory = document.getElementById("productSubCategory");
    const price = document.getElementById("productPrice");
    const oldPrice = document.getElementById("productOldPrice");
    const qty = document.getElementById("productQuantity");
    const color = document.getElementById("productColor");
    const type = document.getElementById("productType");
    const size = document.getElementById("productSize");
    const priceCategory = document.getElementById("priceCategory");
    const priceCategoryName = priceCategory.options[priceCategory.selectedIndex].innerHTML.trim();

    const id = Math.floor(Math.random() * 1000000000);

    const category = selectCategory.value;
    let productPrice = price.value;
    if (multiplePrice.length > 0) {
        productPrice = multiplePrice;
    } else {
        productPrice = price.value;
    }
    if (name.value.trim() === "" || category.trim() === "" || qty.value.trim() === "") {
        swal.fire({
            icon: "error",
            title: "error",
            text: "Please fill all given input Fields",
        });
        //document.getElementById('btnAddProduct').disabled=true;
        return;
    }
    if (selectCategory.value === "select") {
        swal.fire({
            icon: "error",
            title: "error",
            text: "Please select atLeast one Category",
        });
        return;
    }

    document.getElementById("loader").innerHTML = `<div class="spinner-border text-light" role="status">
        <span class="sr-only">Loading...</span>
    </div>`;
    document.getElementById("btnAddProduct").disabled = true;
    const imageUrlArray = [];
    for (let i = 0; i < image.length; i++) {
        const file = image[i];
        const fileName = file.name;
        const storageRef = sRef(storage, "productImages/" + id + `/${fileName}`);

        // 'file' comes from the Blob or File API
        uploadBytes(storageRef, file).then((snapshot) => {
            const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            document.getElementsByTagName("img")[i];
            // showLoader(document.getElementsByTagName('img')[i], progress);
            getDownloadURL(snapshot.ref).then((downloadURL) => {
                let err;
                imageUrlArray.push(downloadURL);
                if (imageUrlArray.length === image.length) {
                    set(ref(db, "product/" + id), {
                        productId: id,
                        productName: name.value,
                        productImage: imageUrlArray,
                        productCategory: category,
                        productSubCategory: subCategory.value,
                        priceCategory: { id: priceCategory.value, name: priceCategoryName },
                        productPrice: productPrice,
                        productOldPrice: oldPrice.value,
                        productQty: qty.value,
                        productType: type.value,
                        productColor: color.value,
                        productSize: size.value,
                        productDescription: description.innerHTML,
                    })
                        .catch((error) => {
                            err = error;
                            document.getElementById("loader").innerHTML = "Add Product";
                            document.getElementById("loader").style = "";
                            swal.fire({
                                icon: "error",
                                title: "error",
                                text: error.message,
                            });
                        })
                        .then(() => {
                            document.getElementById("loader").innerHTML = "Add Product";
                            document.getElementById("loader").style = "";
                            name.value = "";
                            price.value = "";
                            qty.value = "";
                            oldPrice.value = "";
                            viewCategory();
                            document.getElementsByClassName("ql-editor")[0].innerHTML = "";
                            document.getElementById("productSubCategory").innerHTML = "";
                            document.getElementById("productImage").value = "";
                            document.getElementById("previewContainer").innerHTML = "";
                            multiplePrice = [];
                            document.getElementById("priceList").innerHTML = "";
                            swal.fire({
                                icon: "success",
                                title: "Product",
                                text: "Added Successfully",
                            });
                            document.getElementById("btnAddProduct").disabled = false;
                        });
                }
            });
        });
    }
};

const updateProduct = async () => {
    const productId = window.location.href.split("?")[1];
    const image = document.getElementById("productImage").files;
    const name = document.getElementById("productName");
    const description = document.getElementById("productDescription");
    const selectCategory = document.getElementById("productCategory");
    const subCategory = document.getElementById("productSubCategory");
    const price = document.getElementById("productPrice");
    const oldPrice = document.getElementById("productOldPrice");
    const qty = document.getElementById("productQuantity");
    const color = document.getElementById("productColor");
    const type = document.getElementById("productType");
    const size = document.getElementById("productSize");
    const priceCategory = document.getElementById("priceCategory");
    const priceCategoryName = priceCategory.options[priceCategory.selectedIndex].innerHTML.trim();

    const category = selectCategory.value;
    let productPrice = price.value;
    if (multiplePrice.length > 0) {
        productPrice = multiplePrice;
    } else {
        productPrice = price.value;
    }
    if (name.value.trim() === "" || category.trim() === "" || qty.value.trim() === "") {
        swal.fire({
            icon: "error",
            title: "error",
            text: "Please fill all given input Fields",
        });
        //document.getElementById('btnAddProduct').disabled=true;
        return;
    }
    if (selectCategory.value === "select") {
        swal.fire({
            icon: "error",
            title: "error",
            text: "Please select atLeast one Category",
        });
        return;
    }

    document.getElementById("loader").innerHTML = `<div class="spinner-border text-light" role="status">
        <span class="sr-only">Loading...</span>
    </div>`;
    document.getElementById("btnAddProduct").disabled = true;
    const imageUrlArray = [];
    if (image.length > 0) {
        deleteProductImages(productId).then(() => {
            for (let i = 0; i < image.length; i++) {
                const file = image[i];
                const fileName = file.name;
                const storageRef = sRef(storage, "productImages/" + productId + `/${fileName}`);
                // 'file' comes from the Blob or File API
                uploadBytes(storageRef, file).then((snapshot) => {
                    const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                    document.getElementsByTagName("img")[i];
                    // showLoader(document.getElementsByTagName('img')[i], progress);
                    getDownloadURL(snapshot.ref).then((downloadURL) => {
                        let err;
                        imageUrlArray.push(downloadURL);
                        if (imageUrlArray.length === image.length) {
                            update(ref(db, "product/" + productId), {
                                productName: name.value,
                                productImage: imageUrlArray,
                                productCategory: category,
                                productSubCategory: subCategory.value,
                                priceCategory: { id: priceCategory.value, name: priceCategoryName },
                                productPrice: productPrice,
                                productOldPrice: oldPrice.value,
                                productQty: qty.value,
                                productType: type.value,
                                productColor: color.value,
                                productSize: size.value,
                                productDescription: description.innerHTML,
                            })
                                .catch((error) => {
                                    err = error;
                                    document.getElementById("loader").innerHTML = "Update";
                                    document.getElementById("loader").style = "";
                                    swal.fire({
                                        icon: "error",
                                        title: "error",
                                        text: error.message,
                                    });
                                })
                                .then(() => {
                                    document.getElementById("loader").innerHTML = "Update";
                                    document.getElementById("loader").style = "";
                                    name.value = "";
                                    price.value = "";
                                    qty.value = "";
                                    oldPrice.value = "";
                                    viewCategory();
                                    document.getElementsByClassName("ql-editor")[0].innerHTML = "";
                                    document.getElementById("productSubCategory").innerHTML = "";
                                    document.getElementById("productImage").value = "";
                                    multiplePrice = [];
                                    document.getElementById("priceList").innerHTML = "";
                                    swal.fire({
                                        icon: "success",
                                        title: "Product",
                                        text: "Updated Successfully",
                                    });
                                    document.getElementById("btnAddProduct").disabled = false;
                                    setTimeout(() => {
                                        window.location.href = "/products.php";
                                    });
                                });
                        }
                    });
                });
            }
        });
    } else {
        update(ref(db, "product/" + productId), {
            productName: name.value,
            productCategory: category,
            productSubCategory: subCategory.value,
            productPrice: productPrice,
            priceCategory: { id: priceCategory.value, name: priceCategoryName },
            productOldPrice: oldPrice.value,
            productQty: qty.value,
            productType: type.value,
            productColor: color.value,
            productSize: size.value,
            productDescription: description.innerHTML,
        })
            .catch((error) => {
                err = error;
                document.getElementById("loader").innerHTML = "Update";
                document.getElementById("loader").style = "";
                swal.fire({
                    icon: "error",
                    title: "error",
                    text: error.message,
                });
            })
            .then(() => {
                document.getElementById("loader").innerHTML = "Update";
                document.getElementById("loader").style = "";
                name.value = "";
                price.value = "";
                qty.value = "";
                oldPrice.value = "";
                viewCategory();
                document.getElementsByClassName("ql-editor")[0].innerHTML = "";
                document.getElementById("productSubCategory").innerHTML = "";
                document.getElementById("productImage").value = "";
                multiplePrice = [];
                document.getElementById("priceList").innerHTML = "";
                swal.fire({
                    icon: "success",
                    title: "Product",
                    text: "Updated Successfully",
                });
                document.getElementById("btnAddProduct").disabled = false;
                setTimeout(() => {
                    window.location.href = "/products.php";
                });
            });
    }
};

const onEditProducts = (id) => {
    window.location.href = `/product-edit.php?${id}`;
};

const setProductDetail = () => {
    document.getElementById("preloader").style.display = "block";
    const productId = window.location.href.split("?")[1];
    get(child(ref(db), `product/${productId}`)).then((snapshot) => {
        const res = snapshot.val();

        document.getElementById("productName").value = res.productName;
        document.getElementById("productDescription").innerHTML = res.productDescription;
        document.getElementById("productCategory").value = res.productCategory;
        document.getElementById("select2-productCategory-container").innerHTML = res.productCategory;

        viewSubCategory(res.productCategory);
        setTimeout(() => {
            document.getElementById("productSubCategory").value = res.productSubCategory;
            document.getElementById("select2-productSubCategory-container").innerHTML = res.productSubCategory;
            document.getElementById("preloader").style.display = "none";
        }, 2000);

        document.getElementById("priceCategory").value = res.priceCategory.id;
        document.getElementById("select2-priceCategory-container").innerHTML = res.priceCategory.name;
        if (typeof res.productPrice != "string") {
            document.getElementById("radio2").click();
            multiplePrice = res.productPrice;
            addMultiplePrice();
        } else {
            document.getElementById("productPrice").value = res.productPrice;
        }

        document.getElementById("productOldPrice").value = res.productOldPrice;
        document.getElementById("productQuantity").value = res.productQty;
        document.getElementById("productColor").value = res.productColor;
        document.getElementById("productType").value = res.productType;
        document.getElementById("productSize").value = res.productSize;
        document.getElementById("previewContainerEdit").innerHTML = "";
        res.productImage.forEach((url) => {
            const imgPreview = document.createElement("img");
            imgPreview.src = url;
            imgPreview.style.width = "30%"; // Adjust the image size as needed
            imgPreview.style.height = "170px";
            imgPreview.style.objectFit = "cover";
            imgPreview.style.margin = "1.6%";

            previewContainerEdit.appendChild(imgPreview);
        });
    });
};

function deleteProductImages(key) {
    return list(sRef(storage, `productImages/${key}`), { maxResults: 100 }).then((res) => {
        res.items.forEach((images) => {
            deleteObject(images);
        });
    });
}

const onDeleteProducts = (key) => {
    deleteProductImages(key).then(() => {
        remove(ref(db, "product/" + key)).then(() => {
            showProduct();
            swal.fire("good job", "Product Deleted", "success");
        });
    });
};

const contentDivs = document.querySelectorAll(".priceContent");
const changePricingView = (type) => {
    contentDivs.forEach((div) => {
        if (div.getAttribute("data-option") === type) {
            div.classList.remove("hidden");
        } else {
            div.classList.add("hidden");
        }
    });
};
