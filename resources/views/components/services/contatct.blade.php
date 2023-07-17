<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <section class="contact-layout2 py-0 bg-gray">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="contact-panel mt--130">
                <div class="testimonials testimonials-layout1">
                  <div class="bg-img">
                    <img src="{{ asset('assets/images/banners/6.jpg')}}" alt="banner">
                  </div>
                  <div class="slick-carousel"
                    data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "infinite": true}'>
                    <!-- Testimonial #1 -->
                    <div class="testimonial-item">
                      <div class="testimonial-item__rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <p class="testimonial-item__desc">They are the expertly trained team members who take extra step and
                        go the extra mile, to fulfill our promise to deliver dynamic solutions to fit
                        needs of a rapidly changing global environment!!
                      </p>
                      <div class="testimonial-item__meta">
                        <div class="testimonial-item__thumb">
                          <img src="{{ asset('assets/images/testimonials/thumbs/1.jpg')}}" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div>
                          <h4 class="testimonial-item__meta-title">Martin Hope</h4>
                          <p class="testimonial-item__meta-desc">Pro Cons</p>
                        </div>
                      </div><!-- /.testimonial-meta -->
                    </div><!-- /. testimonial-item -->
                    <!-- Testimonial #2 -->
                    <div class="testimonial-item">
                      <div class="testimonial-item__rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <p class="testimonial-item__desc">My project was a simple & small task, but the persistence and
                        determination turned it into an awesome and great project which make me happy because they help me
                       so much.
                      </p>
                      <div class="testimonial-item__meta">
                        <div class="testimonial-item__thumb">
                          <img src="{{ asset('assets/images/testimonials/thumbs/2.jpg')}}" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div>
                          <h4 class="testimonial-item__meta-title">John Peter</h4>
                          <p class="testimonial-item__meta-desc">7oroof Inc</p>
                        </div>
                      </div><!-- /.testimonial-meta -->
                    </div><!-- /. testimonial-item -->
                  </div>
                </div><!-- /.testimonials-layout1 -->
                <form method="post" action="assets/php/contact.php" id="contactForm" class="contact-panel__form">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="contact-panel__title">Request A Quote</h4>
                      <p class="contact-panel__desc mb-40">We take great pride in everything that we do, complete control
                        over services allows us to ensure our customers receive the best quality service.
                      </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                          required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="contact-email" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                          name="contact-phone" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <select class="form-control" style="display: none;">
                          <option>select your industry</option>
                          <option>Petroleum &amp; Gas Energy</option>
                        </select>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Additional Details!" id="contact-messgae"
                          name="contact-messgae" required></textarea>
                      </div>
                    </div><!-- /.col-lg-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
                      <button type="submit" class="btn btn__secondary mr-40">
                        <i class="icon-arrow-right"></i> <span>Submit Request</span>
                      </button>
                      <div class="form-group input-radio my-3">
                        <label class="label-radio">I accept the privacy and terms.
                          <input type="checkbox" checked="">
                          <span class="radio-indicator"></span>
                        </label>
                      </div>
                    </div><!-- /.col-lg-12 -->
                  </div>
                </form>
              </div><!-- /.contact__panel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
</div>