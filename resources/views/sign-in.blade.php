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
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <form class="form clearfix">
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                                <!--end form-group-->
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <label>
                                        <input type="checkbox" name="remember" value="1">
                                        Remember Me
                                    </label>
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </form>
                            <hr>
                            <p>
                                <a href="#" class="link">Sign in with Google.</a>
                                 <a href="#" class="link float-right">Sign in with Facebook.</a>
                            </p>

                        </div>
                        <!--end col-md-6-->
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