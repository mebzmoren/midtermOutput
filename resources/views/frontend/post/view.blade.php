@extends('layouts.app')

@section('title', 'View Post')

@section('content')
    <!-- Sub-header Section  -->
    <section class="bg-danger d-flex flex-column flex-md-row justify-content-between px-5">
        <div class="left-content py-2 d-flex flex-column flex-md-row mt-3 mt-md-0">
            @php
                $categories = App\Models\Category::where('navbar_status', '0')
                    ->where('status', '0')
                    ->get();
            @endphp
            @foreach ($categories as $cateitem)
                <div class="me-0 me-md-3 mb-3 mb-md-0 mb-mt-0">
                    <img class="category-nav-image" src="{{ asset("$cateitem->image") }}" alt="">
                    <a class="text-decoration-none text-white fw-bold" href="{{ url('category/' . $cateitem->name) }}">
                        {{ $cateitem->name }}</a>
                </div>
            @endforeach
        </div>
        <div class="right-content">
            <div class="breadcrumbs mt-3 mb-3 mb-md-0">
                <i class="fa-solid fa-house" style="color: white;"></i>
                <a class="text-decoration-none text-white ps-1" href="{{ url('home') }}">Home</a>
                <img width="15" height="15" src="https://img.icons8.com/ios-filled/15/FFFFFF/chevron-right.png"
                    alt="chevron-right" />
                <a class="text-decoration-none text-white ps-1" href="{{ url('categories') }}">Categories</a>
                <img width="15" height="15" src="https://img.icons8.com/ios-filled/15/FFFFFF/chevron-right.png"
                    alt="chevron-right" />
                <a class="text-decoration-none text-white ps-1"
                    href="{{ url('category/' . $cate_name) }}">{{ $cate_name }}</a>
                <img width="15" height="15" src="https://img.icons8.com/ios-filled/15/FFFFFF/chevron-right.png"
                    alt="chevron-right" />
                <a class="text-decoration-none text-white ps-1"
                    href="{{ url('category/' . $cate_name . '/' . $post_name) }}">Post</a>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row mt-5 flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-8">
                <div class="card shadow ">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img width="40" height="40"
                                    src="https://img.icons8.com/ios-filled/50/user-male-circle.png"
                                    alt="user-male-circle" />
                                <div class="ps-1">
                                    <p class="fs-6 m-0">{{ $post->user->name }}</p>
                                    <p class="m-0 text-secondary" style="font-size: 10px;">
                                        {{ $post->created_at->format('m-d-Y') }}</p>
                                </div>
                            </div>
                            <div>
                                <p class="fs-6 mt-2 text-secondary">
                                    {{ $post->category->name }}
                                </p>
                            </div>
                        </div>
                        <div>
                            <p style="font-size: 12px;" class="fw-bold mt-4 mb-2 ps-1">{{ $post->name }}
                            </p>
                        </div>
                        <div class="border border-1 border-secondary-subtle rounded-3 py-1 px-2" style="height: 180px;">
                            <p class="fs-6 card-text">
                                {{ $post->description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        @if (session('message'))
                            <h6 class="alert alert-secondary mb-3">{{ session('message') }}</h6>
                        @endif
                        <p>Leave a comment</p>
                        <form action="{{ url('comments') }}" method="POST">
                            @csrf
                            <input type="hidden" name="post_name" value="{{ $post->name }}">
                            <textarea name="comment_body" rows="3" class="form-control"></textarea>
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger mt-3 text-righ w-25">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                @forelse ($post->comments as $comment)
                    <div class="card text-bg-light mb-3 w-100 mt-3">
                        <div class="card-body">
                            <div>
                                <div class="d-flex">
                                    <img width="40" height="40"
                                        src="https://img.icons8.com/ios-filled/50/user-male-circle.png"
                                        alt="user-male-circle" />
                                    <div class="ps-1">
                                        <p class="fs-6 m-0">{{ $comment->user->name }}</p>
                                        <p class="m-0 text-secondary" style="font-size: 10px;">
                                            {{ $comment->created_at->format('m-d-Y') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-1 p-3 mt-3 bg-white rounded">
                                <p>{!! $comment->comment_body !!}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="card text-bg-light mb-3 w-100 mt-3">
                        <div class="card-body">
                            <p class="text-center mt-4">There are no comments yet...</p>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="col-12 col-lg-4">
                <div class="mx-auto d-block text-center">
                    <a href="">
                        <button class="w-50 btn btn-success">
                            Create a New Post
                        </button>
                    </a>
                </div>
                <div class="card text-bg-light mb-3 mt-5">
                    <div class="card-header">Latest Posts</div>
                    <div class="card-body">
                        @if (isset($latest_posts) && count($latest_posts) > 0)
                            @foreach ($latest_posts as $post_item)
                                <div class="border-2 border-secondary mb-3 border-bottom">
                                    <a href="{{ url('category/' . $post_item->category->name . '/' . $post_item->name) }}"
                                        class="text-decoration-none">
                                        <p class="text-dark fs-6">
                                            {{ strlen($post_item->description) > 100 ? substr($post_item->description, 0, 100) . '...' : $post_item->description }}
                                        </p>
                                        <h5 class="mt-3 fs-6 text-secondary"> {{ $post_item->created_at }}
                                        </h5>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 empty-output">
                                <p class="text-center fw-bold mt-5">There are no current confessions...</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '.deleteComment', function() {

                if (confirm('Are you sure you want to delete this comment?')) {
                    var thisClicked = $(this);
                    var comment_id = thisClicked.val();

                    $.ajax({
                        type: "POST",
                        url: "/delete-comment",
                        data: {
                            'comment_id': comment_id
                        },
                        success: function(res) {
                            if (res.status == 200) {
                                thisClicked.closest('.comment-container').remove();
                                alert(res.message);
                            } else {
                                alert(res.message);
                            }
                        }
                    });
                }
            });
        });
    </script>

@endsection
