<?php include "header.php"; ?>

  <section class="home-feature-container">
    <div class="row navbar-spacer">
      <div class="col">
      <div class="home-feature"><!-- transparent box div -->

        <h1 class="feature-title pb-3 ">Hablamos Español</h1>
        <i class="far fa-comment fa-5x red pr-5"></i>
        <i class="fas fa-home fa-5x red"></i>
        <h1 class="feature-title pt-3">Desde Casa</h1>

      </div><!-- .centered-feature -->
    </div>
    </div><!-- /row -->

    <div class="row card-group justify-content-center text-center">
      <div class="col-lg-4">
        <div class="card mt-4">
          <div class="card-body">

              <h2 class="card-title mb-4">At Home Lessons</h2>
              <p class="card-text">
                All lessons are taken online in the
              </p>
              <p class="card-text">
                comfort of your home on videocall.
              </p>
              <br  />
              <i class="fas fa-laptop-house fa-5x yellow"></i>

          </div><!-- /card-body -->
        </div>
      </div>


      <div class="col-lg-4">
        <div class="card mt-4">
          <div class="card-body">

              <h2 class="card-title mb-4">Tailored Lessons</h2>
              <p class="card-text">
                Friendly learning environment
              </p>
              <p class="card-text">
                Lessons tailored to your needs
              </p>
              <br  />
              <i class="far fa-smile fa-5x yellow"></i>

          </div><!-- /card-body -->
        </div><!-- /card -->
      </div><!-- /col -->
    </div><!-- /row /card-deck -->


    <div class="row text-center">
      <div class="col pt-5">
        <a class="a-link down-arrow" href="#ad-cards"><i class="fas fa-chevron-down fa-3x"></i></a>
      </div>
    </div>
</section><!-- #feature-container -->

<section id="ad-cards">

    <!-- Ad cards -->
    <div class="container-fluid pt-5">
      <div class="card-deck text-center ad-cards">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal"></h4>
              </div>
              <div class="card-body">
                <h2 class="card-title pricing-card-title">Individualised Classes</h2>

                <ul class="list-unstyled">
                  <i class="fas fa-graduation-cap fa-5x ad-cards-icon medium-gray"></i>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal"></h4>
              </div>
              <div class="card-body">
                <h2 class="card-title pricing-card-title">Invest in your language skills</h2>
                <ul class="list-unstyled">
                  <i class="fas fa-medal fa-5x ad-cards-icon medium-gray"></i>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal"></h4>
              </div>
              <div class="card-body fit-content">
                <h2 class="card-title pricing-card-title">Flexible to your learning style</h2>
                <ul class="list-unstyled">
                  <i class="fas fa-chalkboard-teacher fa-5x ad-cards-icon medium-gray"></i>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <a class="full-width" href="lessons-prices.php"><button class="btn btn-lg btn-block btn-dark mt-4" type="button">Find out more</button></a>

      </div>
    </div><!-- /.container-fluid -->
</section><!-- /#ad-cards -->

<section id="testimonials">
    <h2>Testimonials</h2>

    <div id="testimonials-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!-- active class first slide to show-->
          <h3>An example of the testimonial section. Please supply the relevant content to bring this section up-to-date :)</h3>
          <img class="testimonial-img" src="https://via.placeholder.com/150" alt="dog-profile">
          <em>Pebbles, New York</em>

        </div>
        <div class="carousel-item">
          <h3 class="testimonial-text">An example of the testimonial section. Please supply the relevant content to bring this section up-to-date :)</h3>
          <img class="testimonial-img" src="https://via.placeholder.com/150" alt="lady-profile">
          <em>Beverly, Illinois</em>
        </div>

      </div>
      <a class="carousel-control-prev" href="#testimonials-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonials-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- testimonials-carousel -->
</section><!-- /#testimonials -->
<?php include "footer.php"; ?>
