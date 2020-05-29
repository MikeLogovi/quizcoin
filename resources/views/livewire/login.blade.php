<div id="login">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-4 login-col">
                <div class="form-space">
                       <h1 class="site-title text-center">QuizCoin</h1>
                       <p class="text-center"> Content de vous revoir</p>
                        <form>
                            <div class="form-group ">
                                <input placeholder="Votre Email" type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group ">
                                <input placeholder="Votre Mot de passe" type="password" class="form-control" id="inputPassword4">
                            </div>
                            <div class="form-group d-block" style="display: block">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck" style="margin-left:1rem">
                                        Se souvenir de moi
                                    </label><br/>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                        </form>
                       
                </div>
                <div class="container not-yet-subscribe">
                    <p>Pas encore inscrit? <a href="{{ route('register') }}">Inscrivez vous</a></p>
                </div>
              </div>
              <div class="col-md-8 d-none d-md-block">
                  <img src="/images/coin4.png" alt="image de connexion" class="image-login">
              </div>
          </div>
      </div>
</div>
