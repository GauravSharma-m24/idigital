{{-- <!-- Train Slider Start -->
<div class="train-slider-wrapper">
    <div class="train-slider">
        <!-- Repeat your instructors content -->
        @for($i = 0; $i < 2; $i++)
            @foreach($instructors as $instructor)
            <div class="single-team">
                <div class="team-thumb">
                    <img src="{{ asset('images/author/' . $instructor['image']) }}" alt="Author">
                </div>
                <div class="team-content">
                    <div class="rating">
                        <span class="count">4.9</span>
                        <i class="icofont-star"></i>
                        <span class="text">(rating)</span>
                    </div>
                    <h4 class="name">{{ $instructor['name'] }}</h4>
                    <span class="designation">{{ $instructor['designation'] }}</span>
                </div>
            </div>
            @endforeach
        @endfor
    </div>
</div>
<!-- Train Slider End --> --}}

<div class="section section-padding-02 mt-n1">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title shape-03 text-center">
                    <h5 class="sub-title">Meet Our Experts</h5>
                    <h2 class="main-title">Unlock Your Potential with <span>Our Team of Expert Instructors </span></h2>
                </div>
                <!-- Section Title End -->
<!-- Train Slider Start -->
<div class="train-slider-wrapper">
    <div class="train-slider">

        <!-- Instructor 1 -->
        <div class="single-tutor">
            <div class="team-thumb">
               <a href="{{route('tutorpage')}}"><img src="{{ asset('images/author/author-01.png') }}" alt="Author"></a> 
            </div>
            <div class="team-content">
                <div class="rating">
                    <span class="count">4.9</span>
                    <i class="icofont-star"></i>
                    <span class="text">(rating)</span>
                </div>
                <h4 class="name">Preet Kaur</h4>
                <span class="designation">Instructor</span>
            </div>
        </div>

        <!-- Instructor 2 -->
        <div class="single-tutor">
            <div class="team-thumb">
                <img src="{{ asset('images/author/author-02.jpg') }}" alt="Author">
            </div>
            <div class="team-content">
                <div class="rating">
                    <span class="count">4.9</span>
                    <i class="icofont-star"></i>
                    <span class="text">(rating)</span>
                </div>
                <h4 class="name">Mitchell Colon</h4>
                <span class="designation">BBA, Instructor</span>
            </div>
        </div>

        <!-- Instructor 3 -->
        <div class="single-tutor">
            <div class="team-thumb">
                <img src="{{ asset('images/author/author-03.jpg') }}" alt="Author">
            </div>
            <div class="team-content">
                <div class="rating">
                    <span class="count">4.9</span>
                    <i class="icofont-star"></i>
                    <span class="text">(rating)</span>
                </div>
                <h4 class="name">Sonya Gordon</h4>
                <span class="designation">MBA, Instructor</span>
            </div>
        </div>

    </div>
</div>
<!-- Train Slider End -->

</div>
</div>


