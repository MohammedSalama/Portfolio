<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ URL::asset('Frontend/assets/img/profile-img.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>Back-End Developer &amp; Web Developer.</h3>
                <p class="font-italic">
                    {{ $about -> title }}
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 8 Nov 1996</li>
{{--                            <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>--}}
                            <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +20 0111 157 0436</li>
                            <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : Cairo , Egypt</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 26</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Bachelor's Degree</li>
                            <li><i class="icofont-rounded-right"></i> <strong>G-mail:</strong> devmuhammedsalama@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <p>
                    {{ $about -> description }}
                </p>
            </div>
        </div>

    </div>
</section>
