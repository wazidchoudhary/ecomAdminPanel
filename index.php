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
                <div class="table-wrapper__content table-orders table-collapse scrollbar-thin scrollbar-visible"
                    data-simplebar>
                    <table class="table table--lines" style="width:150% !important">
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

                                <th class="d-none d-lg-table-cell"><span>Name</span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Image</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort" style="width:30% !important"><span
                                        class="align-middle">Product Name</span><span class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort" style="width:30% !important"><span
                                        class="align-middle">color</span><span class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Mobile no.</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Email Id</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort" style="width:30% !important"><span
                                        class="align-middle">Address</span><span class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">city</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">country</span><span
                                        class="sort sort--down"></span>
                                </th>

                                <th class="table__th-sort"><span class="align-middle">Order Id</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Action</span><span
                                        class="sort sort--down"></span>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="orderRequest">

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
    <!-- The Modal -->
    <div id="myModal" class="tmodal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Send Confirmation</h2>
            <h3 id="confirmationOrderId"></h3>
            <form id="confirmationForm">
                <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="text" name="email" class="form-control" id="shippingEmail" placeholder="Enter Email" disabled>
                </div>
                <div class="form-group">
                    <label for="amount">Shipping Amount</label>
                    <input type="number" class="form-control" id="shippingAmount" placeholder="Enter amount">
                </div>
                <input type="hidden" id="currentOrderIndex">
                <button type="button" class="btn btn-primary" onclick="sendConfirmationMail()">Send</button>
            </form>
        </div>

    </div>

    <style>
    /* The Modal (background) */
    .tmodal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
   
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        margin-left:auto;
        margin-right:auto;
        /* Full width */
        height: 100%;
        z-index: 10000;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    </style>
    <!-- Modal -->


    <?php require './addOn.php'; ?>
</body>

</html>