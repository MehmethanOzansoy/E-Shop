        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>E-Shop Admin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('assets')}}/admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Mehmet Han Ozansoy</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/admin" class="nav-item nav-link"><i class="nav-icon fas fa-home"></i>Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="nav-icon fas fa-box-open text-blue"></i>Orders</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item"><i class="nav-icon fas fa-circle"></i> New Orders</a>
                            <a href="#" class="dropdown-item"><i class="nav-icon fas fa-circle"></i> Accepted Orders</a>
                            <a href="#" class="dropdown-item"><i class="nav-icon fas fa-circle"></i> Shipping Orders</a>
                            <a href="#" class="dropdown-item"><i class="nav-icon fas fa-circle"></i> Completed Orders</a>
                        </div>
                        <a href="/admin/category" class="nav-item nav-link"><i class="nav-icon fas fa-th text-blue"></i>Categories</a>
                        <a href="/admin/product" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Products</a>
                        <a href="/admin/comment" class="nav-item nav-link"><i class="nav-icon fas fa-comment"></i>Comments</a>
                        <a href="/admin/faq" class="nav-item nav-link"><i class="nav-icon fas fa-question"></i>FAQ</a>
                        <a href="/admin/messages" class="nav-item nav-link"><i class="nav-icon fas fa-mail-bulk"></i>Messages</a>
                        <a href="/admin/user" class="nav-item nav-link"><i class="fa fa-user-alt me-2"></i>User</a>
                        <a href="/admin/social" class="nav-item nav-link"><i class="nav-icon fas fa-share"></i>Social</a>
                        <a href="/admin/setting" class="nav-item nav-link"><i class="nav-icon fas fa-tools"></i>Setting</a>
                        <a href="/admin/connection" class="nav-item nav-link"><i class="nav-icon fas fa-phone"></i>Connection</a>

                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->