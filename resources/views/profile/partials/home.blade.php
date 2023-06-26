
<div class="block-choice py-5 bg-light">
    <div class="container py-4">
        <div class="row g-3">
            <div class="col-lg-4 col-sm-6">
                <div class="card h-auto">
                    <form method="POST">
                        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                        <label for="avatar" class="position-absolute btn rounded-circle" style="padding: 0.8rem 1rem; top: 1rem; right: 1rem;" title="Modifier la photo" data-bs-toggle="tooltip" data-bs-placement="top">
                            <span class="bi bi-image"></span>
                            <input type="file" name="avatar" id="avatar" class="d-none">
                        </label>
                    </form>
                    <img src="{{ Auth::user()->avatar_url != null ? Auth::user()->avatar_url : asset('assets/img/placeholder.png') }}" alt="" class="user-image img-thumbnail">
                </div>
            </div>

            <div class="col-lg-8 col-sm-6">
                <form method="POST" action="{{ route('account.home') }}"></form>
            </div>
        </div>
    </div>
</div>
