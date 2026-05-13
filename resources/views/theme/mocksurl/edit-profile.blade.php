@extends('theme.mocksurl.website2')

@section('content2')


<div class="dash-content">
    <div class="edit-profile-section">
        <div class="notification-heading">
            <h5>Profile</h5>
        </div>
        <div class="profile-user-wrap">
            <div class="profile-user">
                <div class="profile-img">
                    

                    @auth
                        @if(Auth::user()->is_premium == 1 && Auth::user()->premium_expires_at > now())
                            <div class="prem">
                                <img src="{{ asset('public/theme/mocksurl/images/premium.png') }}" alt="">
                            </div>
                        @elseif(Auth::user()->is_verified == 1)
                            <div class="prem">
                                <img src="{{ asset('public/theme/mocksurl/images/double-check.png') }}" alt="">
                            </div>
                        @else
                            <div class="prem">
                                {{-- No badge --}}
                            </div>
                        @endif
                    @endauth




                    @php
                        $profilePicture = Auth::user()->profile_picture;
                    @endphp
                    <img id="preview_img" src="{{ asset('storage/app/public/'. $profilePicture) }}" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover;" alt="">
                    <!--<img src="{{ asset('public/theme/mocksurl/images/other-user.png') }}  " alt="">-->
                </div>
                <div class="profile-wrap">
                    <div class="prem-flex">
                        <h5>{{Auth::user()->name}}</h5>
                        <div class="prem-score">
                            <h6>5</h6>
                        </div>
                    </div>
                    <h4>240 76%</h4>
                    <div class="follow-flex">
                        <a href="#" class="theme-btn">Follow</a>
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('public/theme/mocksurl/images/settings-dots.png') }}  " alt="">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('user.updateProfile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Profile Image Section -->
                <div class="add-img mb-3 ">
                    @php
                        $profilePicture = Auth::user()->profile_picture;
                    @endphp
            
                    <!-- Preview current or selected image -->
                    <!--<div class="mb-2">-->
                    <!--    <img id="preview_img" src="{{ $profilePicture ? asset('storage/' . $profilePicture) : asset('images/default-avatar.png') }}" alt="Profile Picture" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover;">-->
                    <!--</div>-->
            
                    <!-- Upload Button -->
                    <label for="img_input">
                        <img src="{{ asset('public/theme/mocksurl/images/add-gallery.png') }}" alt="" style="width: 20px;"> Add Photo
                    </label>
                    <input type="file" id="img_input" style="display: none;" accept="image/*">
                </div>
            
                <!-- Other profile fields -->
            
                <!--<button type="submit" class="btn btn-primary">Save Profile</button>-->
            </form>

        </div>
        <div class="bio-wrap">
            <div class="bio-flex">
                <div class="bio-wrap">
                    <h6>Bio</h6>
                    <h5 id="bio_display">{{ Auth::user()->bio ?? 'Tell the Sports Twists Community a little about yourself' }}</h5>
                </div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#editBioModal">Edit</a>
            </div>
            <!--<div class="bio-flex">-->
            <!--    <div class="bio-wrap bio-wrap-b">-->
            <!--        <h6>Name</h6>-->
            <!--        <h5>user_name</h5>-->
            <!--    </div>-->
            <!--    <a href="#">Edit</a>-->
            <!--</div>-->
            <div class="bio-flex">
                <div class="bio-wrap bio-wrap-b">
                    <h6>Username</h6>
                    <h5 id="username_display">{{ Auth::user()->name }}</h5>
                </div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#editUsernameModal">Edit</a>
            </div>

            <div class="bio-flex">
                <div class="bio-wrap">
                    <h6>Location</h6>
                    <h5 id="location_display">{{ Auth::user()->location ?? 'Add your location' }}</h5>
                </div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#editLocationModal">Edit</a>
            </div>


            <!--<div class="bio-flex">-->
            <!--    <div class="bio-wrap">-->
            <!--        <h6>Website</h6>-->
            <!--    </div>-->
            <!--    <a href="#">Edit</a>-->
            <!--</div>-->
            <!--<div class="bio-flex">-->
            <!--    <div class="bio-wrap">-->
            <!--        <h6>Website</h6>-->
            <!--    </div>-->
            <!--    <a href="#">Edit</a>-->
            <!--</div>-->

            <div class="setting-wrap setting-wrap-b mt-0">
                @php
                    $selectedTeams = json_decode(Auth::user()->favorite_teams ?? '[]');
                    $allTeams = ['MLB', 'NHL', 'NFL', 'NBA', 'MLS', 'EPL', 'La Liga'];
                @endphp
            
                <h4>Favourite Leagues</h4>
            
                <div class="setting-flex bio-flex">
                    @if($selectedTeams)
                        @foreach($selectedTeams as $team)
                            <h5>{{ $team }}</h5>
                        @endforeach
                    @endif
                    <a href="#" data-bs-toggle="modal" data-bs-target="#editTeamsModal">Edit</a>
                </div>
            
                <!-- Edit Anchor -->
            </div>

        </div>
    </div>
</div>



<!-- Modal for editing teams -->
<div class="modal fade" id="editTeamsModal" tabindex="-1" aria-labelledby="editTeamsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " style="display:flex;justify-content:center">
        <form action="{{ route('user.updateFavoriteTeams') }}" method="POST">
            @csrf
            <div class="modal-content p-3">
                <h5 class="mb-3">Update Your Favorite Leagues</h5>

                <div class="team-checkboxes" id="edit-team-checkboxes">
                    @foreach($allTeams as $index => $team)
                        <div class="form-check">
                            <input type="checkbox"
                                   class="form-check-input"
                                   id="edit_team_{{ $index }}"
                                   name="favorite_teams[]"
                                   value="{{ $team }}"
                                   onchange="limitCheckboxSelection(this, 4)"
                                   {{ in_array($team, $selectedTeams ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_team_{{ $index }}">{{ $team }}</label>
                        </div>
                    @endforeach
                </div>

                <div class="mt-3 text-end">
                    <button type="button" class="theme-btn" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="theme-btn">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Edit Username Modal -->
<div class="modal fade" id="editUsernameModal" tabindex="-1" aria-labelledby="editUsernameModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUsernameModalLabel">Edit Username</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" id="username_input" class="form-control" value="{{ Auth::user()->name }}">
      </div>
      <div class="modal-footer">
        <button type="button" class="theme-btn" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="theme-btn" onclick="saveUsername()" data-bs-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>

<!--Edit Bio Modal -->
<div class="modal fade" id="editBioModal" tabindex="-1" aria-labelledby="editBioModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Bio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <textarea class="form-control" id="bio_input" rows="4">{{ Auth::user()->bio }}</textarea>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="saveBio()" class="theme-btn" data-bs-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Location Modal -->
<div class="modal fade" id="editLocationModal" tabindex="-1" aria-labelledby="editLocationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editLocationModalLabel">Edit Location</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" id="location_input" class="form-control" value="{{ Auth::user()->location }}">
      </div>
      <div class="modal-footer">
        <button type="button" class="theme-btn" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="theme-btn" onclick="saveLocation()" data-bs-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>



@endsection




@section('js-script')
<script>
    function limitCheckboxSelection(checkbox, maxAllowed = 4) {
        const checkboxes = document.querySelectorAll('#edit-team-checkboxes input[type="checkbox"]');
        const checkedCount = Array.from(checkboxes).filter(cb => cb.checked).length;

        if (checkedCount > maxAllowed) {
            checkbox.checked = false;
            alert(`You can only select up to ${maxAllowed} teams.`);
        }
    }
</script>



<script>
    function previewProfileImage(event) {
        const reader = new FileReader();
        reader.onload = function(){
            document.getElementById('preview_img').src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<script>
function saveLocation() {
    const newLocation = document.getElementById('location_input').value.trim();

    if (!newLocation) return;

    fetch("{{ route('user.updateLocation') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ location: newLocation })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // Update display text
            document.getElementById('location_display').innerText = newLocation;

            // Close modal properly
            let modalElement = document.getElementById('editLocationModal');
            let modal = bootstrap.Modal.getInstance(modalElement);
            if (modal) modal.hide();

            // Remove leftover backdrop manually (important)
            document.body.classList.remove('modal-open');
            document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
        } else {
            alert('Failed to update location');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
</script>





<script>
document.getElementById('img_input').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (!file) return;

    // Preview image
    const reader = new FileReader();
    reader.onload = function(){
        document.getElementById('preview_img').src = reader.result;
    };
    reader.readAsDataURL(file);

    // Upload via AJAX
    const formData = new FormData();
    formData.append('profile_picture', file);

    fetch("{{ route('user.updateProfile') }}", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.status === 'success') {
            console.log('Image updated successfully');
        } else {
            alert('Image upload failed');
        }
    })
    .catch(error => {
        console.error('Upload error:', error);
    });
});
</script>



<script>
function saveUsername() {
    const newName = document.getElementById('username_input').value.trim();

    if (!newName) return;

    fetch("{{ route('user.updateUsername') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ name: newName })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            document.getElementById('username_display').innerText = newName;
            var modal = bootstrap.Modal.getInstance(document.getElementById('editUsernameModal'));
            modal.hide();
        } else {
            alert('Failed to update username');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
</script>



<script>
function saveBio() {
    const newBio = document.getElementById('bio_input').value.trim();

    if (!newBio) return;

    fetch("{{ route('user.updateBio') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ bio: newBio })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            document.getElementById('bio_display').innerText = newBio;

            // Close modal
            let modalElement = document.getElementById('editBioModal');
            let modal = bootstrap.Modal.getOrCreateInstance(modalElement);
            modal.hide();
        } else {
            alert('Failed to update bio');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}





</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection