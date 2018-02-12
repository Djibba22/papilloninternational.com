 <!-- single education -->
  <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
      <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
              <h2 class="left-align card-title-top" style="min-height: 77px">{{ $tour->title }}</h2>
              <div class="card-img-wrap">
                  <img class="activator" src="images/EuropeTour.webp" alt="">
              </div>
          </div>
          <div class="card-content">
              <span class="card-title activator brand-text">{{ Carbon\Carbon::parse($tour->start_date)->toFormattedDateString() }}<i class="mdi-navigation-more-vert right"></i></span>
              <p>{{ $tour->preferred_length }}</p>
          </div>
          <!-- Reveal content-->
          <div class="card-reveal">
              <div class="rev-title-wrap">
                  <span class="card-title activator brand-text">{{ $tour->title }}<i class="mdi-navigation-close right"></i></span>
                  <p>{{ $tour->preferred_length }}</p>
              </div>
              <p class="rev-content"></p>
                  Where: {{ $tour->description }}</p>

              <a href="/tours/{{ $tour->id }}" class="btn btn-xs pull-right">View Itinerary/Register</a>
           </div>
      </div>
  </div> <!-- single education end -->

{{--
 <!-- single education -->
  <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
      <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
              <h2 class="left-align card-title-top">June 11-June 26, 2017 </h2>
              <div class="card-img-wrap">
                  <img class="activator" src="images/EuropeTour.webp" alt="">
              </div>
          </div>
          <div class="card-content">
              <span class="card-title activator brand-text">Madame Schlup's Europe tour 2017<i class="mdi-navigation-more-vert right"></i></span>
              <p>15 Days</p>
          </div>
          <!-- Reveal content-->
          <div class="card-reveal">
              <div class="rev-title-wrap">
                  <span class="card-title activator brand-text">Madame Schlup's Europe tour 2017<i class="mdi-navigation-close right"></i></span>
                  <p>15 Days</p>
              </div>
              <p class="rev-content">
                  Where: Paris, (London, opt), French Riviera, Monaco, Pisa, Venice, Florence, Rome, Pompeii, (Iceland, opt).When: June 11-June 26, 2017 (June 29th with Iceland, opt.)**Private tour**</p>
          </div>
      </div>
  </div> <!-- single education end -->

  <!-- single education -->
  <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
      <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
              <h2 class="left-align card-title-top">Summer 2018</h2>
              <div class="card-img-wrap">
                  <img class="activator" src="images/FrauBarnes.webp" alt="">
              </div>
          </div>
          <div class="card-content">
              <span class="card-title activator brand-text">Frau Barnes' Europe tour 2018<i class="mdi-navigation-more-vert right"></i></span>
              <p>13 Days</p>
          </div>
          <div class="card-reveal">
              <div class="rev-title-wrap">
                  <span class="card-title activator brand-text">Frau Barnes' Europe tour 2018<i class="mdi-navigation-close right"></i></span>
                  <p>13 Days</p>
              </div>
              <p class="rev-content">Where: Luxembourg, Germany, Austria, Switzerland, and Liechtenstein. (Iceland optional) When: Summer 2018 (dates TBD) **Private tour**                                </p>
          </div>
      </div>
  </div> <!-- single education -->

  <!-- single education -->
  <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
      <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
              <h2 class="left-align card-title-top">[2017-2018]</h2>
              <div class="card-img-wrap">
                  <img class="activator" src="images/yourDestination.webp" alt="">
              </div>
          </div>
          <div class="card-content">
              <span class="card-title activator brand-text">[Your Destiantion Here]<i class="mdi-navigation-more-vert right"></i></span>
              <p># Days</p>
          </div>
          <div class="card-reveal">
              <div class="rev-title-wrap">
                  <span class="card-title activator brand-text">A Level<i class="mdi-navigation-close right"></i></span>
                  <p># Days</p>
              </div>
              <p class="rev-content">
                  Want to offer a tour for your students? This could be your sign-up page...</p>
          </div>
      </div>
  </div> <!-- single education -->  --}}