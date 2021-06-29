<?php @include "header.php" ?>

<section class="py-5 bg-lightGray text-center">
    <h3>Product</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
</section>

<section class="product py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/products1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 flex-column d-flex justify-content-center">
                <div>
                <h2>Nike</h2>
                <h4>$139.00</h4>
                <p>Category: Shoes</br>Availibility: In stock</p>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, aliquam suscipit totam quidem obcaecati pariatur provident facere doloribus repellendus veritatis ad eveniet omnis? Corporis nemo quo quae optio rerum omnis asperiores! Consectetur tempora voluptates amet magni, facilis molestias ratione expedita reiciendis odio voluptatibus impedit sint. </p>
                
                <form>
                    <lable for="">Quantity</lable>
                    <select>
                        <option value="quantity">1</option>
                        <option value="quantity">2</option>
                        <option value="quantity">3</option>
                    </select>
                </form>
                </br>
                <button>Add to cart</button>
                <span><i class="far fa-gem border"></i></span>
                <span><i class="far fa-heart border"></i></span>
            </div>
            </div>
        </div>
    </div>

</section>











<?php @include "footer.php" ?>