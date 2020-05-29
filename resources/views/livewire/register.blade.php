<div id="register">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 d-none d-md-block">
                <img src="/images/coin14.jpg" alt="ethereum" />
            </div>
            <div class="col-md-4 register-col">
                <div class="form-space">
                    <h1 class="site-title text-center">QuizCoin <img class="register-images" src="/images/bitcoin.svg" alt="bitcoin"/></h1>
                    <div class="container text-center" style="margin-top:1rem;">
                        <a href="#"><img class="register-images credentials" src="/images/facebook.svg" alt="facebook"/></a>
                        <a href="#"><img class="register-images credentials" src="/images/google.svg" alt="google"/></a>
                    </div>
                    <hr>
                        <form>
                            <div class="form-group">
                                <input class="input" type="email" class="form-control" placeholder="Votre nom d'utilisateur">
                            </div>
                            <div class="form-group">
                                <input  class="input"  type="email" class="form-control"  placeholder="Votre adresse email">
                            </div>
                            <div class="form-group">
                                <input  class="input"   type="password" class="form-control"  placeholder="Votre mot de passe">
                            </div>
                            <div class="form-group">
                                <input  class="input"  type="password" class="form-control"  placeholder="Confirmez votre mot de passe">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                    En m'inscrivant sur ce site, j'accepte les condition d'utilisation
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">S'inscrire</button>
                        </form>
                    </div>
                    <div class="container already-subscribe">
                        <p>Déjà inscrit? <a href="{{ route('login') }}">Connectez vous</a></p>
                    </div>
            </div>
        </div>
    </div>
</div>
