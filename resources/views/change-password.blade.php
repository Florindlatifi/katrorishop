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
                                <a class="nav-link icon" href="my-ads.html">
                                    <i class="fa fa-heart"></i>My Ads Listing
                                </a>
                                <a class="nav-link icon" href="bookmarks.html">
                                    <i class="fa fa-star"></i>Bookmarks
                                </a>
                                <a class="nav-link active icon" href="change-password.html">
                                    <i class="fa fa-recycle"></i>Change Password
                                </a>
                                <a class="nav-link icon" href="sold-items.html">
                                    <i class="fa fa-check"></i>Sold Items
                                </a>
                            </nav>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <form class="form">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="current_password" class="col-form-label required">Current Password</label>
                                            <input name="current_password" type="password" class="form-control" id="current_password" placeholder="Current Password" required>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="new_current_password" class="col-form-label required">New Password</label>
                                            <input name="new_current_password" type="password" class="form-control" id="new_current_password" placeholder="New Password" required>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="repeat_new_current_password" class="col-form-label required">Repeat Password</label>
                                            <input name="repeat_new_current_password" type="password" class="form-control" id="repeat_new_current_password" placeholder="Repeat New Password" required>
                                        </div>
                                        <!--end form-group-->
                                        <button type="submit" class="btn btn-primary float-right">Change Password</button>
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                            </form>
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

    </div>

@stop