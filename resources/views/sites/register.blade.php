@extends('layout.frontMaster')

@section('content')

<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>	
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-between" style="height: 750px;">
			<div class="banner-content col-lg-9 col-md-12">
				<h1 class="text-uppercase">
					Pendaftaran	
				</h1>
				<p class="pt-10 pb-10">
					In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.
				</p>
			</div>										
		</div>
	</div>					
</section>

<section class="search-course-area relative" style="background: unset">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6 col-md-6 search-course-left">
				<h1 class="">
					Get reduced fee <br>
					during this Summer!
				</h1>
				<p>
					inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
				</p>
			</div>
			<div class="col-lg-4 col-md-6 search-course-right section-gap">
				<form class="form-wrap" action="/register/proses" method="post">
                    {{csrf_field()}}
					<h4 class=" pb-20 text-center mb-30">Pendaftaran</h4>		
					<input type="text" class="form-control" name="nama_depan" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'">
					<input type="text" class="form-control" name="nama_belakang" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'">
					<input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'">
					<div class="form-select" id="service-select">
						<select style="display: none;" name="jenis_kelamin">
							<option datd-display="">Choose Course</option>
							<option value="P">Girl</option>
							<option value="L">BOy</option>
						</select><div class="nice-select" tabindex="0"><span class="current">Choose Course</span><ul class="list"><li data-value="Choose Course" class="option selected">Choose Course</li><li data-value="P" class="option">Girl</li><li data-value="L" class="option">Boy</li></ul></div>
					</div>
					<input type="text" class="form-control" name="agama" placeholder="Religion" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Religion'">
                    <textarea name="alamat" id="" cols="20" rows="5" placeholder="Your Addredd"></textarea>
					<button class="primary-btn text-uppercase">Submit</button>
				</form>
			</div>
		</div>
	</div>	
</section>

@endsection