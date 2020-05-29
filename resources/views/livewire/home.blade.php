<div>
    @livewire('heading')
    @livewire('header')
    <!-- CAROUSEL -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="/images/coin1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption" id="carousel-1">
                    <h1>Avez vous besoin de bitcoin?</h1>
                    <p>Participez à un QuizCoin et gagnez en!</p>
                    <button>Jouer</button>
              </div>
          </div>

          <div class="carousel-item ">
            <img src="/images/coin6.png" class="d-block w-100" alt="...">
            <div class="carousel-caption" id="carousel-2">
                <h1>Préférez-vous utiliser de l'ethereum?</h1>
                <p>Participez à un QuizCoin et gagnez en!</p>
                <button>Jouer</button>
          </div>
          </div>
          <!--
          <div class="carousel-item">
            <img src="/images/coin3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/images/coin4.png" class="d-block w-100" alt="...">
          </div>
        </div>
    -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
