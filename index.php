<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

    <head>
        <?php require './head.php'; ?>
    </head>

    <body onload="orderRequest()">
        <?php require './svg.php'; require './nav.php'; ?>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Order Request</h1>
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
                                   
                                    <th class="d-none d-lg-table-cell"><span>Category ID</span>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Category Name</span><span class="sort sort--down"></span>
                                    </th>
                                   
                                   
                                    <th class="table__th-sort"><span class="align-middle">Action</span><span class="sort sort--down"></span></th>
                                </tr>
                            </thead>
                            <tbody id="orderRequest">

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