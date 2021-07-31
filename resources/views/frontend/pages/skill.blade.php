<div class="container mt-2">
      <section id="skills" class="skills section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
            @foreach ($skilldetails as $row)
              <h2>Skills</h2>
              <p><strong>{{ $row->title }}</strong> <br/>{{ $row->description }}</p>
            @endforeach
            </div>

            <div class="row skills-content">
              @foreach ($skill as $row)
                <div class="progress">
                  <span class="skill">{{ $row->skillname }}<i class="val">{{ $row->skillvalue }}%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{ $row->skillvalue }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                @endforeach

            </div>

          </div>
        </section>
</div>