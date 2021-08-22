@foreach ($footer as $row)
<footer id="footer">
    <div class="container">
      <h3 class="btn btn-danger"> {{ strtoupper($row->name) }}</h3>
      <p>{{ $row->declare }}</p>
      <!-- <div class="social-links">
        <a href="https://www.facebook.com/raselranacse"  target="blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/rasel.rana.71465/"  target="blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://twitter.com/RaselRa12454491"  target="blank" class="twitter"><i class="bx bxl-twitter"></i></a>        
        <a href="https://www.youtube.com/channel/UCc_mI-T2BbSck7VbHBDY4qQ/videos" target="blank" class="google-plus"><i class="bx bxl-youtube"></i></a>
        <a href="https://www.linkedin.com/in/rasel-rana-26a079125/"  target="blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
      <div class="copyright">
        &copy; Copyright <?php echo date('Y'); ?> <strong><span> {{ $row->name }}</span></strong>. {{ $row->copyright }}
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Design And Developted by <a target="blank" href="{{ $row->link }}">{{ $row->developer }}</a>
      </div>
    </div>
  </footer>
  @endforeach