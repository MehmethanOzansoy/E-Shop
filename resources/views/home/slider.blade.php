    <div class="col-lg-9">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
            <a href="" class="text-decoration-none d-block d-lg-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="shop.html" class="nav-item nav-link">Shop</a>
                    <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                            <a href="checkout.html" class="dropdown-item">Checkout</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="navbar-nav ml-auto py-0">
                    <a href="" class="nav-item nav-link">Login</a>
                    <a href="" class="nav-item nav-link">Register</a>
                </div>
            </div>
        </nav>
        <style>
            .spe-container {
                width: 90%;
                margin: 0 auto;
            }

            .spe-list {
                margin: 0;
                padding: 0;
                display: block;
            }

            .spe-list li {
                list-style: none;
                display: block;
            }

            .spe-list li:nth-child(1) {
                float: left;
                width: 50%;
            }

            .spe-list li:nth-child(2) {
                float: right;
                width: 48%;
            }

            .spe-list li:nth-child(3) {
                float: right;
                width: 48%;
                margin-top: 34px;
            }

            .spe-list li:nth-child(1) img {
                width: 100%;
                height: 600px;
            }

            .spe-list li:nth-child(2) img {
                width: 100%;
                height: 280px;
            }

            .spe-list li:nth-child(3) img {
                width: 100%;
                height: 280px;
            }
        </style>

        @foreach($sliderdata as $rs)
        <div class="spe-container">
            <ul class="spe-list">
                <li>           
                    <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                        <img src="{{Storage::url($rs->image)}}" alt="" />
                        <h3 style="color:black">{{$rs->title}}</h3>
                        <h5>{{$rs->keywords}}</h5>
                        <h6>{{$rs->price}}₺</h6>
                        <a href="" class="btn btn-light py-2 px-3" title="Shop Now">Shop Now</a>
                    </div>
                </li>
            </ul>
            <div class="cle"></div>
        </div>

        @endforeach



    </div>