<!DOCTYPE html>
<html lang="en">

@include('layouts.adminend.head')
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	@include('layouts.adminend.sidebar')
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	@include('layouts.adminend.topbar')
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
@section('content')
@show
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    @include('layouts.adminend.script')
</body>

</html>
