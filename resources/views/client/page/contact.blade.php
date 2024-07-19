@extends('client.layout.master')
@section('content')
    <!-- /navigation -->
  <section class="section-sm mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          
          <div class="content mb-5">
            <h2 id="we-would-love-to-hear-from-you">
              Chúng tôi rất mong nhận được hồi âm từ bạn&hellip;.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit massa vitae felis augue. In venenatis scelerisque accumsan egestas mattis. Massa feugiat in sem pellentesque.</p>
          </div>
          
          <form method="POST" action="#">
            <div class="form-group">
              <label for="name">Your Name (Required)</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" required>
            </div>
            <div class="form-group">
              <label for="email">Your Email Address (Required)</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="johndoe@gmail.com" required>
            </div>
            <div class="form-group">
              <label for="email">Reason For Contact</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Advertising">
            </div>
            <div class="form-group">
              <label for="message">Your Message Here</label>
              <textarea name="message" id="message" class="form-control" placeholder="Lorem ipsum dolor sit amet..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">GỬI</button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection