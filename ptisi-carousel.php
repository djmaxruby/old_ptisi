<section>
<div class="container">
<hr>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="/img/tickets-c.jpg" alt="..." class="img-scale">
            <div class="carousel-caption">
              <h2><? echo $carousel[$global_lang]['tickets']; ?></h2>
            </div>
          </div>
          <div class="item">
            <img src="/img/hotels-c.jpg" alt="..." class="img-scale">
            <div class="carousel-caption">
              <h2><? echo $carousel[$global_lang]['hotels']; ?></h2>
            </div>
          </div>    
          <div class="item">
            <img src="/img/rental-c.jpg" alt="..." class="img-scale">
            <div class="carousel-caption">
               <h2><? echo $carousel[$global_lang]['rental']; ?></h2>
           </div>
          </div>
          <div class="item">
            <img src="/img/taxi-c.jpg" alt="..." class="img-scale">
            <div class="carousel-caption">
              <h2><? echo $carousel[$global_lang]['taxi']; ?></h2>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <hr>
    </div>
</section>

<section>
    <div class="container">
  <div class="row">
    <div class="col-md-2 text-center"><img src="/img/ac/AA.png" class="ac-transform"></div>
    <div class="col-md-2 text-center"><img src="/img/ac/EY.png" class="ac-transform"></div>
    <div class="col-md-2 text-center"><img src="/img/ac/TK.png" class="ac-transform"></div>
    <div class="col-md-2 text-center"><img src="/img/ac/US.png" class="ac-transform"></div>
    <div class="col-md-2 text-center"><img src="/img/ac/LH.png" class="ac-transform"></div>
    <div class="col-md-2 text-center"><img src="/img/ac/UA.png" class="ac-transform"></div>
  </div>

    </div>
</section>