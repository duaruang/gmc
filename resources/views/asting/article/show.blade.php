@extends('layout.asting')

@section('content')
<!--Page Header Start-->
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <h2><?= ucfirst(strtolower($article->title))?></h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><span>/</span></li>
                <li><?= ucfirst(strtolower($article->title))?></li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--News Details Start-->
<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <div class="news-details__img">
                        <img src="{{ $article->image_url }}" alt="">
                        <div class="news-details__date-box text-success">
                            <p>{{ date('d',strtotime($article->published_at)) }} <br>
                                {{ date('M',strtotime($article->published_at)) }}</p>
                        </div>
                    </div>
                    <div class="news-details__content">
                        <h3 class="news-details__title"><?= ucfirst(strtolower($article->title))?></h3>
                        <p class="news-details__text-one">
                            {!! $article->content !!}
                        </p>
                    </div>
                    <div class="news-details__bottom">
                        <p class="news-details__tags">
                            <span>Sumber:</span>
                            <a href="#">{{ $article->source_url }}</a>
                        </p>
                        <div class="news-details__social-list">
                            <a target="_blank" href="http://twitter.com/share?text={{ $article->title }}&url={{ route('article.show',$article->slug) }}&hashtags=gmc,globalmoeslimcharity"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?quote={{ $article->title }}&u={{ route('article.show',$article->slug) }}" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                            <a target="_blank" href="https://wa.me/send?text={{ $article->title }} %0alink : {{ route('article.show',$article->slug) }}" data-action="share/whatsapp/share" class="bg-success"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Artikel Terbaru</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach ($news as $new)
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{ $new->image_url }}" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        {{-- <a href="#" class="sidebar__post-content_meta"><i class="far fa-comments"></i>2 Comments</a> --}}
                                        <a href="{{ route('article.show',$new->slug) }}"><?= ucfirst(strtolower($new->title))?></a>
                                        
                                    </h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--News Details End-->
@endsection
