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
					<h1>අප සමග සම්බන්ද වන්න</h1>
					<p>ඔබේ නිර්මාණාත්මක අදහස තේරුම් ගැනීමට යමෙකුට අපහසු ද? වඩා හොඳ දෘශ්‍යකරණයක් ඇත. ඔබගේ අදහස් අප සමඟ බෙදා ගන්න, අපි ඔබෙන් විමසීමට බලාපොරොත්තු වෙමු.</p>
					<form id="contact-form">
						<div class="row">
							<div class="col-md-6">
								<label for="name">ඔබගේ නම * </label>
								<input name="name" id="name" type="text">
							</div>
							<div class="col-md-6">
								<label for="mail">ඔබේ විද්යුත් තැපැල් ලිපිනය *</label>
								<input name="mail" id="mail" type="text">
							</div>
						</div>
						<label for="tel-number">ඔබගේ දුරකථන අංකය *</label>
						<input name="tel-number" id="tel-number" type="text">
						<label for="comment">ඔබේ පණිවිඩය *</label>
						<textarea name="comment" id="comment"></textarea>
						<button type="submit" id="submit_contact">පණිවුඩය යවන්න</button>
						<div id="msg" class="message"></div>
					</form>
				</div>
			</div>
		</section>
		<!-- End contact section -->

		<!-- contact-info-section 
			================================================== -->
		<section class="contact-info-section">
			<div class="container">
				<div class="contact-info-box">
					<div class="row">

						<div class="col-lg-4 col-md-6">
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

						<div class="col-lg-4 col-md-6">
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

						<div class="col-lg-4 col-md-6">
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