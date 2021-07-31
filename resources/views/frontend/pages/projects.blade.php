<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>My Projects</h2>
          <p>I am completed this project.</p>
        </div>

        <div class="row">
        @foreach ($prjects as $row)
        <div class="col-md-3 mb-2 text-center mr-2">
          <img src="{{ asset('public/img/projects/'. $row->image )  }}" style="width:200px;"alt="" />
          <h3 class="mt-2 mb-2">{{ $row->title }}</h3>
          <a href="{{ $row->id }}" target="blank" data-bs-toggle="modal" data-bs-target="#exampleModal{{$row->id}}" class="btn btn-primary btn-sm">Details</a>
        </div>
        @endforeach
        </div>

      </div>

      <!-- Modal -->
      @foreach ($prjects as $row)
      <div class="modal fade text-center" id="exampleModal{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">

            <div class="modal-header text-center">
              <h2 class="modal-title" style="color:blue;" id="exampleModalLabel">{{$row->title}}</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <img class="mb-2" src="{{ asset('public/img/projects/'. $row->image )  }}" style="width:400px;height:200px;"alt="Image Here" />
            <hr>
            <h3 class="mb-2">Feature of this Project</h3>
            <hr>
            <p class="mb-2">{{$row->description}}</p>
            <hr>
            <a href="{{ $row->link }}" target="blank" class="btn btn-primary">Live View</a>
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </section>