@extends('member.layouts.master')
@section('content')
<div class="block_panel mb60">
    <div class="container">
        <div class="head_panel fixf mb20">
            <h3>
                <a>Bài Viết</a>
            </h3>
        </div>
        <div class="body">
            <div class="row">
                <div class="group_new1">
                    @foreach($blogs as $blog)
                        <div class="wrapper_new1 plr10 mb20">
                            <div class="item_new">
                                <div class="image">
                                    <a href="{{ route('blog', $blog->blog_id) }}" class="p16x9"><img src="{{ $blog->image }}" alt=""></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{{ route('blog', $blog->blog_id) }}">{{ $blog->title }}</a>
                                    </h4>
                                    <p class="des">{{ $blog->description }}</p>
                                </div>
                            </div>
                        </div>	
                    @endforeach			
                </div>
            </div>
        </div>
    </div>
</div>
@endsection