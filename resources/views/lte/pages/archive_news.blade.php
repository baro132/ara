@extends(getCurrentTemplate() . '.layouts.default')
@section('meta_title')@lang('seo.ARCHIVE_NEWS_PAGE_TITLE')@stop
@section('meta_desc')@lang('seo.ARCHIVE_NEWS_PAGE_DESC')@stop
@section('meta_link'){{ Request::url() }}@stop
@section('meta_image'){{ URL::asset('public/images/pages/images') . '/archive_news.png' }}@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="login-panel panel panel-default">
            <div class="box box-success table-heading-class">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('headings.CRYPTO_ARCHIVE_NEWS')</h3>
                </div>
            </div>
            <div class="panel-body form-section">
              <ul>
                @foreach($archive_news as $date => $news)
                    <li style="float: left; width: 150px;">
                        <a href=" {{ makeUrl('archive-news') }}/{{ $date }}">{{ $date }}</a>
                    </li>
                @endforeach
              </ul>
            </div>
        </div>
    </div>
</div>
@stop
