@extends('home.layouts.eject')

@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox">
                <div class="ibox-content" style="margin-top: 0">
                    <div class="search-form">
                        <form action="index.html" method="get">
                            <div class="input-group">
                                <input type="text" placeholder="后台主题" name="search" class="form-control input-lg">
                                <div class="input-group-btn">
                                    <button class="btn btn-lg btn-primary" type="submit">
                                        搜索
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="search-result">
                        <h3><a href="search.blade.php#">[教程]wordpress主题后台设置框架Options Framework(中文版) </a></h3>
                        <a href="search.blade.php#" class="search-link">www.zi-han.net/wordpre... </a>
                        <p>
                            对于很多刚开始写wordpress主题的新手来说,想给主题加上一些设置选项,方便使用者灵活选择和定制,这时候后台框架就成了一个绕不过的话题,一般方法无外乎两种,一种是...
                        </p>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="search-result">
                        <h3><a href="search.blade.php#">WordPress后台主题插件:MP6 和 Bootstrap Admin | WordPress大学</a></h3>
                        <a href="search.blade.php#" class="search-link">www.wpdaxue.com/mp6-bo... ‎‎</a>
                        <p>
                            2014年4月29日 - 倡萌之前推荐过 WordPress后台主题插件:WP Admin Theme lime ,今天在推荐两款 MP6 和 Bootstrap Admin。 MP6 MP6 是WordPress核心团队开发的Word...
                        </p>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="text-center">
                        <div class="btn-group">
                            <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i>
                            </button>
                            <button class="btn btn-white">1</button>
                            <button class="btn btn-white  active">2</button>
                            <button class="btn btn-white">3</button>
                            <button class="btn btn-white">4</button>
                            <button class="btn btn-white">5</button>
                            <button class="btn btn-white">6</button>
                            <button class="btn btn-white">7</button>
                            <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection