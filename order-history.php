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
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="order-history.php#"><span>E-commerce</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="orders.php"><span>Orders</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">History</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon" href="order-history.php#"><span class="button-icon__icon">
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
                <div class="card card-order order-history">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <div class="order-timeline">

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