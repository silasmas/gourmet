
<div class="row g-3">
    <div class="col-lg-3 col-sm-4 py-lg-4">
        <div class="card h-auto mb-3">
            <img src="{{ Auth::user()->avatar_url != null ? Auth::user()->avatar_url : asset('assets/img/placeholder.png') }}" alt="" class="user-image">

            <div class="position-absolute w-100 py-2" style="bottom: 0; height: 40px; background: rgba(0, 0, 0, 0.5); border-bottom-left-radius: 1.3rem; border-bottom-right-radius: 1.3rem;">
                <h5 class="px-2 text-center text-white fw-normal">{{ Auth::user()->prenom . ' ' . Auth::user()->name }}</h5>
            </div>
        </div>

        <div class="list-group">
            <a href="{{ route('account.home') }}" class="list-group-item list-group-item-action"><i class="bi bi-person me-3"></i>Mon profil</a>
            <a href="{{ route('account.entity', ['entity' => 'order']) }}" class="list-group-item list-group-item-action"><i class="bi bi-cart me-3"></i>Mes commandes</a>
        </div>
    </div>

    <div class="col-lg-9 col-sm-8">
        <h3 class="mb-4">Mes réservations</h3>

    </div>
</div>
