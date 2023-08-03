<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

<head>
   <?php require './head.php' ?>
</head>

<body class="sidebar-collapse">
<?php require './svg.php'; require './nav.php'; ?>
                <div class="todo-content">
                    <div class="todo-content__top">
                        <div class="container">
                            <div class="row row--xs flex-nowrap align-items-center justify-content-between">
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <button class="toggle-sidebar toggle-sidebar--secondary js-toggle-sidebar-panel" type="button" data-toggle="#sidebarPanel">
                                            <svg class="icon-icon-menu">
                                                <use xlink:href="#icon-menu"></use>
                                            </svg>
                                        </button>
                                        <button class="toggle-search toggle-search--module" type="button" data-search="#search0">
                                            <svg class="icon-icon-search">
                                                <use xlink:href="#icon-search"></use>
                                            </svg>
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </button>
                                        <div class="page-header page-header--inline">
                                            <h1 class="page-header__title">All Tasks <span class="text-grey">(30)</span></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto position-static">
                                    <form class="module-search" id="search0" method="GET">
                                        <div class="input-group input-group--prepend">
                                            <div class="input-group__prepend">
                                                <svg class="icon-icon-search">
                                                    <use xlink:href="#icon-search"></use>
                                                </svg>
                                            </div>
                                            <input class="input" type="text" placeholder="Search task">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="todo-content__items scrollbar-thin scrollbar-hidden" data-simplebar>
                        <div class="todo-content__items-horizontal scrollbar-thin scrollbar-visible" data-simplebar>
                            <div class="container">
                                <div class="todo-content__items-header">
                                    <div class="todo-content__items-header-column">
                                        <div class="ml-auto">
                                            <label class="checkbox checkbox--circle">
                                                <input class="js-checkbox-all" type="checkbox" data-checkbox-all="todo-panel"><span class="checkbox__marker"><span class="checkbox__marker-icon"></span></span>
                                            </label>
                                            <div class="sort sort--down"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="todo-content__items-wrapper">
                                    <ul class="todo-content__list">
                                        <li class="todo-content__row">
                                            <div class="todo-panel">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">Sed ut perspiciatis consectetur adipiscing.</h5><span class="text-sm text-grey">obcaecati cupiditate provident similique sunt in culpa officia deserunt.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-teal"></span><span class="tag__text">Frontend</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-content__row">
                                            <div class="todo-panel todo-panel--checked">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" checked="checked" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">Nemo enim ipsam voluptatem libero.</h5><span class="text-sm text-grey">tempore soluta nobis eligendi cumque impedit maxime placeat commodi.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-orange-dark"></span><span class="tag__text">Work</span>
                                                        </div>
                                                        <div class="tag tag--default"><span class="tag__marker color-teal"></span><span class="tag__text">Frontend</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-content__row">
                                            <div class="todo-panel">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">neque porro quisquam estut aut reiciendis.</h5><span class="text-sm text-grey">perferendis doloribus asperiores repellat enim minima veniam, consectetur.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-green"></span><span class="tag__text">Issue</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-content__row">
                                            <div class="todo-panel todo-panel--checked">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" checked="checked" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">At vero et accusamus dignissimos ducimus quia.</h5><span class="text-sm text-grey">oluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-orange"></span><span class="tag__text">Backend</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-content__row">
                                            <div class="todo-panel todo-panel--checked">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" checked="checked" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">voluptatibus maiores alias consequatur perferendis.</h5><span class="text-sm text-grey">Temporibus autem quibusdam et aut officiis debitis aut rerum.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-green"></span><span class="tag__text">Issue</span>
                                                        </div>
                                                        <div class="tag tag--default"><span class="tag__marker color-red"></span><span class="tag__text">Project</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-content__row">
                                            <div class="todo-panel todo-panel--checked">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" checked="checked" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">necessitatibus saepe eveniet unde omnis iste.</h5><span class="text-sm text-grey">natus error sit voluptatem accusantium doloremque laudantium totam.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-orange-dark"></span><span class="tag__text">Work</span>
                                                        </div>
                                                        <div class="tag tag--default"><span class="tag__marker color-red"></span><span class="tag__text">Frontend</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-content__row">
                                            <div class="todo-panel todo-panel--checked">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" checked="checked" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">rem aperiam eaque ipsa obcaecati cupiditate.</h5><span class="text-sm text-grey">non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-orange"></span><span class="tag__text">Backend</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-content__row">
                                            <div class="todo-panel todo-panel--checked">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" checked="checked" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">consequatur aut perferendis doloribus asperiores repellat.</h5><span class="text-sm text-grey">iusto odio dignissimos ducimus, quia voluptas sit, aspernatur magni dolores.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-teal"></span><span class="tag__text">Frontend</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-content__row">
                                            <div class="todo-panel todo-panel--checked">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" checked="checked" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">Quis autem vel eum iure reprehenderit unde.</h5><span class="text-sm text-grey">omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-orange"></span><span class="tag__text">Work</span>
                                                        </div>
                                                        <div class="tag tag--default"><span class="tag__marker color-green"></span><span class="tag__text">Issue</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-content__row">
                                            <div class="todo-panel">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">Temporibus autem quibusdam et aut officiis debitis aut rerum.</h5><span class="text-sm text-grey">obcaecati cupiditate provident similique sunt in culpa officia deserunt.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-red"></span><span class="tag__text">Project</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-content__row">
                                            <div class="todo-panel">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">voluptatem sequi nesciunt neque porro quisquam.</h5><span class="text-sm text-grey">Temporibus autem quibusdam et aut officiis debitis aut rerum.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-teal"></span><span class="tag__text">Frontend</span>
                                                        </div>
                                                        <div class="tag tag--default"><span class="tag__marker color-red"></span><span class="tag__text">Project</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" checked="checked" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-content__row">
                                            <div class="todo-panel">
                                                <div class="todo-panel__column">
                                                    <button class="todo-panel__button-move">
                                                        <svg class="icon-icon-move">
                                                            <use xlink:href="#icon-move"></use>
                                                        </svg>
                                                    </button>
                                                    <label class="checkbox checkbox--circle">
                                                        <input type="checkbox" data-checkbox="todo-panel" /><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                  <svg class="icon-icon-checked">
                                    <use xlink:href="#icon-checked"></use>
                                  </svg></span></span>
                                                    </label>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__text">
                                                        <h5 class="mb-0">provident similique sunt in culpa officia deserunt.</h5><span class="text-sm text-grey">obcaecati cupiditate provident similique sunt in culpa officia deserunt.</span>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__tags">
                                                        <div class="tag tag--default"><span class="tag__marker color-green"></span><span class="tag__text">Issue</span>
                                                        </div>
                                                        <div class="tag tag--default"><span class="tag__marker color-orange"></span><span class="tag__text">Backend</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-panel__column">
                                                    <div class="todo-panel__details">
                                                        <label class="todo-panel__detail todo-panel__detail--detail">
                                                            <input type="checkbox" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                  </svg></span>
                                                        </label>
                                                        <label class="todo-panel__detail todo-panel__detail--star">
                                                            <input type="checkbox" /><span class="todo-panel__detail-marker">
                                  <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                  </svg></span>
                                                        </label>
                                                    </div>
                                                    <div class="todo-panel__more items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-dots">
                                                                <use xlink:href="#icon-dots"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="backdrop-sidebar-panel"></div>
            </div>
        </main>
    </div>
    <div class="inbox-add modal modal-compact scrollbar-thin" id="addTask" data-simplebar>
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <button class="modal__close" data-dismiss="modal">
                        <svg class="icon-icon-cross">
                            <use xlink:href="#icon-cross"></use>
                        </svg>
                    </button>
                    <div class="modal__header">
                        <div class="modal__container">
                            <h2 class="modal__title">Add Task</h2>
                        </div>
                    </div>
                    <div class="modal__body">
                        <div class="modal__container">
                            <form method="POST">
                                <div class="row">
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">Title</label>
                                        <div class="input-group">
                                            <input class="input" type="text" value="Sed ut perspiciatis consectetur adipiscing." required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">Tags</label>
                                        <div class="tags">
                                            <ul class="tags__container">
                                                <li class="tags__item">
                                                    <div class="tag tag--default tag--append"><span class="tag__marker color-red"></span><span class="tag__text">Project</span>
                                                        <button class="tag__append" type="button">
                                                            <svg class="icon-icon-cross">
                                                                <use xlink:href="#icon-cross"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="tags__item">
                                                    <div class="tag tag--default tag--append"><span class="tag__marker color-green"></span><span class="tag__text">Issue</span>
                                                        <button class="tag__append" type="button">
                                                            <svg class="icon-icon-cross">
                                                                <use xlink:href="#icon-cross"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="tags__item">
                                                    <div class="tag tag--default tag--append"><span class="tag__marker color-orange-dark"></span><span class="tag__text">Work</span>
                                                        <button class="tag__append" type="button">
                                                            <svg class="icon-icon-cross">
                                                                <use xlink:href="#icon-cross"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">Notes</label>
                                        <div class="input-group">
                                            <textarea class="input" rows="6">non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et.</textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal__footer">
                        <div class="modal__container">
                            <div class="row">
                                <div class="col-auto ml-auto">
                                    <button class="button button--primary" data-dismiss="modal"><span class="button__icon button__icon--left">
                        <svg class="icon-icon-plus">
                          <use xlink:href="#icon-plus"></use>
                        </svg></span><span class="button__text">Add Task</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require './addOn.php'; ?>
</body>

</html>