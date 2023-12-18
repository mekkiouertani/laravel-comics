<section id="card" class="bg-black">
    <div class="container py-3">
        <div class="row gx-6 gy-3 align-content-center">
            @foreach ($comics as $item)
                <div class="col-12 col-md-4 col-lg-3" v-for="(card, index) in cards" :key="index">
                    <div class="cards">
                        <div class="img-box">
                            <img src="{{ $item['thumb'] }}" :alt="title" />
                        </div>
                        <h5 class="text-white py-3 ">{{ $item['series'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
