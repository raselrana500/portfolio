@foreach ($hero as $row)
  <section id="hero" class="d-flex flex-column justify-content-center text-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <img src="{{ asset('public/img/profile_image/'.$row->image) }}" class="rounded-circle z-depth-2 mb-2" alt="Cinque Terre"><br/>    
      <a href="{{ $row->facebooklink }}" target="blank"><h1  class="btn btn-danger" style="color:white;"><span style="font-size:20px;">Hello i'm </span> {{ strtoupper($row->name) }}</h1></a>
      <p style="color:#ffff00;">Professional <span class="typed" style="color:white;" data-typed-items="{{ $row->profession }}"></span></p>
      <div class="social-links mb-4">
      @foreach ($social as $socials)
      <a href="{{ $socials->link }}"  target="_blank" class="{{ $socials->name }}"><i class="{{ $socials->icon }}" style="color:white;font-size:40px;"></i></a>
      <!-- <a href="{{ $row->linkedlink }}"  target="_blank" class="linkedin"style="color:white;font-size:40px;"><i class="fab fa-linkedin"></i></a>
      <a href="{{ $row->facebooklink }}"  target="_blank" class="facebook"><i class="fab fa-facebook" style="color:white;font-size:40px;"></i></a>
      <a href="{{ $row->instagramlink }}"  target="_blank" class="instagram" style="color:white;font-size:40px;"><i class="fab fa-instagram"></i></a> -->
      <!-- <a href="{{ $row->twitterlink }}"  target="_blank" class="twitter" style="color:white;font-size:40px;"><i class="fab fa-twitter"></i></a>         -->
      <!-- <a href="{{ $row->youtubelink }}" target="_blank" class="google-plus"style="color:white;font-size:40px;"><i class="fab fa-youtube"></i></a> -->
      @endforeach
      
      
      </div>
      <a href="{{ asset('public/cv/'.$row->cvlink) }}" class="btn btn-primary">Download My CV</a>
    </div>
  </section>
  @endforeach