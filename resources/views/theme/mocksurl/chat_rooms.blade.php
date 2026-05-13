@extends('theme.mocksurl.website2')
<style>
    .post-user-header input{
        width:78% !important;
    }
</style>
@section('content2')

<section class="payment-section">
<div class="dash-content">
   
    <div class="dash-content dash-notification-content">
        <div class="notification-section">
            
            @if(auth()->user()->is_premium)
                <div class="notification-heading">
                    <h1 class="text-center">Chat Rooms</h1>
                </div>
            @endif
            
            <div class="container">

                <!--@if(session('success'))-->
                <!--    <div class="alert alert-success">{{ session('success') }}</div>-->
                <!--@endif-->
                <!--@if(session('error'))-->
                <!--    <div class="alert alert-danger">{{ session('error') }}</div>-->
                <!--@endif-->

                @if(auth()->user()->is_premium)
                    <div class="post-add-btn mb-3">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#createChatRoomModal" class="theme-btn">+ Create Chat Room</a>
                    </div>
                


                    <!--<div class="modal fade" id="createChatRoomModal" tabindex="-1" aria-labelledby="createChatRoomLabel" aria-hidden="true">-->
                    <!--    <div class="modal-dialog modal-dialog-centered">-->
                    <!--        <div class="modal-content">-->
                                
                    <!--            <div class="post-modal-header d-flex justify-content-between align-items-center px-3 pt-3">-->
                    <!--                <h5 class="modal-title" id="createChatRoomLabel">Create Chat Room</h5>-->
                    <!--                <div class="post-close" data-bs-dismiss="modal" aria-label="Close">-->
                    <!--                    <img src="{{ asset('public/theme/mocksurl/images/close.png') }}" alt="Close">-->
                    <!--                </div>-->
                    <!--            </div>-->
                    
                    <!--            <div class="modal-body px-3">-->
                    <!--                <form method="POST" action="{{ route('chat.rooms.store') }}">-->
                    <!--                    @csrf-->
                    <!--                    <div class="mb-3">-->
                    <!--                        <input type="text" name="name" class="form-control" placeholder="Enter Room Name" required>-->
                    <!--                    </div>-->
                    <!--                    <div class="d-grid">-->
                    <!--                        <button type="submit" class="btn btn-primary">Create</button>-->
                    <!--                    </div>-->
                    <!--                </form>-->
                    <!--            </div>-->
                    
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="post-modal-section">
                        <div class="modal fade" id="createChatRoomModal" tabindex="-1" aria-labelledby="createChatRoomLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="post-modal-header">
                                        <div class="post-user-header">
                                            <a href="#">
                                                <img src="{{ asset('public/theme/mocksurl/images/post-user.png') }}  " alt="">
                                            </a>
                                             <form class="mb-0" method="POST" action="{{ route('chat.rooms.store') }}">
                                              @csrf
                                                <input type="text" name="name" placeholder="Chatroom Name">
                                            
                                        </div>
                                        <div class="post-close" data-bs-dismiss="modal" aria-label="Close">
                                            <img src="{{ asset('public/theme/mocksurl/images/close.png') }} " alt="">
                                        </div>
                                    </div>
                                    <div class="post-add-btn-wrap">
                                        <div class="post-add-btn-img">
                                            <!--<a href="#"><img src="{{ asset('public/theme/mocksurl/images/target.png') }}" alt=""></a>-->
                                            <!--<a href="#"><img src="{{ asset('public/theme/mocksurl/images/gallery.png') }}" alt=""></a>-->
                                            <!--<a href="#"><img src="{{ asset('public/theme/mocksurl/images/gif.png') }}" alt=""></a>-->
                                        </div>
                                        <div class="post-add-btn">
                                            <button type="submit" class="theme-btn">Create</button>
                                            <!--<a href="#" type="submit" class="theme-btn">Post</a>-->
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <hr>

                    <ul class="list-group mt-4 text-white">
                        @foreach($chatRooms as $room)
                            <li class="mb-3 d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="{{ route('chat.rooms.show', $room->id) }}" class="theme-btn d-block">
                                        <strong>{{ $room->name }}</strong>
                                    </a>
                                    <small>by {{ $room->user->name }}</small>
                                </div>
                                @if(auth()->id() === $room->user_id)
                                    <form action="{{ route('chat.rooms.destroy', $room->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this chat room?');" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                
                
                
                @else
                <h1 class="text-center">Chat Rooms Only For Premium Users</h1>
                
                @endif
                
            </div>
        </div>
    </div>

</div> <!-- End dash-content -->
</section>




@endsection




@section('js-script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-room-btn').forEach(button => {
            button.addEventListener('click', function () {
                const roomId = this.getAttribute('data-id');
                
                if (confirm('Are you sure you want to delete this chat room?')) {
                    fetch(`/chat-rooms/${roomId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.message) {
                            this.closest('li').remove(); // remove the room from the list
                        } else {
                            alert('Error deleting chat room.');
                        }
                    });
                }
            });
        });
    });
</script>

@endsection
