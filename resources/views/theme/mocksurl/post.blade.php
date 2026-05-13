@extends('theme.mocksurl.website2')


<style>
    #suggestionsList {
    max-height: 200px;
    overflow-y: auto;
    background: white;
    border: 1px solid #ccc;
    border-top: none;
    border-radius: 0 0 4px 4px;
}

.like-btn:focus {
  outline: none;a
}

.fa-heart{
    font-size:28px;
    color:#FFF;
}

.heart-icon.liked {
    filter: brightness(0) saturate(100%) invert(34%) sepia(97%) saturate(3630%) hue-rotate(345deg) brightness(96%) contrast(104%);
}
</style>

@section('content2')


<div class="dash-content">
    <div class="dash-ad-section">
        <div class="dash-ad-wrap">
            <h6>Ads</h6>
            <div class="dash-stop">
                <div class="stoper"></div>
                <p>Place Your Ads Here</p>
            </div>
            <h5>Lorem : <span>Lorem Ipsum</span></h5>
        </div>
        <div class="dash-ad-img">
            <img src="{{ asset('public/theme/mocksurl/images/ad-img.png') }}" alt="">
        </div>
    </div>

    <div class="post-add-section">
        <div class="post-add-wrap">
            <a href="#"><img src="{{ asset('public/theme/mocksurl/images/post-user.png') }}" alt=""></a>
            <form action="">
                <input type="text" placeholder="What’s In Your Mind">
            </form>
            <a href="#"><img src="{{ asset('public/theme/mocksurl/images/post-plus.png') }}  " alt=""></a>
        </div>
        <div class="post-add-btn-wrap">
            <div class="post-add-btn-img">
                <!--<a href="#"><img src="{{ asset('public/theme/mocksurl/images/target.png') }} " alt=""></a>-->
                <!--<a href="#"><img src="{{ asset('public/theme/mocksurl/images/gallery.png') }} " alt=""></a>-->
                <!--<a href="#"><img src="{{ asset('public/theme/mocksurl/images/gif.png') }}   " alt=""></a>-->
            </div>
            <div class="post-add-btn">
                <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="theme-btn">Add Post</a>
            </div>

            
            
        </div>

            <!--MODAL-->
            <div class="post-modal-section">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
            
                            <!-- Start Form -->
                            <form id="postForm" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="post-modal-header">
                                    <div class="post-user-header position-relative">
                                        <a href="#">
                                            <img src="{{ asset('public/theme/mocksurl/images/post-user.png') }}" alt="User Profile Image">
                                        </a>
            
                                        <!-- Post Text Input -->
                                        <input id="postInput"
                                            type="text"
                                            name="body"
                                            class=""
                                            placeholder="What’s On Your Mind? (Use #TeamName for tags)"
                                            autocomplete="off"
                                            required
                                        >
                                        
                                        <ul id="suggestionsList" class="list-group" style="position: absolute; z-index: 9999; display: none;"></ul>

                                    </div>
            
                                    <!-- Close Button -->
                                    
                                    <div class="post-close" data-bs-dismiss="modal" aria-label="Close">
                                        <img src="{{ asset('public/theme/mocksurl/images/close.png') }}" alt="">
                                    </div>
                                    <div class="post-close">
                                        
                                        <!--<button type="button" class="post-close btn-close" data-bs-dismiss="modal" aria-label="Close"><img src-"{{ asset('public/theme/mocksurl/images/close.png') }}"/></button>-->
                                    </div>
                                </div>
            
            
                                 <div class="preview-container d-flex justify-content-center" style="margin: 10px 0;">
                                    <img id="imagePreview" src="#" alt="Image Preview" style="display:none; max-width: 100%; max-height: 300px; border-radius: 10px;" />
                                </div>
                                
                                <!-- Image Upload + Post Button -->
                                <div class="post-add-btn-wrap d-flex align-items-center justify-content-between mt-3">
                                    <div class="post-add-btn-img">
                                        <label for="imageUpload" style="cursor: pointer;" title="Upload Image">
                                            <img src="{{ asset('public/theme/mocksurl/images/gallery.png') }}" alt="Upload Image Icon">
                                        </label>
                                        <input
                                            type="file"
                                            name="image"
                                            id="imageUpload"
                                            style="display: none;"
                                            accept="image/*"
                                        >
                                    </div>
                                    
                                    
                                    
            
                                    <div class="post-add-btn">
                                        <button type="submit" class="theme-btn">Post</button>
                                    </div>
                                </div>
                                
                                
                               
                            </form>
                            <!-- End Form -->
            
                        </div>
                    </div>
                </div>
            </div>

            <!--MODAL-->

    </div>

    <div class="post-tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest-tab-pane" type="button" role="tab" aria-controls="latest-tab-pane" aria-selected="true">Latest</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular-tab-pane" type="button" role="tab" aria-controls="popular-tab-pane" aria-selected="false">Popular</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <!-- Latest Tab -->
            <div class="tab-pane fade show active" id="latest-tab-pane" role="tabpanel" aria-labelledby="latest-tab" tabindex="0">
                <div class="watch-wrap">
                    <a href="#">Following</a>
                    <a href="#">Watchlist</a>
                    <a href="#">
                        Suggested
                        <div class="watch-wrap-img">
                            <img src="images/info.png" alt="">
                        </div>
                    </a>
                </div>


                <div class="post-section">
                    
                @foreach ($posts as $post)
                    <div class="post-boxes">
                        <div class="post-box">
                            <div class="post-user">
                                <div class="profile-txt">
                                    <a href="#">
                                        <h6>H</h6>
                                        <h5>{{ $post->user ? $post->user->name : 'Unknown User' }}</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="post-img">
                                <a href="#"><img src="https://sportswise.devhub.digtalsdesigns.com/storage/app/public/{{ $post->image }}" alt=""></a>
                            </div>
                            <div class="post-react">
                                 <a href="#" class="like-btn" data-post-id="{{ $post->id }}">
                                    <i id="heart-{{ $post->id }}"
                                       class="fa-heart {{ $post->isLikedByUser ? 'fa-solid' : 'fa-regular' }}"
                                       style="{{ $post->isLikedByUser ? 'color: red;' : '' }}"></i>
                                </a>
                                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/comment.png') }}  " alt=""></a>
                                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/share.png') }}  " alt=""></a>
                            </div>
                            <div class="post-likes">
                                <!--<a href="#" class="like-btn" data-post-id="{{ $post->id }}">-->
                                <!--    <i id="heart-{{ $post->id }}"-->
                                <!--       class="fa-heart {{ $post->isLikedByUser ? 'fa-solid' : 'fa-regular' }}"-->
                                <!--       style="{{ $post->isLikedByUser ? 'color: red;' : '' }}"></i>-->
                                <!--</a>-->
                                <span id="like-count-{{ $post->id }}">{{ $post->likes_count }} likes</span>


                            </div>
                            <!--<div class="post-caption">-->
                            <!--    <p><b>{{ $post->user ? $post->user->name : 'Unknown User' }}</b> {{ $post->body }}</p>-->
                            <!--     @foreach ($post->teams as $team)-->
                            <!--        <a href="{{ route('team.posts', $team->slug) }}" class="hashtag">#{{ $team->name }}</a>-->
                            <!--    @endforeach-->
                            <!--</div>-->
                            
                            <div class="post-caption">
                              <p>
                                <b>{{ $post->user ? $post->user->name : 'Unknown User' }}</b>
                                {!! preg_replace_callback('/#([\w\-]+)/', function ($matches) use ($post) {
                                    $slug = strtolower(str_replace(' ', '-', $matches[1]));
                                    // Dekh ye slug teams mein hai ya nahi
                                    $team = $post->teams->firstWhere('slug', $slug);
                                    if ($team) {
                                        return '<a href="' . route('team.posts', $team->slug) . '" class="hashtag">#' . $team->name . '</a>';
                                    } else {
                                        return $matches[0]; // agar slug nahi mila toh plain hashtag hi rehne de
                                    }
                                }, e($post->body)) !!}
                              </p>
                            </div>

                            
                            <div class="post-comment">
                                <div class="post-comment-img"></div>
                                <input type="text" placeholder="Add a comment...">
                            </div>
                        </div>
                    </div>
                @endforeach
                    
                    <div class="view-more-btn">
                        <a href="#" class="theme-btn">View More</a>
                    </div>
                </div>
                
                
            </div>

            <!-- Popular Tab -->
            <div class="tab-pane fade" id="popular-tab-pane" role="tabpanel" aria-labelledby="popular-tab" tabindex="0">
                <div class="watch-wrap">
                    <a href="#">Following</a>
                    <a href="#">Watchlist</a>
                    <a href="#">
                        Suggested
                        <div class="watch-wrap-img">
                            <img src="images/info.png" alt="">
                        </div>
                    </a>
                </div>

                <div class="post-section">
                    <!--<div class="post-boxes">-->
                    <!--    <div class="post-box">-->
                    <!--        <div class="post-user">-->
                    <!--            <div class="profile-txt">-->
                    <!--                <a href="#">-->
                    <!--                    <h6>H</h6>-->
                    <!--                    <h5>user_name</h5>-->
                    <!--                </a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="post-img">-->
                    <!--            <a href="#"><img src="{{ asset('public/theme/mocksurl/images/post1.png') }}" alt=""></a>-->
                    <!--        </div>-->
                    <!--        <div class="post-react">-->
                    <!--            <a href="#"><img src="{{ asset('public/theme/mocksurl/images/heart.png') }}" alt=""></a>-->
                    <!--            <a href="#"><img src="{{ asset('public/theme/mocksurl/images/comment.png') }}" alt=""></a>-->
                    <!--            <a href="#"><img src="{{ asset('public/theme/mocksurl/images/share.png') }}" alt=""></a>-->
                    <!--        </div>-->
                    <!--        <div class="post-likes">-->
                    <!--            <span>1,234 likes</span>-->
                    <!--        </div>-->
                    <!--        <div class="post-caption">-->
                    <!--            <p><b>user_name</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor numbas sator... more</p>-->
                    <!--        </div>-->
                    <!--        <div class="post-comment">-->
                    <!--            <div class="post-comment-img"></div>-->
                    <!--            <input type="text" placeholder="Add a comment...">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="view-more-btn">
                        <a href="#" class="theme-btn">View More</a>
                    </div>
                </div>
            </div>
        </div> <!-- End tab-content -->
    </div> <!-- End post-tabs -->
