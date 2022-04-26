@extends('layout.asting')

@section('content')
<!--Page Header Start-->
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <h2>Artikel</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Artikel</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--News Page Start-->
<section class="news-page">
    <div class="container">
        <div class="row">
            <?php 
            function shorter($text, $chars_limit)
            {
                // Check if length is larger than the character limit
                if (strlen($text) > $chars_limit)
                {
                    // If so, cut the string at the character limit
                    $new_text = substr($text, 0, $chars_limit);
                    // Trim off white space
                    $new_text = trim($new_text);
                    // Add at end of text ...
                    return $new_text . "...";
                }
                // If not just return the text as is
                else
                {
                return $text;
                }
            }
            ?>
            @foreach ($articles as $article)
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <div class="news-one__img-box">
                            <img src="{{ $article->image_url }}" alt="" style='width:100%;height:300px'>
                            <!-- <a href=" route('article.show',$article->slug) "></a> -->
                        </div>
                        <div class="news-one__date-box">
                            <p>{{ date('d',strtotime($article->published_at)) }} <br>
                                {{ date('M',strtotime($article->published_at)) }}</p>
                        </div>
                    </div>
                    <div class="news-one__content">
                        <div class="news-one__title">
                            <h3><a href="{{ route('article.show',$article->slug) }}"><?= ucfirst(strtolower($article->title))?></a></h3>
                            <p><?= shorter(strip_tags($article->content),70) ?></p>
                        </div>
                        <a href="{{ route('article.show',$article->slug) }}" class="thm-btn news-one__btn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
            <nav class="pagination col-12">
                {{ $articles->links('vendor.pagination.custom') }}
            </nav>
        </div>
    </div>
</section>
@endsection
