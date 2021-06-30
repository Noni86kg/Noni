<?PHP include "nav.php";?>

<!-- header -->
<div class="headerPost py-5 text-center text-white">
    <h3>Single page heading</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eius.</p>
</div>

<!-- main -->
<section class="contact main container d-flex flex-wrap justify-content-evenly py-5">
  <div class="col-md-6 bg-white p-4">
    <div class="row">
    <h3 class="pt-5">About</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur animi distinctio omnis accusantium. Inventore nesciunt magnam laboriosam ullam hic, beatae mollitia, amet soluta repellendus rem minus eveniet. Cumque dolore ducimus, asperiores nam unde consequatur quis excepturi veritatis, inventore quas provident, neque atque! Ipsa incidunt architecto possimus nemo sint a alias quae ullam iste corrupti reiciendis sunt, enim voluptates veniam. Voluptatibus?</p>
    <hr class="mt-4">
    <h3 class="py-5">Contact us</h3>
    <i class="fas fa-map-marker-alt "> Green street 3, Novi Sad</i>
    <i class="fas fa-phone py-3"> 062 123 456</i>    
    <i class="fas fa-envelope pb-5"> info@news.com</i>
    <hr>
    <h3 class="py-5">Get in touch</h3>
    <form class="d-flex flex-column">
        <input type="text" placeholder="Enter name">
        <input type="email" placeholder="Ender Email">
        <textarea name="message" id="message" cols="20" rows="8" placeholder="Message"></textarea>
        <button>Send message</button>
    </form>
    <h3 class="pt-5">Socials</h3>
    <div class="icons d-flex justify-content-around">
        <a href=""><i class="fab fa-facebook-square"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-pinterest"></i></a>
    </div>
    </div>
  </div>

<?PHP include "aside.php";?>
  </section>

<?PHP include "footer.php";?>