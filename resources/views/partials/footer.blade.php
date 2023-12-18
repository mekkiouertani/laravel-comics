<section id="blue-icons">
    <div id="all-top-main">
        <section id="bottom" class="p-3">
            <div class="container">
                <ul class="w-100">
                    @foreach ($blueicons as $item)
                        <li class="text-uppercase d-flex align-items-baseline align-content-center ">
                            <div class="box-item-logo">
                                <img src="" alt="" class="w-100" />
                            </div>
                            <p class="px-3 fs-6 fw-bold mt-4">{{ $item['text'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
</section>
