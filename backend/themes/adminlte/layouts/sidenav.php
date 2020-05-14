<?php 
use yii\widgets\Menu;

?>
<style>
.dot {
    height: 8px;
    width: 8px;
    background-color: #0ef731;
    border-radius: 50%;
    display: inline-block;
}

.u_b_t{
    border-top: 1px solid #4f5962;
}
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="/images/dev.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity:0.8">
    <span class="brand-text font-weight-light">CRM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="/images/dev.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo (Yii::$app->user->identity) ? Yii::$app->user->identity->username : 'Admin'  ?> &nbsp;&nbsp; 
                    <span class="dot"></span>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            
                <li class="nav-item">
                    <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Dashboard
                        <span class="right badge badge-danger">New</span>
                    </p>
                    </a>
                </li>

                <div class="user-panel u_b_t">
                    <li class="nav-header">Business Management</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                        <p>
                            Business
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/business/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/business/index" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Business List</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="user-panel u_b_t">
                    <li class="nav-header">Shop</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/product/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/product/index" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Product List</p>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a href="/product-category" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Product Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Orders <span class="right badge badge-primary">3 New</span></p>
                        </a>
                    </li>
                </div>

                <div class="user-panel u_b_t">
                    <li class="nav-header">Content</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Blogs
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/blog/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/blog/index" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Blog List</p>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Pages
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/page/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/page/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pages List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Slider
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/slider/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/slider/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slider List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </div>

                <div class="user-panel u_b_t">
                    <li class="nav-header">User Management</li>
                    <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/user/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/user/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </div>

                <li class="nav-item">
                    <a href="/settings/index" class="nav-link">
                    <i class="fa fa-wrench" aria-hidden="true"></i>
                    <p>Settings</p>
                    </a>
                </li>



            <!-- 
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                    UI Elements
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/UI/general.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>General</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/UI/icons.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Icons</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/UI/buttons.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Buttons</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/UI/sliders.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sliders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/UI/modals.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Modals & Alerts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/UI/navbar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Navbar & Tabs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/UI/timeline.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Timeline</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/UI/ribbons.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ribbons</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Forms
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>General Elements</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Advanced Elements</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/forms/editors.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Editors</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Validation</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Tables
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/tables/simple.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Simple Tables</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/tables/data.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>DataTables</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>jsGrid</p>
                    </a>
                </li>
                </ul>
            </li>


            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                    Calendar
                    <span class="badge badge-info right">2</span>
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                    Gallery
                </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inbox</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/mailbox/compose.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Compose</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Read</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Pages
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Invoice</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/profile.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/e-commerce.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>E-commerce</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/projects.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Projects</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/project-add.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Project Add</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/project-edit.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Project Edit</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/project-detail.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Project Detail</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/contacts.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Contacts</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                    Extras
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/examples/login.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Login</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Register</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/forgot-password.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Forgot Password</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/recover-password.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Recover Password</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/lockscreen.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lockscreen</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Legacy User Menu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/language-menu.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Language Menu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/404.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Error 404</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/500.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Error 500</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/pace.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pace</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/blank.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Blank Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="starter.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Starter Page</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-header">MISCELLANEOUS</li>
            <li class="nav-item">
                <a href="https://adminlte.io/docs/3.0" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Documentation</p>
                </a>
            </li>
            <li class="nav-header">MULTI LEVEL EXAMPLE</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Level 1</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                    Level 1
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Level 2</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                        Level 2
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Level 2</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Level 1</p>
                </a>
            </li>
            <li class="nav-header">LABELS</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Important</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Warning</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Informational</p>
                </a>
            </li>
            </ul>

            -->

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>