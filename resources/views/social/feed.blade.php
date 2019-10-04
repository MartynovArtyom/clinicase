@extends('social.index')

@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}"/>
@endpush

@section('content')
<div class="container px-lg-0 mt-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-3 mb-lg-0 order-1 mb-3 order-lg-0">
            <p class="color-text-gray mb-0 mt-2 mb-1">MENU</p>

            <ul class="list-group py-0">
                <a href="#" class="list-group-item py-2 px-2 color-text-gray left-menu-active">
                    <i class="fa fa-home color-text-gray size-ico-left-menu"></i>
                    Accueil
                </a>
                <a href="#" class="list-group-item py-2 px-2 color-text-gray">
                    <i class="fa fa-plus color-text-gray size-ico-left-menu"></i>
                    Ajouter un cas
                </a>
                <a href="#" class="list-group-item py-2 px-2 color-text-gray">
                    <i class="fa fa-exchange color-text-gray size-ico-left-menu"></i>
                    Echanger
                </a>
                <a href="#" class="list-group-item py-2 px-2 color-text-gray">
                    <i class="fa fa-star color-text-gray size-ico-left-menu"></i>
                    Mes favoris
                </a>
                <a href="#" class="list-group-item py-2 px-2 color-text-gray">
                    <i class="fa fa-book color-text-gray size-ico-left-menu"></i>
                    Recherche
                </a>
            </ul>
        </div>

        <div class="col-lg-6 px-lg-0 order-2 order-lg-1">
            <div class="form-add-small-post mb-3 d-none d-lg-block">
                <a href="#" class="d-block button-add-post text-center b-r-5 py-2 px-2 color-text-gray w-100">
                    <p class="m-0">Ajouter un cas</p>
                </a>
            </div>

            <div class="social-content-background b-r-5">
                <div class="social-content">
                    @forelse ($posts as $post)
                        <div class="post-content">
                            <div class="d-flex flex-wrap justify-content-between p-3">
                                <p class="text-size-1 color-text-darkb mb-0">{{ $post->title }}</p>
                                <p class="text-size-1 text-secondary mb-0">{{ $post->updated_at }}</p>
                            </div>

                            <div class="px-3 position-relative">
                                <div class="owl-carousel owl-theme position-initial">
                                    @foreach ($post->image as $key => $image)
                                        @if ($key == 0)
                                            <div class="item"><img src="{{ $image }}"/></div>
                                        @else
                                            <div class="item"><img src="{{ $image }}"/></div>
                                        @endif
                                    @endforeach
                                </div>

                                <div class="text-white position-absolute carousel-prev d-none d-sm-flex">
                                    <i class="fa fa-angle-left text-white pl-3"></i>
                                </div>
                                <div class="text-white position-absolute carousel-next d-none d-sm-flex">
                                    <i class="fa fa-angle-right text-white pr-3"></i>
                                </div>

                                <div class="text-white position-absolute count-img-slider">
                                    1/{{ count($post->image) }}
                                </div>
                            </div>

                            <div class="post-description post-desc-color px-3 pt-2 pb-3">
                                <p class="mb-0">{{ $post->description }}</p>
                            </div>

                            <div class="d-flex justify-content-between flex-wrap px-3">
                                <div class="d-flex flex-wrap mb-2">
                                    @if (isset($post->autor->image))
                                        <img class="rounded-circle post-autor-image mr-3" src="{{ 'images/uploads/avatars/' . $post->autor->image }}">
                                    @else
                                        <img class="rounded-circle post-autor-image mr-3" src="{{ 'images/photo.jpg' }}">
                                    @endif

                                    <div class="d-flex flex-column">
                                        <p class="post-desc-color mb-0">
                                            {{ $post->autor->first_name }} {{ $post->autor->last_name }}
                                            @if ($post->autor->status == 1)
                                                <i class="fa fa-check-circle post-desc-color post-autor-approved"></i>
                                            @else
                                                <i class="fa fa-check-circle post-desc-color"></i>
                                            @endif
                                        </p>
                                        <p class="post-desc-color mb-0">
                                            {{ $post->autor->specialty->name }}
                                        </p>
                                    </div>

                                </div>
                                <div class="d-flex align-self-center">
                                    <a href="#" class="px-2 color-text-gray">
                                        <i class="fa fa-heart-o"></i>
                                        {{ $post->favorites_posts_count->first()->toArray()['aggregate'] }}
                                    </a>
                                    <a href="#" class="px-2 color-text-gray">
                                        <i class="fa fa-comment-o"></i>
                                        {{ $post->comments_count->first()->toArray()['aggregate'] }}
                                    </a>

                                    <a href="#" class="px-2 color-text-gray">
                                        <i class="fa fa-reply"></i>
                                    </a>

                                </div>
                            </div>

                            <hr class="mb-0">
                        </div>
                    @empty
                        <div class="post-content"><p>Not posts</p></div>
                    @endforelse
                    {{--<div class="post-comment py-3">--}}
                        {{--<p class="px-3 mb-0 text-secondary">--}}
                            {{--COMMENTS ({{ $post->comments_count->first()->toArray()['aggregate'] }})--}}
                        {{--</p>--}}
                    {{--</div>--}}
                </div>

                <div class="w-100 text-center py-2 my-1">
                    <a href="#"
                       class="text-dark add-posts"
                       data-nextPage="{{ $posts->nextPageUrl() }}"
                       data-countPage="1"
                    >
                        <i class="fa fa-refresh d-inline"></i>
                        <p class="d-inline">Charger plus</p>
                    </a>
                </div>

            </div>
        </div>

        <div class="col-lg-3 order-0 mb-3 order-lg-2">
            <div class="b-r-5 backgr-white p-2 social-right-menu text-center">
                <img class="rounded-circle my-3" src="{{ 'images/uploads/avatars/'.Auth::user()->image }}"/>
                <h4 class="mb-0">
                    {{Auth::user()->first_name . ' ' . Auth::user()->last_name}}
                </h4>
                <p class="pb-2 mb-0 d-block w-75 mx-auto">
                    ndbjknbnd ndblksndfbk dmblkd
                </p>
                <a href="#" class="button-edit-profil p-2 b-r-5 mx-auto d-block w-75">
                    Editer le profil
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            var owl = $(".owl-carousel");
            owl.owlCarousel({
                items:1,
                // loop:true,
                margin:10,
                nav:false,
                dots:false,
                autoHeight:true
            });


            owl.on('changed.owl.carousel', function(event) {
                $(this).parent().find('.count-img-slider').text(event.item.index+1+'/'+event.item.count)
            });

            $(document).on('click', '.carousel-prev', function (e) {
                e.preventDefault();
                $(this).parent().find('.owl-carousel').trigger('prev.owl');
            });

            $(document).on('click', '.carousel-next', function (e) {
                e.preventDefault();
                $(this).parent().find('.owl-carousel').trigger('next.owl');
            });

            $(document).on('click', '.add-posts', function (e) {
                e.preventDefault();

                var $this = $(this),
                    nextPage = $this.data('nextpage');

                $.ajax({
                    type:'POST',
                    url: nextPage,
                    dataType: 'json',
                    data:{'_token': $('meta[name="csrf-token"]').attr('content')},
                    success: function(data)
                    {
                        $this.attr("");
                        data('nextpage', data.next_page_url);
                        console.log($this.data('nextpage'));
                    },
                    error: function(msg){
                        console.log("error");
                    }
                });

                // $.ajax({
                //     url : '?page=' + '1',
                //     dataType: 'json',
                // }).done(function (data) {
                //     console.log(data);
                //     // $('.posts').html(data);
                //
                // }).fail(function () {
                //     console.log("Error");
                // });


                // $(".owl-carousel").owlCarousel({
                //     items:1,
                //     loop:true,
                //     margin:10,
                //     nav:false,
                //     dots: false,
                //     autoHeight:true
                // });
            })
        });
    </script>
@endpush
