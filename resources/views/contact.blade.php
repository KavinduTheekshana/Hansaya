@extends('layouts.front')

@section('content')

<!-- map section -->
<div style="height: 500px; width: 100%;" id="map"></div>
<!-- end map section -->

<!-- contact-section 
			================================================== -->
<section class="contact-section">
	<div class="container">
		<div class="contact-box">


			<h1 data-animscroll="fade-up">අප සමග සම්බන්ධ වන්න</h1>
			<p data-animscroll="fade-up">ජීවිතයේ සොඳුරු සිත්තම් මවනා දෙහෝරාවක ආත්ම සමාධිය
				හා
				සතතාභ්‍යාසය වීමට දොරගුළු විවර කරමු.</p>


			<div id="progress" class="alert alert-success d-none">
				<div class="d-flex align-items-center justify-content-start">
					<span class="alert-icon">
						<i class="anticon anticon-check-o"></i>
					</span>
					<span>Your Message Send Sucessfully.</span>
				</div>
			</div>

			<div id="progresserror" class="alert alert-danger d-none">
				<div class="d-flex align-items-center justify-content-start">
					<span class="alert-icon">
						<i class="anticon anticon-close-o"></i>
					</span>
					<span>Your Detais Are Not Correct</span>
				</div>
			</div>


			<form data-animscroll="fade-up" action="javascript:void(0)" method="post" id="contact-form">
				<div class="row">
					<div class="col-md-6" data-animscroll="fade-up">
						<label for="name">ඔබගේ නම * </label>
						<input name="name" id="name" type="text">
					</div>
					<div class="col-md-6" data-animscroll="fade-up">
						<label for="mail">ඔබේ විද්‍යුත් තැපැල් ලිපිනය *</label>
						<input name="mail" id="mail" type="text">
					</div>
				</div>
				<div data-animscroll="fade-up">
					<label for="tel-number">ඔබගේ දුරකථන අංකය *</label>
					<input name="tel-number" id="tel-number" type="text">
				</div>
				<div data-animscroll="fade-up">
					<label for="comment">ඔබේ පණිවිඩය *</label>
					<textarea name="comment" id="comment"></textarea>
				</div>
				<button data-animscroll="fade-up" type="submit" id="submit" name="submit">පණිවුඩය යවන්න</button>
				<div id="msg" class="message"></div>
			</form>

			<script type="text/javascript">
				$('#contact-form').on('submit', function(event) {
					alert('asd');
					event.preventDefault();

					name = $('#name').val();
					email = $('#mail').val();
					phone = $('#tel-number').val();
					message = $('#comment').val();
					$.ajax({
						url: "/contactform",
						type: "POST",
						data: {
							"_token": "{{ csrf_token() }}",
							name: name,
							email: email,
							phone: phone,
							message: message,
						},
						success: function(response) {
							$('#progress').removeClass("d-none");
							$('#progresserror').addClass("d-none");
							$('#name').val('');
							$('#mail').val('');
							$('#tel-number').val('');
							$('#comment').val('');
						},
						error: function(response) {
							$('#progresserror').removeClass("d-none");
							$('#progress').addClass("d-none");
						}
					});
				});
			</script>


		</div>
	</div>
</section>
<!-- End contact section -->



<!-- contact-info-section 
			================================================== -->
<section class="contact-info-section" data-animscroll="fade-up">
	<div class="container">
		<div class="contact-info-box">
			<div class="row">

				<div class="col-lg-4 col-md-6" data-animscroll="fade-up">
					<div class="info-post">
						<div class="icon">
							<i class="fa fa-envelope-o"></i>
						</div>
						<div class="info-content">
							<p>

								contact@sinhalahansaya.lk
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6" data-animscroll="fade-up">
					<div class="info-post">
						<div class="icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="info-content">
							<p>
								+94 71 711 8982
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6" data-animscroll="fade-up">
					<div class="info-post">
						<div class="icon">
							<i class="fa fa-whatsapp"></i>
						</div>
						<div class="info-content">
							<p>
								+94 77 690 2811
							</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- End contact-info section -->

@endsection