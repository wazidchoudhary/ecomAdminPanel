<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

<head>
    <?php require './head.php' ?>
</head>

<body onload="viewCategory();fetchPriceCategory();changePricingView('singlePrice');setProductDetail();">

    <?php require './svg.php'; require './nav.php'; ?>
    <main class="page-content">
        <div class="container">

            <div class="page-header">
                <h1 class="page-header__title">Edit Product</h1>
            </div>

            <div class="card add-product card--content-center">
                <div class="card__wrapper">
                    <div class="card__container">
                        <form class="add-product__form">
                            <div class="add-product__row">
                                <div class="add-product__slider" id="addProductSlider">
                                    <div class="add-product__thumbs">
                                        <div class="add-product__thumbs-slider swiper-container">

                                        </div>


                                    </div>
                                    <div class="add-product__gallery">
                                        <div class="add-product__gallery-slider swiper-container">
                                            <div class="swiper-wrapper">
                                                <div id="showProducetImage"
                                                    class="add-product__gallery-slide swiper-slide">
                                                    <!-- <img id="showImage" /> -->
                                                    <div id="previewContainerEdit">

                                                    </div>
                                                    <div id="loaderContainer">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="add-product__right">
                                    <div class="row row--md">
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Product Image</label>
                                            <div class="input-group">
                                                <input class="input" id="productImage" type="file" accept="image/*"
                                                    onchange="preview(event,'Edit')" multiple required>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Product Name</label>
                                            <div class="input-group">
                                                <input class="input" id="productName" type="text" placeholder=""
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Description</label>
                                            <div class="input-editor" id="descriptionArea">
                                                <div id="productDescription" class="js-description-editor"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Main Category</label>
                                            <div class="input-group input-group--append">
                                                <select id="mainCategory"
                                                    class="input js-input-select input--fluid" data-placeholder="">
                                                <option value="knifeHandles">knifeHandles</option>
                                                <option value="moreProducts">moreProducts</option>
                                                </select><span class="input-group__arrow">
                                                    <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                    </svg></span>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Category</label>
                                            <div class="input-group input-group--append">
                                                <select onchange="according(event)" id="productCategory"
                                                    class="input js-input-select input--fluid" data-placeholder="">

                                                </select><span class="input-group__arrow">
                                                    <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                    </svg></span>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Sub-Category</label>
                                            <div class="input-group input-group--append">
                                                <select id="productSubCategory"
                                                    class="input js-input-select input--fluid" data-placeholder="">

                                                </select><span class="input-group__arrow">
                                                    <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                    </svg></span>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group form-group--lg">
                                            <input type="radio" name="toggle" id="radio1" checked="checked"
                                                onclick="changePricingView('singlePrice')" /> Single Price
                                            <input type="radio" name="toggle" id="radio2"
                                                onclick="changePricingView('multiplePrice')" /> Multiple Price
                                        </div>

                                        <div class="col-12 col-md-6 form-group form-group--lg priceContent"
                                            data-option="singlePrice">
                                            <label class="form-label">Old Price</label>
                                            <div class="input-group input-group--prepend">
                                                <div class="input-group__prepend"><span
                                                        class="input-group__symbol"></span>
                                                </div>
                                                <input class="input" id="productOldPrice" type="number" min="0"
                                                    max="999999999" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 form-group form-group--lg priceContent"
                                            data-option="singlePrice">
                                            <label class="form-label">Price</label>
                                            <div class="input-group input-group--prepend">
                                                <div class="input-group__prepend"><span
                                                        class="input-group__symbol"></span>
                                                </div>
                                                <input class="input" id="productPrice" type="number" min="0"
                                                    max="999999999" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group form-group--lg priceContent"
                                            data-option="multiplePrice">
                                            <label class="form-label">Price-Category</label>
                                            <div class="input-group input-group--append">
                                                <select id="priceCategory" onchange="clearMultiplePrice()" class="input js-input-select input--fluid"
                                                    data-placeholder="">

                                                </select><span class="input-group__arrow">
                                                    <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                    </svg></span>
                                            </div>
                                        </div>
                                        <div id="priceList" class="col-12 form-group form-group--lg priceContent"
                                            data-option="multiplePrice">

                                        </div>
                                        <div class="col-5 form-group form-group--lg priceContent"
                                            data-option="multiplePrice">
                                            <div class="input-group input-group--prepend">
                                                <div class="input-group__prepend"><span
                                                        class="input-group__symbol"></span>
                                                </div>
                                                <input class="input" id="priceType" type="text" 
                                                    placeholder="Type" required>
                                            </div>
                                        </div>
                                        <div class="col-5 form-group form-group--lg priceContent"
                                            data-option="multiplePrice">
                                            <div class="input-group input-group--prepend">
                                                <div class="input-group__prepend"><span
                                                        class="input-group__symbol"></span>
                                                </div>
                                                <input class="input" id="productMultiplePrice" type="number" min="0"
                                                    max="999999999" placeholder="price" required>
                                            </div>
                                        </div>
                                        <div class="col-2 form-group form-group--lg priceContent"
                                            data-option="multiplePrice">
                                            <button type="button" class="button button--primary button--block"
                                                id="btnAddProduct" onclick="addMultiplePrice()"><span class="button__text"
                                                    id="loader">Add</span>
                                            </button>
                                        </div>
                                        <div class="col-12 col-md-6 form-group form-group--lg">
                                            <label class="form-label">Quantity</label>
                                            <div class="input-group input-group--prepend">

                                                <input class="input" id="productQuantity" type="number" min="0"
                                                    max="100" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 form-group form-group--lg">
                                            <label class="form-label">Color</label>
                                            <div class="input-group input-group--prepend">

                                                <input class="input" id="productColor" type="text"  placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 form-group form-group--lg">
                                            <label class="form-label">Type</label>
                                            <div class="input-group input-group--prepend">

                                                <input class="input" id="productType" type="text"  placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 form-group form-group--lg">
                                            <label class="form-label">Size</label>
                                            <div class="input-group input-group--prepend">

                                                <input class="input" id="productSize" type="text"  placeholder="" required>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="add-product__submit">
                                        <div class="modal__footer-button">


                                            <button type="button" class="button button--primary button--block"
                                                id="btnAddProduct" onclick="updateProduct()"><span class="button__text"
                                                    id="loader">Update</span>
                                            </button>
                                        </div>
                                        <div class="modal__footer-button"><a
                                                class="button button--secondary button--block"
                                                onclick="clearFields()"><span class="button__text">Cancel</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php require './addOn.php'; ?>
</body>

</html>