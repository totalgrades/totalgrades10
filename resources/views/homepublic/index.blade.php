@extends('homepublic.layouts.app')

@section('content')	


			<!-- page wrapper start -->

			<!-- ================ -->

			<div class="page-wrapper">

				<!-- main-container start -->
				<!-- ================ -->
				<section class="main-container">

				    <div class="container">
				        <div class="row">

				            <!-- main start -->
				            <!-- ================ -->
				            <div class="main col-md-12">

				                <!-- logo -->

				                <div class="logo">

				                    <a href="{{url('/')}}"><img id="logo" src="{{asset('assets-homepublic/images/logo_totalgrades.png')}}" alt="Totalgrades"></a>

				                </div>



				                <!-- name-and-slogan -->

				                
				                <div class="separator"></div>
				                <!-- page-title end -->

				                <div class="site-slogan">

				                    A Free online Gradebook Project for Primary and Secondary Schools

				                </div>

				                <div class="banner section white-bg" style="box-shadow: 0 1px 3px #337ab7;">

				                    <div class="container">

				                    	

				                        <div class="row">

				                            <div class="col-md-6">

				                               <a href="{{url('login')}}"> <img src="{{ asset('assets-homepublic/images/services-1.png')}}" alt="" class="object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="0"></a>

				                            </div>                      

				                            <div class="col-md-6">

				                            	<a href="{{url('admin_login')}}">
				                            		<img src="{{ asset('assets-homepublic/images/services-2.png')}}" alt="" class="object-non-visible" data-animation-effect="fadeInRight" data-effect-delay="0">
				                            	</a>

				                                
				                            </div>

				                        </div>
				                		   

				                    </div>

				                </div>

				                <!-- banner end -->
				                <p class="text-center"> <small> Copyright &copy; 2018 - Totalgrades(v1.0) -by <a href="https://nahorr.com">nahorr Analytics </small></a></p>
				                
				               

				            </div>
				            <!-- main end -->

				        </div>
				    </div>
				</section>
				<!-- main-container end -->

				<!-- banner start -->

				<!-- ================ -->

				




			</div>

			<!-- page-wrapper end -->


@endsection