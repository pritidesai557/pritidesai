<?php 
  /* Template Name: contacts */
  get_header();
?>

    <!-- Element-1 -->
    <div class="Element-1">
        <section>
            <div class="FirstImage">
                <div class="FirstImageHeader">Contacts</div>
                <div class="FirstImageText">Home » Templates <span style="color: black;">» Contacts</span></div>
            </div>
        </section>
    </div>

    <!-- Element-2 -->
    <div class="Element-2">
        <section>
            <iframe src="<?php the_field('map_link',33);?>" width="1003.91" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </div>

    <!-- Element-3 -->
    <div class="Element-3">
        <section>
            <div class="MessageBox">
                <div class="MessageHeader">Send Message</div>
                <div class="MessageContent">
                    <div class="MessageInputs">
                        <div class="Heading">Name</div>
                        <input class="form-control me-2" type="search" placeholder="Name" aria-label="Search">
                    </div>
                    <div class="MessageInputs">
                        <div class="Heading">Email</div>
                        <input class="form-control me-2" type="search" placeholder="Email" aria-label="Search">
                    </div>
                </div>
                <div class="MessageBigBox">
                    <div class="Heading">Message</div>
                    <textarea class="form-control" placeholder="Message" id="floatingTextarea"></textarea>
                </div>
                <button class="btn btn-outline-success" type="submit">− Send</button>
            </div>
            <div class="MessageBox">
                <div class="MessageHeader">Our Contacts</div>
                <div class="SubText">Browse the highest quality listings, apply online, sign your lease, and even pay your rent from any device</div>
                <div class="F-Content">
                <div class="Box-1">
                <ul>
                    <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-map' style="color: #3C6E71;margin-right: 25px; font-size: 25px;"></i><?php the_field('address',33);?></a></li>
                    <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-phone' style="color: #3C6E71;margin-right: 25px; font-size: 25px;"></i><?php the_field('phone_number',33);?></a></li>
                    <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-envelope' style="color: #3C6E71;margin-right: 25px; font-size: 25px;"></i><?php the_field('e-mail',33);?></a></li>
                </ul>
                </div>
                <div class="Box-2" style="display: flex;align-items: center;">
                <a href="<?php the_field('twitter_link',33);?>"><i class='bx bxl-twitter' style="color: #3C6E71;margin-right: 15px;font-size: 35px;"></i></a>
                <a href="<?php the_field('facebook_link',33);?>"><i class='bx bxl-facebook' style="color: #3C6E71;margin-right: 15px;font-size: 35px;"></i></a>
                <a href="<?php the_field('instagram_link',33);?>"><i class='bx bxl-instagram' style="color: #3C6E71;font-size: 35px;"></i></a>  
                </div>
                </div>
            </div>
        </section>
    </div>

    <?php 
      get_footer();
    ?>
  

    <!-- Bootstrap JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</body>
</html>