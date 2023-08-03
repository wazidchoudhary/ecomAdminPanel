


const addCategory = () => {
  const name = document.getElementById("categoryName");
  Id = Math.floor(Math.random() * 1000000000);
  let err;
  if (name.value.trim() === '') {
    swal.fire({
      icon: "error",
      title: "error",
      text: "Please fill all given input Fields",
    });
    return;
  }
  set(ref(db, 'category/' + Id), {
    categoryName: name.value.toUpperCase().split(' ').join('-')
  }).catch((error) => {
    err = error;
  });
  if (err) {
    swal.fire({
      icon: "error",
      title: "error",
      text: error.message,
    });
  } else {
    swal.fire({
      icon: "success",
      title: "Category",
      text: "Added Successfully",
    });
    name.value = '';
    viewSelectCategory();

  }
};
const addSubCategory = () => {
  const categoryName = document.getElementById('selectProductCategory');
  const name = document.getElementById("subCategoryName");
  Id = Math.floor(Math.random() * 1000000000);
  if (name.value.trim() === '') {
    swal.fire({
      icon: "error",
      title: "error",
      text: "Please fill all given input Fields",
    });
    return;
  }
  let err;
  set(ref(db, "subCategory/" + categoryName.value + "/" + Id), {
    subCategoryName: name.value.toUpperCase().split(' ').join('-'),
  }).catch((error) => {
    err = error;
  })
    // database
    // .ref("subCategory/" + categoryName.value + "/" + Id)
    // .set({
    //   subCategoryName: name.value.toUpperCase().split(' ').join('-'),
    // })
    .catch((error) => {
      err = error;
    });
  if (err) {
    swal.fire({
      icon: "error",
      title: "error",
      text: error.message,
    });
  } else {
    swal.fire({
      icon: "success",
      title: "Sub-Category",
      text: "Added Successfully",
    });
    name.value = '';
  }
};


const showCategory = () => {
  document.getElementById("categoryShow").innerHTML=""
const dbRef = ref(db);
get(child(dbRef, `category/`)).then((snapshot) => {
  if (snapshot.exists()) {
    snapshot.forEach(function (childSnapshot) {
      var category = childSnapshot.val();

      var id = childSnapshot.key;

      document.getElementById("categoryShow").innerHTML +=
        `
        <tr>
        <td class="d-none d-lg-table-cell"  scope="row">` +
        id +
        `</td>
        <td>` +
        category.categoryName +
        `</td>
        <td><button class="btn-delete" type="button"  onclick="onDeleteCategory('` +
        id +
        `')"><span class="fa fa-trash"></span></button></td>
      </tr>
        `;
    });
  }
  });
};


const onDeleteCategory = (key) => {
    remove(ref(db,"category/" + key)).then(()=>{
      swal.fire("good job","Category Deleted","success");
      showCategory();
    })
    
 
};

const viewSelectCategory = () => {
  const dbRef = ref(db);
  get(child(dbRef, `category/`)).then((snapshot) => {
    if (snapshot.exists()) {
      snapshot.forEach((childSnapshot)=>{
        var category = childSnapshot.val();
        var id = childSnapshot.key;
        document.getElementById("selectProductCategory").innerHTML +=
          `
      <option value=` +
          category.categoryName +
          `>` +
          category.categoryName +
          `</option>`;
      })
    } else {
      console.log("No data available");
    }
  }).catch((error) => {
    console.error(error);
  });
};


/*-----------------------------------------------------------------------------------------------------------------*/


const preview = (e) => {
  document.getElementById("showImage").src = URL.createObjectURL(
    e.target.files[0]
  );
};
const viewCategory = () => {
  const dbRef = ref(db);
  get(child(dbRef, `category/`)).then((snapshot) => {
    if (snapshot.exists()) {
      document.getElementById("productCategory").innerHTML = "";
      document.getElementById("productCategory").innerHTML = `<option value="select">Select Category</option>`;
      snapshot.forEach((childSnapshot)=> {
        var category = childSnapshot.val();
        var id = childSnapshot.key;
        document.getElementById("productCategory").innerHTML +=
          `
      <option value=` +
          category.categoryName +
          `>` +
          category.categoryName +
          `</option>`;

      });
    }
  })
};
const viewSubCategory = (category) => {
  const dbRef = ref(db);
  get(child(dbRef, `subCategory/${category}/`)).then((snapshot) => {
    if (snapshot.exists()) {
      document.getElementById("productSubCategory").innerHTML = "";

      snapshot.forEach((childSnapshot) => {
        var subCategory = childSnapshot.val();

        var id = childSnapshot.key;
        document.getElementById("productSubCategory").innerHTML +=
          `
        
    <option value=` +
          subCategory.subCategoryName +
          `>` +
          subCategory.subCategoryName +
          `</option>`;

      });
    }
  })
};
const according = (e) => {


  //const Category=document.getElementById("productCategory");
  viewSubCategory(e.target.value);
}


