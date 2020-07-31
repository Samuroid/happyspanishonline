<?php include "header.php"; ?>

  <section class="home-feature-container">
    <div class="row card-group justify-content-center text-center">
      <div class="col-lg-4 col-md-6">
        <div class="card mt-4">
          <div class="card-body">

              <h1 class="feature-title mb-4">Hablamos Español</h1>
              <i class="far fa-comment fa-5x red pr-5"></i>
              <i class="fas fa-home fa-5x red"></i>
              <h1 class="feature-title pt-3">Desde Casa</h1>

              <a class="pt-4" href="#first-ad-cards">
                <i class="fas fa-chevron-down fa-3x"></i>
              </a>

          </div><!-- /card-body -->
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card mt-4">
          <div class="card-body">

              <img class="macarena-image" src="img/macarena-working.jpeg" />

          </div><!-- /card-body -->
        </div>
      </div>
    </div><!-- /row /card-deck -->

    <div id="first-ad-cards" class="row card-group justify-content-center text-center">
      <div class="col-lg-4">
        <div class="card mt-4">
          <div class="card-body">

              <h2 class="card-title mb-4">Lessons At Home</h2>
              <p class="card-text">
                All lessons are taken online in the
              </p>
              <p class="card-text">
                comfort of your home on videocall.
              </p>
              <br  />
              <i class="fas fa-laptop-house fa-5x"></i>

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
              <i class="far fa-smile fa-5x"></i>

          </div><!-- /card-body -->
        </div><!-- /card -->
      </div><!-- /col -->
    </div><!-- /row /card-deck -->


    <div class="row text-center">
      <div class="col pt-5">
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

<section id="courses">
  <div class="row">
    <div class="col-md-4 col-sm-12 text-center">
      <img class="courseImg" src="img/espanol_general.jpg" alt="Spanish Life Photo" />
      <h3 class="mt-4">GENERAL SPANISH</h3>
      <p class="mt-4">
        The aim is for the student to acquire communicative capability so that you can understand, express yourself and interact appropriately in various real-life situations.
      </p>
    </div>

    <div class="col-md-4 col-sm-12 text-center">
      <img class="courseImg" src="img/fines_específicos.jpg" alt="Spanish Life Photo" />
      <h3 class="mt-4">SPECIFIC PURPOSES</h3>
      <p class="mt-4">
        Lessons designed for students that have a special reason for learning Spanish. Spanish lessons for travelling, personal life, school reinforcement, GSCEs, A-Levels, International Baccalaureate.
      </p>
    </div>

    <div class="col-md-4 col-sm-12 text-center">
      <img class="courseImg " src="img/exams.jpg" alt="Exams Prep Photo" />

      <h3 class="mt-4">EXAM PREPARATION</h3>
      <p class="mt-4">
        For students that need the certification in Spanish as a Foreing Language (DELE) Levels B1 and B2.
      </p>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>
