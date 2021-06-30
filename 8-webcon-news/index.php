<?PHP include"nav.php"; ?>

    <!-- header -->
    <header >
        <div class="d-flex flex-wrap h-100">
        <div class="col-md-2"></div>
        <div class="mx-4 my-5 text-white col-md-5 d-flex flex-column justify-content-center align-items-start">
            <h1>Your news portal</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate sequi eius consequatur magnam nam quis fugiat saepe maiores obcaecati suscipit?</p>
            <button>Try for free</button>
        </div>
        <div class="mx-3 my-5 col-md-3">
        <article class="h-100 d-flex flex-column justify-content-center align-items-start">
            <div class="textBoxBg p-2">
            <div class="box-text px-5 py-3 text-dark">
            <h3>Subscribe today</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ullam?</p>
            <form class="d-flex flex-column">
             <input class="form-control py-3 mb-2" type="search" placeholder="How may i help you" aria-label="Search">
             <button type="submit">search</button>
      </form>
            </div>
            </div>
        </article>
        </div>
        <div class="col-md-2">
        </div>
        </div>
</header>

<!-- main -->
<section class="main container d-flex flex-wrap justify-content-evenly py-5">
  <div class="col-md-6 bg-white p-4 text-center">
    <div class="row">
    <article>
      <img src="img/blog1.jpg" alt="">
      <div class="main-text">
        <span><i class="fab fa-facebook-square"></i>&nbsp;facebook</span>
        <span><i class="fab fa-twitter"></i>&nbsp;twitter</span>
        <h3>Blog one</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est delectus sed itaque explicabo error ex tempora, soluta voluptatum doloremque dolorem quibusdam, adipisci obcaecati deserunt? Consectetur necessitatibus illum et veritatis atque!</p>
        <p>Date: <a href="">22.may.2020.</a> | by <a href="">Admin</a> </p>
      </div>
    </article>

    <article>
      <img src="img/blog2.jpg" alt="">
      <div class="main-text">
        <span><i class="fab fa-facebook-square"></i>&nbsp;facebook</span>
        <span><i class="fab fa-twitter"></i>&nbsp;twitter</span>
        <h3>Blog two</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est delectus sed itaque explicabo error ex tempora, soluta voluptatum doloremque dolorem quibusdam, adipisci obcaecati deserunt? Consectetur necessitatibus illum et veritatis atque!</p>
        <p>Date: <a href="">22.may.2020.</a> | by <a href="">Admin</a> </p>
      </div>
    </article>

    <article>
      <img src="img/blog3.jpg" alt="">
      <div class="main-text">
        <span><i class="fab fa-facebook-square"></i>&nbsp;facebook</span>
        <span><i class="fab fa-twitter"></i>&nbsp;twitter</span>
        <h3>Blog three</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est delectus sed itaque explicabo error ex tempora, soluta voluptatum doloremque dolorem quibusdam, adipisci obcaecati deserunt? Consectetur necessitatibus illum et veritatis atque!</p>
        <p>Date: <a href="">22.may.2020.</a> | by <a href="">Admin</a> </p>
      </div>
    </article>
    </div>
  </div>

<?PHP include"aside.php"; ?>
</section>

<?PHP include"footer.php"; ?>