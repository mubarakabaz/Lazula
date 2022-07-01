<div class="row">
    <div class="col-lg-8">
        <div class="owl-carousel owl-theme" id="main-banner-carousel">
            @forelse ($slider as $col)
            <div class="item">
                <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                        <h1 class="font-weight-bold">
                            {{$col->judul}}
                        </h1>
                        <h5 class="font-weight-normal  m-0">

                        </h5>
                        <p class="text-color m-0 pt-2 d-flex align-items-center">
                            <i class='bx bx-user'></i>
                            <span class="mdi fs-10 mr-1"> by {{$col->users->name}} </span>
                            <i class='bx bx-bookmark'></i>
                            <span class="mdi fs-10 mr-1"> {{$col->created_at}} </span>
                            <i class='bx bx-message-detail'></i>
                            <span class="fs-10 mr-1"> {{$col->viewers}}</span>

                        </p>
                    </div>
                    <div class="carousel-image">
                        <img src="{{ asset('uploads/'. $col->gambar_artikel) }}" alt="" style="height: 500px;" />
                    </div>
                </div>
            </div>
            @empty
            <div class="item">
                <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                        <h1 class="font-weight-bold">
                            If you wanted to get rich, how would you do it?
                        </h1>
                        <h5 class="font-weight-normal  m-0">
                            Lorem Ipsum has been the industry's standard
                        </h5>
                        <p class="text-color m-0 pt-2 d-flex align-items-center">
                            <span class="fs-10 mr-1">2 hours ago</span>
                            <i class="mdi mdi-bookmark-outline mr-3"></i>
                            <span class="fs-10 mr-1">126</span>
                            <i class="mdi mdi-comment-outline"></i>
                        </p>
                    </div>
                    <div class="carousel-image">
                        <img src="https://images.unsplash.com/photo-1655579935780-2f1dec467873?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=875&q=80"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                        <h1 class="font-weight-bold">
                            If you wanted to get rich, how would you do it?
                        </h1>
                        <h5 class="font-weight-normal  m-0">
                            Lorem Ipsum has been the industry's standard
                        </h5>
                        <p class="text-color m-0 pt-2 d-flex align-items-center">
                            <span class="fs-10 mr-1">2 hours ago</span>
                            <i class="mdi mdi-bookmark-outline mr-3"></i>
                            <span class="fs-10 mr-1">126</span>
                            <i class="mdi mdi-comment-outline"></i>
                        </p>
                    </div>
                    <div class="carousel-image">
                        <img src="https://images.unsplash.com/photo-1655579934784-d988195a1319?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=875&q=80"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                        <h1 class="font-weight-bold">
                            If you wanted to get rich, how would you do it?
                        </h1>
                        <h5 class="font-weight-normal  m-0">
                            Lorem Ipsum has been the industry's standard
                        </h5>
                        <p class="text-color m-0 pt-2 d-flex align-items-center">
                            <span class="fs-10 mr-1">2 hours ago</span>
                            <i class="mdi mdi-bookmark-outline mr-3"></i>
                            <span class="fs-10 mr-1">126</span>
                            <i class="mdi mdi-comment-outline"></i>
                        </p>
                    </div>
                    <div class="carousel-image">
                        <img src="https://images.unsplash.com/photo-1546422904-90eab23c3d7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                        <h1 class="font-weight-bold">
                            If you wanted to get rich, how would you do it?
                        </h1>
                        <h5 class="font-weight-normal  m-0">
                            Lorem Ipsum has been the industry's standard
                        </h5>
                        <p class="text-color m-0 pt-2 d-flex align-items-center">
                            <span class="fs-10 mr-1">2 hours ago</span>
                            <i class="mdi mdi-bookmark-outline mr-3"></i>
                            <span class="fs-10 mr-1">126</span>
                            <i class="mdi mdi-comment-outline"></i>
                        </p>
                    </div>
                    <div class="carousel-image">
                        <img src="https://images.unsplash.com/photo-1566355523149-bc40be1ed37a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="" />
                    </div>
                </div>
            </div>
            @endforelse

        </div>
    </div>

    <div class="col-lg-4">
        <div class="row">
            <div class="col-sm-6">

                @forelse ($slider_news as $sn)
                <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center pb-2">

                        <span class="fs-12 text-muted">{{$sn->users->name}}</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                        The Most And Least Visited Countries In The World
                    </p>
                </div>
                @empty
                <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center pb-2">

                        <span class="fs-12 text-muted">Henry Itondo</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                        The Most And Least Visited Countries In The World
                    </p>
                </div>
                @endforelse
            </div>
            <div class="col-sm-6">
                <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center pb-2">

                        <span class="fs-12 text-muted">Oka Tomoaki</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                        The Best Places to Travel in month August
                    </p>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-sm-6">
                <div class="pt-4 pb-4 border-bottom">
                    <div class="d-flex align-items-center pb-2">

                        <span class="fs-12 text-muted">Joana Leite</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                        Focus On Fun And Challenging Lifetime Activities
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pt-3 pb-4 border-bottom">
                    <div class="d-flex align-items-center pb-2">

                        <span class="fs-12 text-muted">Rita Leite</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                        Bread Is The Most Widely Consumed Food In The World
                    </p>
                </div>
            </div>
        </div> -->


    </div>
</div>
