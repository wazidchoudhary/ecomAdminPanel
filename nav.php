<div class="sidebar-backdrop"></div>
<div class="page-wrapper">
    <header class="header">
        <div class="header__inner">
            <div class="container-fluid">
                <div class="header__row row justify-content-between">
                    <div class="header__col-left col d-flex align-items-center">
                        <div class="header__left-toggle">
                            <button class="header__toggle-menu toggle-sidebar" type="button">
                                    <svg class="icon-icon-menu">
                                        <use xlink:href="#icon-menu"></use>
                                    </svg>
                                </button>

                        </div>

                        <div class="header__col-right col d-flex align-items-center">

                            <div class="header__tools">


                                <div class="dropdown-menu__divider"></div><a class="profile-dropdown__item dropdown-menu__item" href="index.php#" tabindex="0"><span class="profile-dropdown__icon">
                        <svg class="icon-icon-logout">
                          <use xlink:href="#icon-logout"></use>
                        </svg></span><span>Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <aside class="sidebar">
        <div class="sidebar__backdrop"></div>
        <div class="sidebar__container">
            <div class="sidebar__top">
                <div class="container container--sm">
                    <a class="sidebar__logo" href="index.php">
                        <div class="sidebar__logo-text">As Int</div>
                    </a>
                </div>
            </div>
            <div class="sidebar__content" data-simplebar="data-simplebar">
                <nav class="sidebar__nav">
                    <ul class="sidebar__menu">
                       
                        <li class="sidebar__menu-item"><a class="sidebar__link" href="index.php"><span class="fa fa-shopping-cart  mr-4"></span><span class="sidebar__link-text">Order Requests</span></a>
                        </li>
                        <li class="sidebar__menu-item"><a class="sidebar__link" href="orders.php"><span class="fa fa-shopping-cart  mr-4"></span><span class="sidebar__link-text">Orders</span></a>
                        </li>
                        <li class="sidebar__menu-item"><a class="sidebar__link" href="category-add.php"><span class="fa fa-plus  mr-4"></span><span class="sidebar__link-text">Add category</span></a>
                        </li>
                        <li class="sidebar__menu-item"><a class="sidebar__link"  href="category.php"><span class="fa fa-clone  mr-4"></span><span class="sidebar__link-text">category</span></a>

                        <li class="sidebar__menu-item"><a class="sidebar__link" href="products.php"><span class="fa fa-cube mr-4"></span><span class="sidebar__link-text">Products</span></a>
                        </li>
                        <li class="sidebar__menu-item"><a class="sidebar__link" href="product-add.php"><span class="fa fa-plus mr-4"></span><span class="sidebar__link-text">Add Product</span></a>
                        </li>
 
                    </ul>
                </nav>
            </div>
        </div>
    </aside>

    <div class="preloader" id="preloader">
	<svg class="cart" role="img" aria-label="Shopping cart line animation" viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
		<g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="8">
			<g class="cart__track" stroke="hsla(0,10%,10%,0.1)">
				<polyline points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" />
				<circle cx="43" cy="111" r="13" />
				<circle cx="102" cy="111" r="13" />
			</g>
			<g class="cart__lines" stroke="currentColor">
				<polyline class="cart__top" points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" stroke-dasharray="338 338" stroke-dashoffset="-338" />
				<g class="cart__wheel1" transform="rotate(-90,43,111)">
					<circle class="cart__wheel-stroke" cx="43" cy="111" r="13" stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68" />
				</g>
				<g class="cart__wheel2" transform="rotate(90,102,111)">
					<circle class="cart__wheel-stroke" cx="102" cy="111" r="13" stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68" />
				</g>
			</g>
		</g>
	</svg>
	<div class="preloader__text">
		<p class="preloader__msg">Bringing your Product</p>
		<!-- <p class="preloader__msg preloader__msg--last">This is taking long. Something’s wrong.</p> -->
	</div>
</div>