const addProduct = async () => {
  const image = document.getElementById("productImage").files[0];
  const name = document.getElementById("productName");
  const description = document.getElementById("productDescription");
  const category = document.getElementById("productCategory");
  const subCategory = document.getElementById("productSubCategory");
  const price = document.getElementById("productPrice");
  const qty = document.getElementById("productQuantity");
  const id = Math.floor(Math.random() * 1000000000);
  if (name.value.trim() === '' || category.value.trim() === '' || price.value.trim() === '' || qty.value.trim() === '') {
    swal.fire({
      icon: "error",
      title: "error",
      text: "Please fill all given input Fields",
    });
    //document.getElementById('btnAddProduct').disabled=true;
    return;
  }
  if (category.value === 'select') {
    swal.fire({
      icon: "error",
      title: "error",
      text: "Please select atLeast one Category",
    });
    return;
  }


  document.getElementById('loader').innerHTML = `<div class="spinner-border text-light" role="status">
  <span class="sr-only">Loading...</span>
</div>`;
  document.getElementById('btnAddProduct').disabled = true;
  const storageRef = sRef(storage, 'productImages/'+id);

// 'file' comes from the Blob or File API
uploadBytes(storageRef, image).then((snapshot) => {
  getDownloadURL(snapshot.ref).then((downloadURL) => {
    let err;
    const ImgUrl = downloadURL;

    set(ref(db, 'product/' + id), {
        productId: id,
        productName: name.value,
        productImage: ImgUrl,
        productCategory: category.value,
        productSubCategory: subCategory.value,
        productPrice: price.value,
        productQty: qty.value,
        productDescription: description.innerHTML
      })
      .catch((error) => {
        err = error
      });
    if (err) {
      document.getElementById('loader').innerHTML = "Add Product";
      swal.fire({
        icon: "error",
        title: "error",
        text: error.message,
      });
    }

    else {
      document.getElementById('loader').innerHTML = "Add Product";
      name.value = "";

      price.value = "";
      qty.value = "";
      viewCategory();
      document.getElementById('productSubCategory').innerHTML = "";

      document.getElementById('productImage').value = '';
      document.getElementById("showImage").src = "";
      swal.fire({
        icon: "success",
        title: "Product",
        text: "Added Successfully",
      });
      document.getElementById('btnAddProduct').disabled = false;
    }
  });
});
};


const showProduct = () => {
  const dbRef = ref(db);
  get(child(dbRef, `product/`)).then((snapshot) => {
    if (snapshot.exists()) {
    document.getElementById("showProduct").innerHTML = "";
    snapshot.forEach(function (childSnapshot) {
      var product = childSnapshot.val();

      var id = childSnapshot.key;

      document.getElementById("showProduct").innerHTML +=
        `
        <tr>
        <td class="d-none d-lg-table-cell"  scope="row">` +
        id +
        `</td>
        <td><img src=`+ product.productImage + ` height="50px" width="50px" /></td>
        <td>` +
        product.productName +
        `</td>
        <td>`+ product.productCategory + `</td>
        <td>`+ product.productSubCategory + `</td>
        <td>`+ product.productPrice + `</td>
        <td>`+ product.productQty + `</td>
        <td>`+ product.productDescription + ` </td>
        
        
        <td><button class="btn-delete" type="button"  onclick="onDeleteProducts('` +
        id +
        `')"><span class="fa fa-trash"></span></button></td>
      </tr>
        
        `;
    });
  }
  });
};

const onDeleteProducts = (key) => {
    
    ref(db,"product/" + key)
    .remove();
  swal.fire("good job","Product Deleted","success");
  showCategory();
};
