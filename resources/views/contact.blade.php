@extends('layouts.app')

@section('content')

<main class="main">

  <div class="page-title" data-aos="fade">
    <div class="container">
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="current">Contact Us</li>
        </ol>
      </nav>
      <h1>Contact Us</h1>
    </div>
  </div><section id="contact-form" class="contact-form section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row justify-content-center">
        <div class="col-lg-8">

          <div class="section-title text-center">
            <p>Contact Us</p>
          </div>
          
          <p class="text-center mb-4">Hubungi kami untuk pertanyaan atau informasi lebih lanjut.</p>

          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-12">
                <label for="name-input" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" id="name-input" placeholder="Enter your name" required="">
              </div>

              <div class="col-md-12">
                <label for="email-input" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="email-input" placeholder="Enter your email" required="">
              </div>

              <div class="col-md-12">
                <label for="message-input" class="form-label">Message:</label>
                <textarea class="form-control" name="message" id="message-input" rows="6" placeholder="Enter your message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Submit</button>
              </div>

            </div>
          </form>

        </div></div>

    </div>

  </section></main>

@endsection