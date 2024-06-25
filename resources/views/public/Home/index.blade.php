@include('public.Home.header')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    @include('public.Home.navbar')
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
        <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button> -->
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/img_3167.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>ST. PAUL UNIVERSITY ALUMNI ASSOCIATION</h5>
                <p>SPUP takes pride on the scores of its graduates who have made significant impact in their respective profession and vocation, in our society and the Church. SPUD acknowledges that its Alumni are one of the measures of the effectiveness of Paulinian education through the years.</p>
            </div>
        </div>
        <div class="carousel-item">
        <img src="{{ asset('images/grad-1.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <!-- <h5>SPUPAA Vision Mission</h5> -->
            <div style="display: flex; align-items: center; justify-content: center; margin-top: -20px;">
                <img src="{{ asset('images/SPUPAA LOGO.png') }}" alt="SPUPAA Logo" style="height: 400px; margin-right: 40px;">
                <div>
                    <h5>SPUPAA Vision Mission</h5>
                    <br>
                    <p style="color: yellow; font-style: italic;">VISION</p>
                    <p style="font-size: 16px;">St. Paul University Philippines is an internationally recognized institution dedicated to the formation of competent leaders and responsible citizens of their communities, country; and the world.</p>
                    <br>
                    <p style="color: yellow; font-style: italic;">MISSION</p>
                    <p style="font-size: 16px;">Animated by the Gospel and guided by the teachings of the Church, it helps to uplift the quality of life and to effect social transformation through:
                        1. Quality, Catholic, Paulinian formation, academic excellence, research, and community services;
                        2. Optimum access to Paulinian education and service in an atmosphere of compassionate caring, and
                        3. Responsive and innovative management processes.</p>
                </div>
            </div>
        </div>
    </div>

        <!-- <div class="carousel-item">
            <img src="{{ asset('images/grad-1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@include('public.Home.main')

@include('public.Home.contact')
@include('public.Home.footer')
