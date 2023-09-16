<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

    <head>
        <?php require './head.php'; ?>
    </head>

    <body onload="showCategory()">
        <?php require './svg.php'; require './nav.php'; ?>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Category</h1>
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
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="orders.php#"><span>E-commerce</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Categories</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon" href="orders.php#"><span class="button-icon__icon">
                      <svg class="icon-icon-print">
                        <use xlink:href="#icon-print"></use>
                      </svg></span></a>
                            </div>
                            <div class="page-tools__right-item"><a class="button-icon" href="orders.php#"><span class="button-icon__icon">
                      <svg class="icon-icon-import">
                        <use xlink:href="#icon-import"></use>
                      </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-wrapper">
                    <div class="table-wrapper__content table-orders table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
                        <table class="table table--lines">
                            <colgroup>
                                <col class="colgroup-1">
                                <col class="colgroup-2">
                                <col class="colgroup-3">
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                            </colgroup>
                            <thead class="table__header">
                                <tr class="table__header-row">
                                   
                                    <th class="d-none d-lg-table-cell"><span>Category Name</span>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Sub-Category Name</span><span class="sort sort--down"></span>
                                    </th>
                                   
                                   
                                    <th class="table__th-sort"><span class="align-middle">Action</span><span class="sort sort--down"></span></th>
                                </tr>
                            </thead>
                            <tbody id="categoryShow">
                            </tbody>
                        </table>
                    </div>
                    <div class="table-wrapper__footer">
                        <div class="row">
                            <div class="table-wrapper__show-result col text-grey"><span class="d-none d-sm-inline-block">Showing</span> 1 to 10 <span class="d-none d-sm-inline-block">of 50 items</span>
                            </div>
                            <div class="table-wrapper__pagination col-auto">
                                <ol class="pagination">
                                    <li class="pagination__item">
                                        <a class="pagination__arrow pagination__arrow--prev" href="orders.php#">
                                            <svg class="icon-icon-keyboard-left">
                                                <use xlink:href="#icon-keyboard-left"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="pagination__item active"><a class="pagination__link" href="orders.php#">1</a>
                                    </li>
                                    <li class="pagination__item"><a class="pagination__link" href="orders.php#">2</a>
                                    </li>
                                    <li class="pagination__item"><a class="pagination__link" href="orders.php#">3</a>
                                    </li>
                                    <li class="pagination__item pagination__item--dots">...</li>
                                    <li class="pagination__item"><a class="pagination__link" href="orders.php#">10</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a class="pagination__arrow pagination__arrow--next" href="orders.php#">
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
        <?php require './addOn.php'; ?>
    </body>

</html>