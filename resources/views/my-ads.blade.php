@extends('layouts.default')


@section('content')

		<div class="page sub-page">

	@include('includes.navbar2')

	<!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <nav class="nav flex-column side-nav">
                                <a class="nav-link icon" href="my-profile.html">
                                    <i class="fa fa-user"></i>My Profile
                                </a>
                                <a class="nav-link active icon" href="my-ads.html">
                                    <i class="fa fa-heart"></i>My Ads Listing
                                </a>
                                <a class="nav-link icon" href="bookmarks.html">
                                    <i class="fa fa-star"></i>Bookmarks
                                </a>
                                <a class="nav-link icon" href="change-password.html">
                                    <i class="fa fa-recycle"></i>Change Password
                                </a>
                                <a class="nav-link icon" href="sold-items.html">
                                    <i class="fa fa-check"></i>Sold Items
                                </a>
                            </nav>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <!--============ Section Title===================================================================-->
                            <div class="section-title clearfix">
                                <div class="float-left float-xs-none">
                                    <label class="mr-3 align-text-bottom">Sort by: </label>
                                    <select name="sorting" id="sorting" class="small width-200px" data-placeholder="Default Sorting" >
                                        <option value="">Default Sorting</option>
                                        <option value="1">Newest First</option>
                                        <option value="2">Oldest First</option>
                                        <option value="3">Lowest Price First</option>
                                        <option value="4">Highest Price First</option>
                                    </select>

                                </div>
                                <div class="float-right d-xs-none thumbnail-toggle">
                                    <a href="#" class="change-class" data-change-from-class="list" data-change-to-class="grid" data-parent-class="items">
                                        <i class="fa fa-th"></i>
                                    </a>
                                    <a href="#" class="change-class active" data-change-from-class="grid" data-change-to-class="list" data-parent-class="items">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </div>
                            </div>
                            <!--============ Items ==========================================================================-->
                            <div class="items list compact grid-xl-3-items grid-lg-2-items grid-md-2-items">
                                <div class="item">
                                    <div class="ribbon-featured">Featured</div>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Home & Decor</a>
                                                <a href="single-listing-1.html" class="title">Furniture for sale</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Manhattan, NY</a>
                                        </h4>
                                        <div class="price">$80</div>
                                        <div class="admin-controls">
                                            <a href="edit-ad.html">
                                                <i class="fa fa-pencil"></i>Edit
                                            </a>
                                            <a href="#" class="ad-hide">
                                                <i class="fa fa-eye-slash"></i>Hide
                                            </a>
                                            <a href="#" class="ad-remove">
                                                <i class="fa fa-trash"></i>Remove
                                            </a>
                                        </div>
                                        <!--end admin-controls-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Education</a>
                                                <a href="single-listing-1.html" class="title">Creative Course</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-02.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Nashville, TN</a>
                                        </h4>
                                        <div class="price">$125</div>
                                        <div class="admin-controls">
                                            <a href="edit-ad.html">
                                                <i class="fa fa-pencil"></i>Edit
                                            </a>
                                            <a href="#" class="ad-hide">
                                                <i class="fa fa-eye-slash"></i>Hide
                                            </a>
                                            <a href="#" class="ad-remove">
                                                <i class="fa fa-trash"></i>Remove
                                            </a>
                                        </div>
                                        <!--end admin-controls-->
                                        <div class="description">
                                            <p>Proin at tortor eros. Phasellus porta nec elit non lacinia. Nam bibendum erat at leo faucibus vehicula. Ut laoreet porttitor risus, eget suscipit tellus tincidunt sit amet. </p>
                                        </div>
                                        <!--end description-->
                                        <div class="additional-info">
                                            <ul>
                                                <li>
                                                    <figure>Start Date</figure>
                                                    <aside>25.06.2017 09:00</aside>
                                                </li>
                                                <li>
                                                    <figure>Length</figure>
                                                    <aside>2 months</aside>
                                                </li>
                                                <li>
                                                    <figure>Bedrooms</figure>
                                                    <aside>3</aside>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end addition-info-->
                                        <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Adventure</a>
                                                <a href="single-listing-1.html" class="title">Into The Wild</a>
                                                <span class="tag">Ad</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-03.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Seattle, WA</a>
                                        </h4>
                                        <div class="price">$1,560</div>
                                        <div class="admin-controls">
                                            <a href="edit-ad.html">
                                                <i class="fa fa-pencil"></i>Edit
                                            </a>
                                            <a href="#" class="ad-hide">
                                                <i class="fa fa-eye-slash"></i>Hide
                                            </a>
                                            <a href="#" class="ad-remove">
                                                <i class="fa fa-trash"></i>Remove
                                            </a>
                                        </div>
                                        <!--end admin-controls-->
                                        <div class="description">
                                            <p>Nam eget ullamcorper massa. Morbi fringilla lectus nec lorem tristique gravida</p>
                                        </div>
                                        <!--end description-->
                                        <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Real Estate</a>
                                                <a href="single-listing-1.html" class="title">Luxury Apartment</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-04.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Greeley, CO</a>
                                        </h4>
                                        <div class="price">$75,000</div>
                                        <div class="admin-controls">
                                            <a href="edit-ad.html">
                                                <i class="fa fa-pencil"></i>Edit
                                            </a>
                                            <a href="#" class="ad-hide">
                                                <i class="fa fa-eye-slash"></i>Hide
                                            </a>
                                            <a href="#" class="remove">
                                                <i class="fa fa-trash"></i>Remove
                                            </a>
                                        </div>
                                        <!--end admin-controls-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <div class="additional-info">
                                            <ul>
                                                <li>
                                                    <figure>Area</figure>
                                                    <aside>368m<sup>2</sup></aside>
                                                </li>
                                                <li>
                                                    <figure>Bathrooms</figure>
                                                    <aside>2</aside>
                                                </li>
                                                <li>
                                                    <figure>Bedrooms</figure>
                                                    <aside>3</aside>
                                                </li>
                                                <li>
                                                    <figure>Garage</figure>
                                                    <aside>1</aside>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end addition-info-->
                                        <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                            </div>
                            <!--end items-->
                        </div>
                        <!--end col-md-9-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->


	@include('includes.footer')

@stop

