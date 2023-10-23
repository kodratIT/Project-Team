<!-- Start::app-sidebar -->
<aside class="app-sidebar" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ url('backend/assets/img/brand-logos/desktop-logo.png')}}" alt="logo" class="main-logo desktop-logo">
            <img src="{{ url('backend/assets/img/brand-logos/toggle-logo.png')}}" alt="logo" class="main-logo toggle-logo">
            <img src="{{ url('backend/assets/img/brand-logos/desktop-dark.png')}}" alt="logo" class="main-logo desktop-dark">
            <img src="{{ url('backend/assets/img/brand-logos/toggle-dark.png')}}" alt="logo" class="main-logo toggle-dark">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar " id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg></div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide  has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-home-8-line side-menu__icon"></i>
                        <span class="side-menu__label">Dashboards</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Dashboards</a></li>
                        <li class="slide"><a href="index.html" class="side-menu__item">Sales</a></li>
                        <li class="slide"><a href="index2.html" class="side-menu__item">Ecommerce</a></li>

                    </ul>
                </li>
                <!-- End::slide -->

                {{-- <!-- Start::slide -->
                <li class="slide">
                    <a href="widgets.html" class="side-menu__item">
                        <i class="ri-apps-2-line side-menu__icon"></i>
                        <span class="side-menu__label">Widgets</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">General</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-inbox-line side-menu__icon"></i>
                        <span class="side-menu__label">Components</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Components</a></li>
                        <li class="slide"><a href="accordion.html" class="side-menu__item">Accordion</a></li>
                        <li class="slide"><a href="alerts.html" class="side-menu__item">Alerts</a></li>
                        <li class="slide"><a href="avatars.html" class="side-menu__item">Avatars</a></li>
                        <li class="slide"><a href="badges.html" class="side-menu__item">Badges</a></li>
                        <li class="slide"><a href="blockquotes.html" class="side-menu__item">Blockquotes</a></li>
                        <li class="slide"><a href="buttons.html" class="side-menu__item">Buttons</a></li>
                        <li class="slide"><a href="cards.html" class="side-menu__item">Cards</a></li>
                        <li class="slide"><a href="collapse.html" class="side-menu__item">Collapse</a></li>
                        <li class="slide"><a href="list-group.html" class="side-menu__item">ListGroup</a></li>
                        <li class="slide"><a href="list.html" class="side-menu__item">List</a></li>
                        <li class="slide"><a href="indicators.html" class="side-menu__item">Indicators</a></li>
                        <li class="slide"><a href="progress.html" class="side-menu__item">Progress</a></li>
                        <li class="slide"><a href="skeleton.html" class="side-menu__item">Skeleton</a></li>
                        <li class="slide"><a href="spinners.html" class="side-menu__item">Spinners</a></li>
                        <li class="slide"><a href="toast.html" class="side-menu__item">Toast</a></li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-cpu-line side-menu__icon"></i>
                        <span class="side-menu__label">Elements</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Elements</a></li>
                        <li class="slide"><a href="navbar.html" class="side-menu__item">Navbar</a></li>
                        <li class="slide"><a href="mega-menu.html" class="side-menu__item">MegaMenu</a></li>
                        <li class="slide"><a href="tabs.html" class="side-menu__item">Nav &amp;Tabs</a></li>
                        <li class="slide"><a href="scrollspy.html" class="side-menu__item">Scrollspy</a></li>
                        <li class="slide"><a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a></li>
                        <li class="slide"><a href="pagination.html" class="side-menu__item">Pagination</a></li>
                        <li class="slide"><a href="grid.html" class="side-menu__item">Grids</a></li>
                        <li class="slide"><a href="columns.html" class="side-menu__item"> Columns</a></li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-file-text-line side-menu__icon"></i>
                        <span class="side-menu__label">Forms</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Forms</a></li>
                        <li class="slide"><a href="form-elements.html" class="side-menu__item">FormElements</a></li>
                        <li class="slide"><a href="advanced-forms.html" class="side-menu__item">AdvancedForms</a></li>
                        <li class="slide"><a href="form-input-group.html" class="side-menu__item">Form-Input-Group</a>
                        </li>
                        <li class="slide"><a href="file-upload.html" class="side-menu__item">File Uploads</a></li>
                        <li class="slide"><a href="form-checkbox.html" class="side-menu__item">Form-Checkbox</a></li>
                        <li class="slide"><a href="form-radio.html" class="side-menu__item">Form-Radio</a></li>
                        <li class="slide"><a href="form-switch.html" class="side-menu__item">Form-Switch</a></li>
                        <li class="slide"><a href="form-select.html" class="side-menu__item">Form-Select</a></li>
                        <li class="slide"><a href="form-layouts.html" class="side-menu__item">Form-Layouts</a></li>
                        <li class="slide"><a href="form-validations.html" class="side-menu__item">Form-Validations</a>
                        </li>
                        <li class="slide"><a href="quil-editor.html" class="side-menu__item">Form-Editor</a></li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-stack-line side-menu__icon"></i>
                        <span class="side-menu__label">Advanced Ui</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Advanced Ui</a></li>
                        <li class="slide"><a href="rangeslider.html" class="side-menu__item">Rangeslider</a></li>
                        <li class="slide"><a href="calendar.html" class="side-menu__item">Calendar</a></li>
                        <li class="slide"><a href="carousel.html" class="side-menu__item">Carousel</a></li>
                        <li class="slide"><a href="gallery.html" class="side-menu__item">Gallery</a></li>
                        <li class="slide"><a href="sweetalert.html" class="side-menu__item">Sweetalert</a></li>
                        <li class="slide"><a href="ratings.html" class="side-menu__item">Rating</a></li>
                        <li class="slide"><a href="draggable.html" class="side-menu__item">Draggable Cards</a></li>
                        <li class="slide"><a href="notifications.html" class="side-menu__item">Notifications</a></li>
                        <li class="slide"><a href="treeview.html" class="side-menu__item">Treeview</a></li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">File manager<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="filemanager.html" class="side-menu__item">File manager</a>
                                </li>
                                <li class="slide"><a href="filemanager-list.html" class="side-menu__item">File manager
                                        List</a></li>
                                <li class="slide"><a href="file-details.html" class="side-menu__item">File Details</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-file-list-3-line side-menu__icon"></i>
                        <span class="side-menu__label">Basic Ui</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Basic Ui</a></li>
                        <li class="slide"><a href="dropdown.html" class="side-menu__item">Dropdown</a></li>
                        <li class="slide"><a href="modal.html" class="side-menu__item">Modal</a></li>
                        <li class="slide"><a href="offcanvas.html" class="side-menu__item">Offcanvas</a></li>
                        <li class="slide"><a href="tooltip-popovers.html" class="side-menu__item">Tooltips &amp;
                                Popovers</a></li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Tables<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="tables.html" class="side-menu__item">BasicTables</a></li>
                                <li class="slide"><a href="datatables.html" class="side-menu__item">DataTables</a></li>
                                <li class="slide"><a href="edittable.html" class="side-menu__item">Edit Table</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->


                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Levels</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-node-tree side-menu__icon"></i>
                        <span class="side-menu__label">NestedMenu</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Nested Menu</a></li>
                        <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Nested-1</a></li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Nested-2<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Nested-2-2<i
                                            class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child3">
                                        <li class="slide"><a href="javascript:void(0);"
                                                class="side-menu__item">Nested-2-2-1</a></li>
                                        <li class="slide"><a href="javascript:void(0);"
                                                class="side-menu__item">Nested-2-2-2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Maps &amp; charts</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-map-pin-user-line side-menu__icon"></i>
                        <span class="side-menu__label">Maps</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Maps</a></li>
                        <li class="slide"><a href="google-maps.html" class="side-menu__item">Google Maps</a></li>
                        <li class="slide"><a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a></li>
                        <li class="slide"><a href="vector-maps.html" class="side-menu__item">Vector Maps</a></li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-pie-chart-2-line side-menu__icon"></i>
                        <span class="side-menu__label">Charts</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Charts</a></li>
                        <li class="slide"><a href="apex-charts.html" class="side-menu__item">ApexCharts</a></li>
                        <li class="slide"><a href="chartjs.html" class="side-menu__item">ChartJS</a></li>
                        <li class="slide"><a href="echartjs.html" class="side-menu__item">EchartJs</a></li>
                    </ul>
                </li>
                <!-- End::slide -->


                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Pages</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-book-open-line side-menu__icon"></i>
                        <span class="side-menu__label">Pages</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Pages</a></li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Profile<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="profile.html" class="side-menu__item">Home</a></li>
                                <li class="slide"><a href="profile-settings.html" class="side-menu__item">Profile
                                        Settings</a></li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Invoice<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="invoice-list.html" class="side-menu__item">Invoice List</a>
                                </li>
                                <li class="slide"><a href="invoice.html" class="side-menu__item">Invoice Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Blog<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="blog.html" class="side-menu__item">Blog</a></li>
                                <li class="slide"><a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                </li>
                                <li class="slide"><a href="blog-edit.html" class="side-menu__item">Edit Blog</a></li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Mail<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="mail-inbox.html" class="side-menu__item">Mail</a></li>
                                <li class="slide"><a href="chat.html" class="side-menu__item">Chat</a></li>
                                <li class="slide"><a href="mail-settings.html" class="side-menu__item">Mail-settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Ecommerce<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="products.html" class="side-menu__item">Products</a></li>
                                <li class="slide"><a href="product-list.html" class="side-menu__item">Product list</a>
                                </li>
                                <li class="slide"><a href="add-product.html" class="side-menu__item">Add Product</a>
                                </li>
                                <li class="slide"><a href="edit-product.html" class="side-menu__item">Edit Product</a>
                                </li>
                                <li class="slide"><a href="products-details.html"
                                        class="side-menu__item">Products-Details</a></li>
                                <li class="slide"><a href="cart.html" class="side-menu__item">Cart</a></li>
                                <li class="slide"><a href="checkout.html" class="side-menu__item">Checkout</a></li>
                                <li class="slide"><a href="orders.html" class="side-menu__item">Orders</a></li>
                                <li class="slide"><a href="order-details.html" class="side-menu__item">Order Details</a>
                                </li>
                                <li class="slide"><a href="wishlist.html" class="side-menu__item">Whislist</a></li>
                            </ul>
                        </li>
                        <li class="slide"><a href="about.html" class="side-menu__item">About Us</a></li>
                        <li class="slide"><a href="contacts.html" class="side-menu__item">Contacts</a></li>
                        <li class="slide"><a href="pricing.html" class="side-menu__item">Pricing tables</a></li>
                        <li class="slide"><a href="timeline.html" class="side-menu__item">Timeline</a></li>
                        <li class="slide"><a href="team.html" class="side-menu__item">Team</a></li>
                        <li class="slide"><a href="landing.html" class="side-menu__item">Landing</a></li>
                        <li class="slide"><a href="todo.html" class="side-menu__item">Todo list</a></li>
                        <li class="slide"><a href="tasks.html" class="side-menu__item">Tasks</a></li>
                        <li class="slide"><a href="reviews.html" class="side-menu__item">Reviews</a></li>
                        <li class="slide"><a href="faqs.html" class="side-menu__item">Faq's</a></li>
                        <li class="slide"><a href="contactus.html" class="side-menu__item">Contact Us</a></li>
                        <li class="slide"><a href="terms.html" class="side-menu__item">Terms&amp;conditions</a></li>
                        <li class="slide"><a href="empty.html" class="side-menu__item">Empty</a></li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-camera-lens-line side-menu__icon"></i>
                        <span class="side-menu__label">Icons</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Icons</a></li>
                        <li class="slide"><a href="tabler-icons.html" class="side-menu__item">Tabler Icons</a></li>
                        <li class="slide"><a href="remix-icons.html" class="side-menu__item">Remix Icons</a></li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-error-warning-line side-menu__icon"></i>
                        <span class="side-menu__label">Authentication</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Authentication</a></li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Sign-In<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="signin.html" class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="signin-cover.html" class="side-menu__item">Cover-1</a></li>
                                <li class="slide"><a href="signin-cover2.html" class="side-menu__item">Cover-2</a></li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Sign-Up<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="signup.html" class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="signup-cover.html" class="side-menu__item">Cover-1</a></li>
                                <li class="slide"><a href="signup-cover2.html" class="side-menu__item">Cover-2</a></li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Create
                                Password<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="createpassword.html" class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="createpassword-cover.html"
                                        class="side-menu__item">Cover-1</a></li>
                                <li class="slide"><a href="createpassword-cover2.html"
                                        class="side-menu__item">Cover-2</a></li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Forgot
                                Password<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="forgot.html" class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="forgot-cover.html" class="side-menu__item">Cover-1</a></li>
                                <li class="slide"><a href="forgot-cover2.html" class="side-menu__item">Cover-2</a></li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Reset Password<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="reset.html" class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="reset-cover.html" class="side-menu__item">Cover-1</a></li>
                                <li class="slide"><a href="reset-cover2.html" class="side-menu__item">Cover-2</a></li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Lockscreen<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="lockscreen.html" class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="lockscreen-cover.html" class="side-menu__item">Cover-1</a>
                                </li>
                                <li class="slide"><a href="lockscreen-cover2.html" class="side-menu__item">Cover-2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Two-Step
                                Verfication<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="verfication.html" class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="verfication-cover.html" class="side-menu__item">Cover-1</a>
                                </li>
                                <li class="slide"><a href="verfication-cover2.html" class="side-menu__item">Cover-2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide"><a href="maintanace.html" class="side-menu__item">Under Maintanace</a></li>
                        <li class="slide"><a href="construction.html" class="side-menu__item">Under Construction</a>
                        </li>
                        <li class="slide"><a href="comingsoon.html" class="side-menu__item">Coming Soon</a></li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Error Pages<i
                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="404.html" class="side-menu__item">404Error</a></li>
                                <li class="slide"><a href="500.html" class="side-menu__item">500Error</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide --> --}}

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->
