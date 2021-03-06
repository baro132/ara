@extends(getCurrentTemplate() . '.layouts.default')
@section('meta_title')@lang('seo.ARCHIVE_NEWS_SINGLE_PAGE_TITLE')@stop
@section('meta_desc')@lang('seo.ARCHIVE_NEWS_SINGLE_PAGE_DESC')@stop
@section('meta_link'){{ Request::url() }}@stop
@section('meta_image'){{ URL::asset('public/images/pages/images') . '/archive_news_date.png' }}@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h1>@lang('headings.CRYPTO_ARCHIVE_NEWS_DATE'): <strong>{{ $news_date }}</strong></h1>
            </div>
            <div class="panel-body form-section">
                <ul>
                    @foreach($archive_news as $date => $news)
                        <li><a href="{{URL::to('/crypto-news')}}/{{$news->id}}/{{$news->alias}}">{{ $news->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@stop
