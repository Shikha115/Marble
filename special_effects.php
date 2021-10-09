<?php include("header.php");?>

<div class="page-banner">
    <div class="container">
        <h2>product details</h2>
    </div>
</div>

<section class="gallery">
    <div class="container" style="max-width: 1310px;">
        <div class="marble">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-5">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active marble-img">
                                <img src="src/images/special effects/Antique Beige Leather Finish_ICON.jpg">
                            </div>
                            <div class="carousel-item marble-img">
                                <img src="src/images/special effects/Azul Gold Travertine Antique Finish_ICON.jpg">
                            </div>
                            <div class="carousel-item marble-img">
                                <img src="src/images/special effects/Black Marquina Sand Blast_ICON.jpg">
                            </div>
                            <div class="carousel-item marble-img">
                                <img src="src/images/special effects/Black Pearl Ribbed_ICON.jpg">
                            </div>
                            <div class="carousel-item marble-img">
                                <img src="src/images/special effects/Blue Pearl Hydro Finish_ICON.jpg">
                            </div>
                            <div class="carousel-item marble-img">
                                <img src="src/images/special effects/Brown Antique Hydro Finish_ICON.jpg">
                            </div>
                            <div class="carousel-item marble-img">
                                <img src="src/images/special effects/Light Emperador Leather Finish_ICON.jpg">
                            </div>
                            <div class="carousel-item marble-img">
                                <img src="src/images/special effects/Mocha Cream Limestone Shot Blast_ICON.jpg">
                            </div>
                            <div class="carousel-item marble-img">
                                <img src="src/images/special effects/Statuario Bushhammer_ICON.jpg">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
                <div class="col-12 col-lg-8 col-md-7">
                    <div class="marble-content">
                        <h2><span>special effects</span> collection</h2>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        <p><span>Finishes:</span> Satin, Matt, Rocker</p>
                        <p><span>Sizes:</span> 1200mm x1600 mm, 800mm x1600 mm</p>
                        <a class="btn btn-dark" href="#Equire_now" data-toggle="modal">Equire Now</a>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    <!-- equire_now form -->
    <div class="modal fade" id="Equire_now" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><span>Equire</span> Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="First Name" minlength="4" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Last Name" minlength="4" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <input type="tel" class="form-control" placeholder="Phone" minlength="10" maxlength="12" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-edit"></i>
                                        </div>
                                        <textarea rows="5" placeholder="Your Message" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-dark" href="#">Submit</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php");?>