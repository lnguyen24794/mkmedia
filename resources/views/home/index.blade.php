@extends('home.layouts.app')

@section('title', 'mkmedia.info Đơn Vị Mua Bán Chuyển Nhượng Group Uy Tín')
@section('description', 'Bạn đang có nhu cầu mua bán Group chất lượng? mkmedia.info - đơn vị mua bán chuyển nhượng Group uy tín tại Việt Nam sẽ giúp bạn làm điều đó.')
@section('css')

<style>
    .mybox{
        display: inline-block;
        width: 28%;
    }
    .popup-btn {
        padding: 7px 19px;
        border-radius: 2px;
        background-color: #2196F3;
        font-size: 20px;
        border: 1px solid #2196F3;
        display: block;
        min-height: 64px;
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
        margin: 10px;
        color: white
    }
    .myimg{
        width: 100px;
        height: 100px;
        border-radius: 6px;
    }
    .swal2-container .swal2-popup{
        min-width: 825px ;
    }
    @media only screen and (max-width: 600px) {
        .popup-btn {
            font-size: 13px;
            min-height: 32px;
        }
        .swal2-container .swal2-popup{
            min-width: 100% ;
        }
        .mybox{
            width: 100%;
        }
        .myimg{
            width: 80px;
            height: 80px;
        }
    }
</style>
@endsection
@section('content')
    {{-- Block hero --}}
    <div class="grid-hero" id="grid-hero">
        <div id="grid-hero-banner">
        </div>
    </div>

    {{-- Block call --}}
    <div class="grid-call">
        <div class="container">
            <div class="box-service-home branding">
                <div class="box-content row">
                    <div class="col-12 col-md-12 " style="text-align: center; padding-bottom:20px;">
                        <div class="video-container" style="position: relative; text-align: right">
                            <img style="width:100%" src="/images/mkmedia-bg-2.png"/>
                            <div class="click">
                             <div class="ring-circle"></div>
                             <div class="ring-circle-fill"></div>
                             <div class="ring-img-circle">
                               <a href="/mua-group-facebook" class="btn-img">
                                 <img src="/images/home/click.png" width="50">
                               </a>
                             </div>
                           </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Block service --}}
    <div class="grid-service servicee">
        <div class="container">
            <div class="box-call">
                <h3 class="title" data-cms="{{app()->getLocale()}}-index-24">Tại sao nên sở hữu một Group</h3>
                <div class="sapo" style="max-width:740px">
                    <p style="text-align: left" data-cms="{{app()->getLocale()}}-index-26">
                    </p>
                    <div class="btn-normal" style="margin-top: 10px;">
                        <a style="background: #4F4F4F; border-radius: 24px;" href="/@lang('channels')" title="Get to know us">
                            <span style="color: white !important" class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-30">Danh Sách Group</span>
                            <svg style="color: white !important" class="icon"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('home.includes.consultation')
@endsection

@section('js')

@endsection
