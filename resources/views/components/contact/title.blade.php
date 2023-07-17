<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <section class="contact-layout1 pb-100">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="contact-panel__info bg-gray mb-30">
                <div class="contact-panel__block">
                  <h5 class="contact-panel__block__title">Our Location</h5>
                  <ul class="contact-panel__block__list list-unstyled">
                    <li>Minnesota United States.</li>
                  </ul>
                </div><!-- /.contact-panel__info__block -->
                <div class="contact-panel__block">
                  <h5 class="contact-panel__block__title">Quick Contact</h5>
                  <ul class="contact-panel__block__list list-unstyled">
                    <li><a href="mailto:Amarou@7oroof.com"></a>Email: equable822@gmail.com</li>
                    <li><a href="tel:01061245741"></a>Call Us: 6514449134 / 7706850167</li>
                  </ul>
                </div><!-- /.contact-panel__info__block -->
                <div class="contact-panel__block">
                  <h5 class="contact-panel__block__title">Opening Hours</h5>
                  <ul class="contact-panel__block__list list-unstyled">
                    <li>Monday - Friday</li>
                    <li>09:00 AM - 06:00 PM</li>
                  </ul>
                </div><!-- /.contact-panel__info__block -->
                <a href="contacs.html" class="btn btn__primary btn__block">
                  <i class="icon-arrow-right"></i><span>Request A Quote</span>
                </a>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
                      <!-- Success message -->
              @if(Session::has('success'))
                  <div class="alert alert-success">
                      {{Session::get('success')}}
                  </div>
              @endif
              <form method="POST" action="{{ route('contact.store') }}" id="contactForm" class="contact-panel__form mb-30">
              
              @csrf
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Get In Touch</h4>
                    <p class="contact-panel__desc mb-40">Complete control over products allows us to ensure our
                      customers receive the best quality prices and service. We take great pride in everything that we
                      do in our factory.</p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" placeholder="Name" name="name" id="name"
                        required>
                        <!-- Error -->
                      @if ($errors->has('name'))
                      <div class="error">
                          {{ $errors->first('name') }}
                      </div>
                      @endif
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" placeholder="Email" name="email" id="email"
                        required>
                        @if ($errors->has('email'))
                        <div class="error">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" placeholder="Phone" name="phone"
                        required>
                        @if ($errors->has('phone'))
                        <div class="error">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" placeholder="subject" name="subject" id="subject"
                      required>
                      @if ($errors->has('subject'))
                      <div class="error">
                          {{ $errors->first('subject') }}
                      </div>
                      @endif
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" placeholder="Additional Details!" id="messgae"
                        name="messgae" required></textarea>
                        @if ($errors->has('message'))
                        <div class="error">
                            {{ $errors->first('message') }}
                        </div>
                        @endif
                    </div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" name="send" class="btn btn__secondary btn__lg">
                      <i class="icon-arrow-right"></i><span>Submit Request</span>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section>
</div>