<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

    <head>
        <?php require './head.php' ?>
    </head>

    <body onload="viewSelectCategory()">
        <?php require './svg.php'; require './nav.php'; ?>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Add Category</h1>
                </div>
                
                <div class="card add-category card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form">
                                <div class="add-product__row">
                                    <div class="add-product__right">
                                       
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Category Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" id="categoryName" placeholder="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-product__submit mt-5">
                                            <div class="modal__footer-button">
                                                <button type="button" class="button button--primary button--block" onclick="addCategory()"><span class="button__text">Create</span>
                                                    </button>
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" type="button" onclick="clearFields()"><span class="button__text">Cancel</span></a>
                                            </div>
                                        </div>
                                    </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </main>
        
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Add Sub-Categories</h1>
                </div>
                <div class="page-tools">
                    <div class="page-tools__breadcrumbs">
                        <div class="breadcrumbs">
                            <div class="breadcrumbs__container">
                                <ol class="breadcrumbs__list">
                                    <li class="breadcrumbs__item">
                                        <a class="breadcrumbs__link" href="index.php">
                                            <svg class="icon-icon-home breadcrumbs__icon">
                                                <use xlink:href="#icon-home"></use>
                                            </svg>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="product-add.php#"><span>E-commerce</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="products.php"><span>Sub-Categories</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Add SubCategories</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-category card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form">
                                <div class="add-product__row">
                                <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Select Category</label>
                                                <div class="input-group input-group--append">
                                                    <select id="selectProductCategory" class="input js-input-select input--fluid" data-placeholder="">
                                                       
                                                    </select><span class="input-group__arrow">
                              <svg class="icon-icon-keyboard-down">
                                <use xlink:href="#icon-keyboard-down"></use>
                              </svg></span>
                                                </div>
                                            </div>
                                    <div class="add-product__right">
                                       
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Sub-Category Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" id="subCategoryName" placeholder="Enter Sub-category name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-product__submit mt-5">
                                            <div class="modal__footer-button">
                                                <button type="button" class="button button--primary button--block" onclick="addSubCategory()"><span class="button__text">Add</span>
                                                    </button>
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" type="button" onclick="clearFields()"><span class="button__text">Cancel</span></a>
                                            </div>
                                        </div>
                                    </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </main>
        </div>
        
        <?php require './addOn.php'; ?>
    </body>

</html>