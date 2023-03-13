 <!-- ======= Book A Table Section ======= -->
 <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Book A Table</h2>
        <p>Book <span>Your Stay</span> With Us</p>
      </div>

      <div class="row g-0">

        <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
          <form action="dashboard/book" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @csrf
            <div class="row gy-4">
              <div class="col-lg-4 col-md-6">
                <input type="text" name="name_book" class="form-control @error('name_book') is-invalid @enderror " id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="email" class="form-control @error('email_book') is-invalid @enderror" name="email_book" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control @error('phone_book') is-invalid @enderror" name="phone_book" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="time" class="form-control @error('time') is-invalid @enderror" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="number" class="form-control @error('num_people') is-invalid @enderror" name="num_people" id="people" placeholder="num of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control  @error('message') is-invalid @enderror" name="message" rows="5" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message">
    <p>Testing</p>
              </div>
              <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Book a Table</button></div>
          </form>
        </div><!-- End Reservation Form -->

      </div>

    </div>
  </section><!-- End Book A Table Section -->