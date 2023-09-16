<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

<head>
    <?php require './head.php' ?>
</head>

<body onload="showProduct()">
    <?php require './svg.php'; require './nav.php'; ?>
    <main class="page-content">
        <div class="container">
            <div class="page-header">
                <h1 class="page-header__title">Products</h1>
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
                                <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link"
                                        href="products.php#"><span>E-commerce</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                            <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                </li>
                                <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Products</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="page-tools__right">
                    <div class="page-tools__right-row">
                        <div class="page-tools__right-item"><a class="button-icon" href="products.php#"><span
                                    class="button-icon__icon">
                                    <svg class="icon-icon-print">
                                        <use xlink:href="#icon-print"></use>
                                    </svg></span></a>
                        </div>
                        <div class="page-tools__right-item"><a class="button-icon" href="products.php#"><span
                                    class="button-icon__icon">
                                    <svg class="icon-icon-import">
                                        <use xlink:href="#icon-import"></use>
                                    </svg></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-wrapper">
                <div class="table-wrapper__content table-products table-collapse scrollbar-thin scrollbar-visible"
                    data-simplebar>
                    <table class="table table--lines" style="width:150% !important">
                        <colgroup>
                            <col >
                            <col class="colgroup-1">
                            <col class="colgroup-2">
                            <col class="colgroup-3">
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead class="table__header text-center">
                            <tr class="table__header-row text-center">

                                <th class="d-none d-lg-table-cell"><span>Featured</span>
                                    </th>

                                <th class="table__th-sort"><span class="align-middle">Product Image</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Product Name</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort" style="width:100px !important"><span
                                        class="align-middle">Description</span><span class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Category</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Sub-Category</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Price</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Qty</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Type</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Color</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Size</span><span
                                        class="sort sort--down"></span>
                                </th>

                                <th class="table__th-sort"><span class="align-middle">Action</span><span
                                        class="sort sort--down"></span></th>
                            </tr>
                        </thead>
                        <tbody class="text-center" id="showProduct">

                        </tbody>
                    </table>
                </div>
                <div class="table-wrapper__footer">
                    <div class="row">
                        <div class="table-wrapper__show-result col text-grey"><span
                                class="d-none d-sm-inline-block">Showing</span> 1 to 10 <span
                                class="d-none d-sm-inline-block">of 50 items</span>
                        </div>
                        <div class="table-wrapper__pagination col-auto">
                            <ol class="pagination">
                                <li class="pagination__item">
                                    <a class="pagination__arrow pagination__arrow--prev" href="products.php#">
                                        <svg class="icon-icon-keyboard-left">
                                            <use xlink:href="#icon-keyboard-left"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="pagination__item active"><a class="pagination__link"
                                        href="products.php#">1</a>
                                </li>
                                <li class="pagination__item"><a class="pagination__link" href="products.php#">2</a>
                                </li>
                                <li class="pagination__item"><a class="pagination__link" href="products.php#">3</a>
                                </li>
                                <li class="pagination__item pagination__item--dots">...</li>
                                <li class="pagination__item"><a class="pagination__link" href="products.php#">10</a>
                                </li>
                                <li class="pagination__item">
                                    <a class="pagination__arrow pagination__arrow--next" href="products.php#">
                                        <svg class="icon-icon-keyboard-right">
                                            <use xlink:href="#icon-keyboard-right"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>




    <?php require './addOn.php'; ?>pt>
</body>

</html>