<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

<head>
   <?php require './head.php' ?>
</head>

<body>
<?php require './svg.php'; require './nav.php'; ?>
        <main class="page-content page-content--order-header">
            <div class="container">
                <div class="page-header">
                    <h3 class="page-header__subtitle d-lg-none">Order Details</h3>
                    <h1 class="page-header__title">Orders <span class="text-grey">#790841</span></h1>
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
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="order-details.php#"><span>E-commerce</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="orders.php"><span>Orders</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Details</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon" href="order-details.php#"><span class="button-icon__icon">
                      <svg class="icon-icon-print">
                        <use xlink:href="#icon-print"></use>
                      </svg></span></a>
                            </div>
                            <div class="page-tools__right-item">
                                <button class="button-icon" type="button"><span class="button-icon__icon">
                      <svg class="icon-icon-trash">
                        <use xlink:href="#icon-trash"></use>
                      </svg></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-order">
                    <div class="card__wrapper">
                        <section class="card-order__section pt-0">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="row gutter-bottom-xs justify-content-between flex-grow-1">
                                        <div class="col">
                                            <h3 class="card__title">Customer</h3>
                                        </div>
                                        <div class="col-auto"><span class="card__date">Placed on 12.07.2018 10:00</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="card-order__customer-list">
                                    <li class="card-order__customer-item">
                                        <svg class="icon-icon-user">
                                            <use xlink:href="#icon-user"></use>
                                        </svg> <b>Name:</b>  <span>Sophia Hale</span>
                                    </li>
                                    <li class="card-order__customer-item">
                                        <svg class="icon-icon-phone">
                                            <use xlink:href="#icon-phone"></use>
                                        </svg> <b>Phone:</b>  <a href="tel:0701234567">070 123 4567</a>
                                    </li>
                                    <li class="card-order__customer-item">
                                        <svg class="icon-icon-email">
                                            <use xlink:href="#icon-email"></use>
                                        </svg> <b>Email:</b>  <a href="mailto:example@mail.com">example@mail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="card-order__section card-order__method">
                            <div class="card__container">
                                <div class="row gutter-bottom-sm">
                                    <div class="col">
                                        <h3 class="card__title">Payment method</h3>
                                        <div class="card-order__payment">
                                            <div class="form-group">
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="">
                                                        <option value="1" selected="selected">Credit Card
                                                        </option>
                                                        <option value="2">Pay Pal
                                                        </option>
                                                    </select><span class="input-group__arrow">
                              <svg class="icon-icon-keyboard-down">
                                <use xlink:href="#icon-keyboard-down"></use>
                              </svg></span>
                                                </div>
                                            </div>
                                            <ul class="card-order__list">
                                                <li><b>Transaction ID:</b> 000001-TXHQ</li>
                                                <li><b>Amount:</b> $2500</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3 class="card__title">Shipping method</h3>
                                        <div class="card-order__shipping">
                                            <div class="form-group">
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="">
                                                        <option value="1" selected="selected">Carrier
                                                        </option>
                                                    </select><span class="input-group__arrow">
                              <svg class="icon-icon-keyboard-down">
                                <use xlink:href="#icon-keyboard-down"></use>
                              </svg></span>
                                                </div>
                                            </div>
                                            <ul class="card-order__list">
                                                <li><b>Tracking Code:</b> FX-012345-6</li>
                                                <li><b>Date:</b> 12.15.2018</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-10 col-md-8 col-xl card-order__method-status">
                                        <div class="card-order__status-panel">
                                            <div class="form-group form-group--inline">
                                                <label class="form-label">Fulfilment status</label>
                                                <div class="input-group input-group--white input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="">
                                                        <option value="1" selected="selected">Delivered
                                                        </option>
                                                    </select><span class="input-group__arrow">
                              <svg class="icon-icon-keyboard-down">
                                <use xlink:href="#icon-keyboard-down"></use>
                              </svg></span>
                                                </div>
                                            </div>
                                            <div class="form-group form-group--inline">
                                                <label class="form-label">Payment status</label>
                                                <div class="input-group input-group--white input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="">
                                                        <option value="1" selected="selected">Paid
                                                        </option>
                                                    </select><span class="input-group__arrow">
                              <svg class="icon-icon-keyboard-down">
                                <use xlink:href="#icon-keyboard-down"></use>
                              </svg></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="card-order__section color-grey-bg">
                            <div class="card__container">
                                <div class="row gutter-bottom-sm">
                                    <div class="col">
                                        <h3 class="card__title">Payment method</h3>
                                        <address class="card-order__address">
                        <ul class="card-order__list">
                          <li><b>First name:</b> Sophia</li>
                          <li><b>Last name:</b> Hale</li>
                        </ul>
                        <ul class="card-order__list">
                          <li><b>Address:</b> 4898 Joanne Lane street</li>
                          <li><b>City:</b> Boston</li>
                          <li><b>Country: </b>United States</li>
                          <li><b>State:</b> Massachusetts</li>
                          <li><b>Zip code:</b> 02110</li>
                        </ul>
                        <ul class="card-order__list">
                          <li><b>Phone:</b> <a href="http://netgon.ru/themeforest/arion_html/+10701234567">+1 (070) 123-4567</a></li>
                        </ul>
                      </address>
                                    </div>
                                    <div class="col">
                                        <h3 class="card__title">Shipping address</h3>
                                        <address class="card-order__address">
                        <ul class="card-order__list">
                          <li><b>First name:</b> Sophia</li>
                          <li><b>Last name:</b> Hale</li>
                        </ul>
                        <ul class="card-order__list">
                          <li><b>Address:</b> 4898 Joanne Lane street</li>
                          <li><b>City:</b> Boston</li>
                          <li><b>Country: </b>United States</li>
                          <li><b>State:</b> Massachusetts</li>
                          <li><b>Zip code:</b> 02110</li>
                        </ul>
                        <ul class="card-order__list">
                          <li><b>Phone:</b> <a href="http://netgon.ru/themeforest/arion_html/+10701234567">+1 (070) 123-4567</a></li>
                        </ul>
                      </address>
                                    </div>
                                    <div class="col d-none d-xl-block"></div>
                                </div>
                            </div>
                        </section>
                        <div class="card-order__product scrollbar-thin scrollbar-visible" data-simplebar>
                            <table class="table table--lines table--groups table--striped">
                                <colgroup>
                                    <col class="colgroup-1">
                                        <col class="colgroup-2">
                                            <col>
                                                <col>
                                                    <col>
                                </colgroup>
                                <thead class="table__header">
                                    <tr class="table__header-row">
                                        <th><span class="text-nowrap">PRODUCT</span>
                                        </th>
                                        <th class="text-center"><span>PRICE</span>
                                        </th>
                                        <th class="text-center"><span>QUANTITY</span>
                                        </th>
                                        <th><span>TOTAL</span>
                                        </th>
                                        <th class="table__actions"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table__row">
                                        <td class="table__td">
                                            <div class="mw-200"><span class="text-light-theme">MacBook Pro 15” (Mid 2018)</span>
                                            </div>
                                        </td>
                                        <td class="table__td text-center text-dark-theme">
                                            <div class="d-inline-block">
                                                <div class="input-group input-group--prepend-xs">
                                                    <div class="input-group__prepend">$</div>
                                                    <div class="input input--edit" contenteditable="true">2500</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table__td text-center">
                                            <input class="input input--edit text-center text-light-theme" type="number" value="10" min="0" max="999">
                                        </td>
                                        <td class="table__td text-nowrap text-dark-theme">$25,000</td>
                                        <td class="table__td table__actions text-dark-theme">
                                            <button class="table__remove" type="button">
                                                <svg class="icon-icon-trash">
                                                    <use xlink:href="#icon-trash"></use>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="table__row">
                                        <td class="table__td">
                                            <div class="mw-200"><span class="text-light-theme">MacBook Pro 15” (Mid 2018)</span>
                                            </div>
                                        </td>
                                        <td class="table__td text-center text-dark-theme">
                                            <div class="d-inline-block">
                                                <div class="input-group input-group--prepend-xs">
                                                    <div class="input-group__prepend">$</div>
                                                    <div class="input input--edit" contenteditable="true">2500</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table__td text-center">
                                            <input class="input input--edit text-center text-light-theme" type="number" value="10" min="0" max="999">
                                        </td>
                                        <td class="table__td text-nowrap text-dark-theme">$25,000</td>
                                        <td class="table__td table__actions text-dark-theme">
                                            <button class="table__remove" type="button">
                                                <svg class="icon-icon-trash">
                                                    <use xlink:href="#icon-trash"></use>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="table__row">
                                        <td class="table__td">
                                            <div class="mw-200"><span class="text-light-theme">MacBook Pro 15” (Mid 2018)</span>
                                            </div>
                                        </td>
                                        <td class="table__td text-center text-dark-theme">
                                            <div class="d-inline-block">
                                                <div class="input-group input-group--prepend-xs">
                                                    <div class="input-group__prepend">$</div>
                                                    <div class="input input--edit" contenteditable="true">2500</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table__td text-center">
                                            <input class="input input--edit text-center text-light-theme" type="number" value="10" min="0" max="999">
                                        </td>
                                        <td class="table__td text-nowrap text-dark-theme">$25,000</td>
                                        <td class="table__td table__actions text-dark-theme">
                                            <button class="table__remove" type="button">
                                                <svg class="icon-icon-trash">
                                                    <use xlink:href="#icon-trash"></use>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-order__footer-total">
                            <div class="card__container">
                                <div class="row gutter-bottom-sm justify-content-end">
                                    <div class="card-order__footer-submit col-12 col-sm">
                                        <button class="button button--secondary" type="button"><span class="button__text">Add Product</span>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="card-order__total">
                                            <li class="card-order__total-item">
                                                <div class="card-order__total-title">Subtotal:</div>
                                                <div class="card-order__total-value">$75,000</div>
                                            </li>
                                            <li class="card-order__total-item">
                                                <div class="card-order__total-title">TAX(20%):</div>
                                                <div class="card-order__total-value">$90,000</div>
                                            </li>
                                            <li class="card-order__total-item">
                                                <div class="card-order__total-title">DISCOUNT:</div>
                                                <div class="card-order__total-value">10%</div>
                                            </li>
                                            <li class="card-order__total-item card-order__total-footer">
                                                <div class="card-order__total-title">total:</div>
                                                <div class="card-order__total-value">$81,000</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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