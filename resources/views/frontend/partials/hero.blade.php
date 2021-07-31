@foreach ($hero as $row)
  <section id="hero" class="d-flex flex-column justify-content-center text-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <img src="{{ asset('public/img/'.$row->image) }}" class="rounded-circle z-depth-2 mb-2" alt="Cinque Terre"><br/>
      <a href="{{ $row->facebooklink }}" target="blank"><h1  class="btn btn-danger" style="color:white;">I'M {{ $row->name }}</h1></a>
      <p style="color:#ffff00;">Professional <span class="typed" style="color:white;" data-typed-items="{{ $row->profession }}"></span></p>
      <div class="social-links mb-4">
      <a href="{{ $row->facebooklink }}"  target="blank" class="facebook"><i class="fab fa-facebook" style="color:white;font-size:40px;"></i></a>
        <a href="{{ $row->instagramlink }}"  target="blank" class="instagram" style="color:white;font-size:40px;"><i class="fab fa-instagram"></i></a>
        <a href="{{ $row->twitterlink }}"  target="blank" class="twitter" style="color:white;font-size:40px;"><i class="fab fa-twitter"></i></a>        
        <a href="{{ $row->youtubelink }}" target="blank" class="google-plus"style="color:white;font-size:40px;"><i class="fab fa-youtube"></i></a>
        <a href="{{ $row->linkedlink }}"  target="blank" class="linkedin"style="color:white;font-size:40px;"><i class="fab fa-linkedin"></i></a>
      </div>
      <a href="{{ asset('public/cv/'.$row->cvlink) }}" class="btn btn-primary">Download My CV</a>
    </div>
  </section>
  @endforeach