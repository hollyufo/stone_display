@extends('layouts.front')
@section('title','Home')
@section('css')
    
@endsection
@section('content') 
    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Contact Us</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div id="map">
            		<!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        Your message was sent successfully, <br>We'll contact you as soon as possible
    </div>
@endif
                <form id="contact" action="{{ route("front.contact.post") }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="name" value="{{ old("name") }}" type="text" class="form-control" id="name" placeholder="Your name..." >
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="email" value="{{ old("email") }}" type="email" class="form-control" id="email" placeholder="Your email..." >
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="subject" value="{{ old("subject") }}" type="text" class="form-control" id="subject" placeholder="Subject..." >
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="phone" value="{{ old("phone") }}" type="tel" class="form-control" id="phone" placeholder="Your phone number..." >
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." >{{ old("message") }}</textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Send Message</button>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <div class="share">
                        <h6>You can also keep in touch on: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Page Ends Here -->

    <!-- Subscribe Form Starts Here -->

    <!-- Subscribe Form Ends Here -->

    @endsection
    @section('js')
        
    @endsection