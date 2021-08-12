
    <!-- start footer -->
    <footer class="footer bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <a href="layout-1.html">
                        <img src="backend/assets/images/logo/universe_games__7_-removebg-preview.png" alt="" height="167" style=" margin: -49px; margin-left: -8px; ">                    
                    </a>
                    <div style=" float: right; margin-top: -63px; " >
                        <h6 class="mt-4 pt-2 text-white">Localização</h6>
                        <p class="mt-3 text-muted fs-15">São Paulo , SP. 220
                        </p>
                        <h6 class="text-primary fw-medium fs-15 mt-4">(19) 99692-0621</h6>
                        <h6 class="text-primary fw-medium fs-15 mt-2">(19) 99692-0621</h6>
                    </div>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- end footer -->

    <!-- start footer alter -->
    <div class="footer-alt bg-dark">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    {{ date('Y') }} &copy;  todos os direitos reservados para <a href="https://instagram.com/kaik_silvaks" class="text-muted">Kaik Silva</a>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end footer alter -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Get In Touch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" name="myForm" onsubmit="return validateForm()">
                        <span id="error-msg"></span>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-medium form-label" for="name">Name</label>
                                        <input type="text" class="form-control" placeholder="Your name" id="name" />
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-medium form-label" for="email">Email</label>
                                        <input type="email" class="form-control" placeholder="Your email" id="email" />
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-medium form-label" for="subject">Subject</label>
                                        <input type="text" class="form-control" placeholder="your subject" id="subject" />
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-medium form-label" for="number">Contact</label>
                                        <input type="text" class="form-control" placeholder="+00 1234 5678 90" id="number" />
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12 mb-3">
                                        <label class="fw-medium form-label" for="comments">Message</label>
                                        <textarea class="form-control" id="comments" placeholder="Enter your message..." rows="5"></textarea>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <input type="submit" id="submit" name="send" class="btn btn-primary mt-2" value="Send Information" />
                                    </div>
                                    <!-- end col -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->