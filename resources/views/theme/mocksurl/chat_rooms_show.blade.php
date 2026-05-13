@extends('theme.mocksurl.website2')

<style>
    #messages::-webkit-scrollbar {
    width: 6px;
}
#messages::-webkit-scrollbar-thumb {
    background-color: #cccccc;
    border-radius: 4px;
}
textarea.form-control {
    resize: none;
}
</style>
@section('content2')


<section class="payment-section">
    <div class="dash-content">
    
        <div class="dash-content dash-notification-content">
            <div class="notification-section">
                <!--<div class="notification-heading">-->
                        <h1 class="mb-4 text-center">{{ $chatRoom->name }}</h1>
                <!--    <h5>Chat Rooms</h5>-->
                <!--</div>-->
                
                <div class="message-section">
                    <div class="no-message">
                        <!--<p>No Message</p>-->
                        <div class="container">

    
                        <div id="messages" class="mb-4 px-2 py-3" style="max-height: 400px; overflow-y: auto;">
                            @foreach($chatRoom->messages as $msg)
                                @if($msg->user_id == auth()->id())
                                    <!-- Your message -->
                                    <div class="d-flex justify-content-end mb-2">
                                        <div class="bg-primary text-white p-1 ">
                                            <small>{{ $msg->message }}</small><br>
                                            <small class="text-light">{{ $msg->user->name }}</small>
                                             <small class="text-light">{{ $msg->created_at }}</small>
                                        </div>
                                    </div>
                                @else
                                    <!-- Other user's message -->
                                    <div class="d-flex justify-content-start mb-2">
                                        <div class="bg-light text-dark p-2 ">
                                            <small>{{ $msg->message }}</small><br>
                                            <small class="text-muted">{{ $msg->user->name }}</small>
                                            <small class="text-muted">{{ $msg->created_at }}</small>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        
                        <form id="chat-form" action="{{ route('chat.rooms.message', $chatRoom->id) }}" method="POST" class="d-flex gap-2">
                            @csrf
                            <textarea name="message" class="form-control" style="border-radius:0px" placeholder="Type your message..." rows="1" required></textarea>
                            <button type="submit" class="theme-btn">Send</button>
                        </form>



                </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div> <!-- End dash-content -->
</section>




@endsection


@section('js-script')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    const chatRoomId = {{ $chatRoom->id }};
    const userId = {{ auth()->id() }};
</script>
<script>
    $(document).ready(function () {
        $('#chat-form').off('submit').on('submit', function (e) {
            e.preventDefault(); // Stop page refresh

            let form = $(this);
            let url = form.attr('action');
            let messageBox = form.find('textarea[name="message"]');
            let messageText = messageBox.val();

            if (messageText.trim() === '') return;

            $.ajax({
                type: 'POST',
                url: url,
                data: form.serialize(),
                success: function (response) {
                    // Get current date and time
                    let now = new Date();
                    let time = now.toLocaleTimeString();
                    let date = now.toLocaleDateString();

                    // Append message to #messages
                    $('#messages').append(`
                        <div class="d-flex justify-content-end mb-2">
                            <div class="bg-primary text-white p-2 rounded">
                                <small>${messageText}</small><br>
                                <small class="text-light">${response.data.user.name}</small><br>
                                <small class="text-light">${date} ${time}</small>
                            </div>
                        </div>
                    `);

                    // Clear textarea
                    messageBox.val('');

                    // Scroll to bottom
                    $('#messages').scrollTop($('#messages')[0].scrollHeight);
                },
                error: function () {
                    alert('Message send failed');
                }
            });
        });
    });
    
    
    
    
     // Polling control variable
        let shouldPoll = true;

        // Check if user is at bottom (tolerance 10px)
        function isUserAtBottom() {
            const messagesDiv = $('#messages')[0];
            return messagesDiv.scrollTop + messagesDiv.clientHeight >= messagesDiv.scrollHeight - 10;
        }

        // On scroll, update polling flag
        $('#messages').on('scroll', function () {
            shouldPoll = isUserAtBottom();
            console.log('shouldPoll',shouldPoll)
        });
    
    
    
    function fetchMessages() {
        
        if (!shouldPoll) {
            console.log('Polling skipped (user reading old messages)');
            return;
        }
        
        $.ajax({
            url: `/chat-rooms/${chatRoomId}/messages`, // chatRoomId variable dynamically set
            method: 'GET',
            success: function (response) {
                $('#messages').html(''); // Clear previous messages
                response.data.forEach(msg => {
                    let alignment = msg.user_id === userId ? 'end' : 'start'; // userId from blade
                    let bg = msg.user_id === userId ? 'bg-primary text-white' : 'bg-light text-dark';
    
                    $('#messages').append(`
                        <div class="d-flex justify-content-${alignment} mb-2">
                            <div class="${bg} p-2 rounded">
                                <small>${msg.message}</small><br>
                                <small>${msg.user.name}</small><br>
                                <small>${new Date(msg.created_at).toLocaleString()}</small>
                            </div>
                        </div>
                    `);
                });
    
                $('#messages').scrollTop($('#messages')[0].scrollHeight);
            }
        });
    }

// Run every 3 seconds
setInterval(fetchMessages, 3000);

// Initial call
fetchMessages();

</script>



@endsection