</div> <!-- End dash-content -->




@endsection



 @section('js-script')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const postForm = document.getElementById("postForm");
    const imageInput = document.getElementById("imageUpload");

    postForm.addEventListener("submit", function (e) {
        if (!imageInput.files.length) {
            e.preventDefault();
            alert("Please upload an image before posting.");
        }
    });
});
</script>



<script>
$(document).ready(function () {
    let $input = $('#postInput');
    let $suggestions = $('#suggestionsList');

    $input.on('keyup', function () {
        let text = $(this).val();
        let hashIndex = text.lastIndexOf('#');

        if (hashIndex !== -1) {
            let query = text.slice(hashIndex + 1);

            if (query.length > 0) {
                $.ajax({
                    url: '/team-suggestions?q=' + query,
                    method: 'GET',
                    success: function (data) {
                        $suggestions.empty();
                        if (data.length > 0) {
                            data.forEach(function (team) {
                                $suggestions.append('<li class="list-group-item suggestion-item" style="cursor: pointer;">' + team.name + '</li>');
                            });
                            $suggestions.css({
                                top: '100%',
                                left: '0',
                                width: '100%'
                            }).show();
                        } else {
                            $suggestions.hide();
                        }
                    },
                    error: function () {
                        $suggestions.hide();
                    }
                });
            } else {
                $suggestions.hide();
            }
        } else {
            $suggestions.hide();
        }
    });

    $(document).on('click', '.suggestion-item', function () {
        let selected = $(this).text();
        let currentText = $input.val();
        let hashIndex = currentText.lastIndexOf('#');
        let newText = currentText.substring(0, hashIndex + 1) + selected + ' ';
        $input.val(newText);
        $suggestions.hide();
    });

    $(document).on('click', function (e) {
        if (!$(e.target).closest('#suggestionsList, #postInput').length) {
            $suggestions.hide();
        }
    });
});



document.getElementById("imageUpload").addEventListener("change", function (event) {
    const file = event.target.files[0];
    const preview = document.getElementById("imagePreview");

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = "block";
        };

        reader.readAsDataURL(file);
    } else {
        preview.src = "#";
        preview.style.display = "none";
    }
});




</script>




<script>
$(document).ready(function() {
    $('.like-btn').click(function(e) {
        e.preventDefault();

        var postId = $(this).data('post-id');

        $.ajax({
            url: '/posts/' + postId + '/like',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                if (data.success) {
                    var heartIcon = $('#heart-' + postId);

                    if (data.liked) {
                        heartIcon.removeClass('fa-regular').addClass('fa-solid').css('color', 'red');
                    } else {
                        heartIcon.removeClass('fa-solid').addClass('fa-regular').css('color', '');
                    }

                    $('#like-count-' + postId).text(data.likes_count + ' likes');
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });
});
</script>



@endsection
