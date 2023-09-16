<?php 
//Template Name : contacts
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <!-- Preview Header  -->
    <div class="PreviewHeader" style="position: sticky;top: 0; z-index: 5;">
        <div class="logo">
          <a href="#"><i class='bx bxs-hot'></i><span>envato</span>market</a>
        </div>
        <div class="BuyAction">
          <button type="button" class="btn btn-success">Buy Now</button>
        </div>
    </div>
  
    <!-- Navbar  -->
    <section style="position: sticky; top: 54px; width: 1366px; height: 97px; display: flex; justify-content: center;padding: 20px 0px 20px 0px;z-index: 5; background-color: white;">
      <nav class="navbar bg-body-tertiary" style="width: 80%;">
          <div class="container-nav">
            <div class="LogoName" style="min-width: 190px;min-height: 45px;">
              <a href="index.php">dexico.</a>
            </div>
            <div class="NavLinks" style="width: 85%;min-height: 100%;">
              <ul>
                <li><a href="index.php" style="color: #3c6e71; text-decoration: none;">home<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="HOME/Home-2.html">Home 2</a>
                    <a href="HOME/Home-3.html">Home 3</a>
                    <a href="HOME/Home-4.html">Home 4</a>
                  </div>
                </li>
                <li><a href="PROPERTY/Property.html" style="color: #3c6e71; text-decoration: none;">property<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="PROPERTY/Property-List.html">Property List</a>
                    <a href="PROPERTY/Property-Details.html">Property Details</a>
                    <a href="PROPERTY/Property-Width-Full-Details.html">Property Details Full Width</a>
                    <a href="PROPERTY/Agents.html">Agents</a> 
                    <a href="PROPERTY/Agent-Details.html">Agents Details</a>
                  </div>
                </li>
                <li><a href="ABOUT/About.html" style="color: #3c6e71; text-decoration: none;">about<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="ABOUT/404.html">404</a>
                  </div>
                </li>
                <li><a href="BLOG/Blog.html" style="color: #3c6e71; text-decoration: none;">blog<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="BLOG/SinglePost.html">Single Post</a>
                    </div>
                </li>
                <li><a href="Contacts.html" style="color: #3c6e71; text-decoration: none;">contacts</a></li>
              </ul>
            </div>
            <!-- Off-Canvas -->
            <button class="btn btn-primary OffCanvaBtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class='bx bx-align-right'></i></button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 600px; padding: 54px 20px 30px 20px;">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body" align="center">
                <div class="InsideCanvas" style="color: #133b5c;">
                  <h1 style="font-family: 'Gothic A1', Sans-serif;font-size: 47px;font-weight: 543;line-height: 1.3em;">Let's be Together</h1>
                  <div class="gmap" style="width: 480px;height: 340px; margin-bottom: 40px; margin-top: 30px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d317893.9737282887!2d-0.11951900000000001!3d51.503186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sus!4v1691729805369!5m2!1sen!2sus" width="478" height="338" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="ContactsDetails">
                    <h6><a href="#" style="text-decoration: none;color: #3C6E71; display: flex; justify-content: center;align-items: center;"><i class='bx bxs-map' style="margin-right:10px;font-size: 30px;margin-top: 5px;color: #3C6E71;"></i>LA, Vehiclua Street, 58</a></h6>
                    <h6><a href="#" style="text-decoration: none;color: #3C6E71; display: flex; justify-content: center;align-items: center;"><i class='bx bxs-phone' style="margin-right:10px;font-size: 30px;margin-bottom: 5px;color: #3C6E71;"></i>+91 1234567890</a></h6>
                    <h6><a href="#" style="text-decoration: none;color: #3C6E71; display: flex; justify-content: center;align-items: center;"><i class='bx bxs-envelope' style="margin-right:10px;font-size: 30px;margin-bottom: 5px;color: hsl(191, 77%, 12%);"></i>hello@merkulov.design</a></h6>
                  </div>
                  <br>
                  <br>
                  <div class="SocialMedia" style="width: 230px;height: 40px;font-size: 35px;">
                    <a href=""><i class='bx bxl-twitter' style="color: #3C6E71;margin-right: 5px;"></i></a>
                    <a href=""><i class='bx bxl-facebook' style="color: #3C6E71;margin-right: 5px;"></i></a>
                    <a href=""><i class='bx bxl-instagram' style="color: #3C6E71;"></i></a>  
                  </div>
                </div>
              </div>
            </div>
        </nav>
  </section>

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
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2483.5466697522556!2d-0.11951900000000001!3d51.503186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sus!4v1692185160765!5m2!1sen!2sus" width="1003.91" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-map' style="color: #3C6E71;margin-right: 25px; font-size: 25px;"></i>LA, Vehiclua Street, 58</a></li>
                    <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-phone' style="color: #3C6E71;margin-right: 25px; font-size: 25px;"></i>+91 1234567890</a></li>
                    <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-envelope' style="color: #3C6E71;margin-right: 25px; font-size: 25px;"></i>hello@merkulov.design</a></li>
                </ul>
                </div>
                <div class="Box-2" style="display: flex;align-items: center;">
                <a href="#"><i class='bx bxl-twitter' style="color: #3C6E71;margin-right: 15px;font-size: 35px;"></i></a>
                <a href="#"><i class='bx bxl-facebook' style="color: #3C6E71;margin-right: 15px;font-size: 35px;"></i></a>
                <a href="#"><i class='bx bxl-instagram' style="color: #3C6E71;font-size: 35px;"></i></a>  
                </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <div class="Footer">
        <section>
          <div class="FooterHeader">
            <div class="Heading-1">A special and qualified service dedicated to luxury properties for rent</div>
            <div class="Heading-2"><a href="#" style="text-decoration: none;color: #133b5c;">dexico<span style="color: #3C6E71;">.</span></a></div>
          </div>
          <div class="FooterContent">
            <div class="F-Content">
              <ul>
                <li><a href="#">– Propertys</a></li>
                <li><a href="#">– Agents</a></li>
                <li><a href="#">– Locations</a></li>
                <li><a href="#">– Clients Support</a></li>
              </ul>
            </div>
            <div class="F-Content">
              <ul>
                <li><a href="#">– Home</a></li>
                <li><a href="#">– About</a></li>
                <li><a href="#">– Blog</a></li>
                <li><a href="#">– Contacts</a></li>
              </ul>
            </div>
            <div class="F-Content">
              <div class="Box-1">
                <ul>
                  <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-map' style="color: #3C6E71;margin-right: 20px; font-size: 25px;"></i>LA, Vehiclua Street, 58</a></li>
                  <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-phone' style="color: #3C6E71;margin-right: 20px; font-size: 25px;"></i>+91 1234567890</a></li>
                  <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-envelope' style="color: hsl(191, 77%, 12%);margin-right: 20px; font-size: 25px;"></i>hello@merkulov.design</a></li>
                </ul>
              </div>
              <div class="Box-2" style="display: flex;align-items: center;">
                <a href="#"><i class='bx bxl-twitter' style="color: #3C6E71;margin-right: 10px;font-size: 35px;"></i></a>
                <a href="#"><i class='bx bxl-facebook' style="color: #3C6E71;margin-right: 10px;font-size: 35px;"></i></a>
                <a href="#"><i class='bx bxl-instagram' style="color: #3C6E71;font-size: 35px;"></i></a>  
              </div>
            </div>
          </div>
          <hr>
          <div class="FooterCredits">
            <b>Merkulove © Dexico Template All rights reserved Copyrights 2020</b>
          </div>
        </section>
      </div>
  

    <!-- Bootstrap JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</body>
</html>