<section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <div class="img-box">
        <img src="{{asset('assets/images/contact-bg.jpg')}}" alt="">
      </div>
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
            {{ __('contact.Get In touch')}}
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <form action="{{route('contactMail')}}" method='post'>
                @csrf

              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" name='name' placeholder="{{ __('contact.Full Name')}}" />
                  </div>
                  <div>
                    <input type="email" name='email' placeholder="{{ __('contact.Email')}} " />
                  </div>
                  <div>
                    <input type="text" name='phone' placeholder="{{ __('contact.Phone Number')}}" />
                  </div>
                  <div class="">
                    <input type="text" name='message' placeholder="{{ __('contact.Message')}}" class="message_input" />
                  </div>
                  <div class="btn-box ">
                    <button type="submit">
                      {{ __('contact.Send')}}
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
