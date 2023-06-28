
<div class="row g-3">
    <div class="col-lg-3 col-sm-4 py-lg-4">
        <div class="card h-auto mb-3">
            <img src="{{ Auth::user()->avatar_url != null ? Auth::user()->avatar_url : asset('assets/img/placeholder.png') }}" alt="" class="user-image">

            <div class="position-absolute w-100 py-2" style="bottom: 0; height: 40px; background: rgba(0, 0, 0, 0.5); border-bottom-left-radius: 1.3rem; border-bottom-right-radius: 1.3rem;">
                <h5 class="px-2 text-center text-white fw-normal">{{ Auth::user()->prenom . ' ' . Auth::user()->name }}</h5>
            </div>
        </div>

        <div class="list-group">
            <a href="{{ route('account.home') }}" class="list-group-item list-group-item-action"><i class="bi bi-person me-2"></i>Mon profil</a>
            <a href="{{ route('account.entity', ['entity' => 'order']) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <span><i class="bi bi-telephone-forward me-2"></i>Mes commandes</span>
@if ($count_orders > 0)
                <span class="badge badge-primary bg-primary badge-pill">{{ $count_orders }}</span>
@endif
            </a>
        </div>
    </div>

    <div class="col-lg-9 col-sm-8">
        <h3 class="mb-4 text-md-start text-center">Mes réservations</h3>

        <div class="table-responsive p-4 pb-2">
            <table ids="dataList" class="table">
                <thead class="border-bottom border-default">
                    <tr>
                        <th class="bdwT-0 fw-bold">#</th>
                        <th class="bdwT-0 fw-bold">Date/heure réservée</th>
                        <th class="bdwT-0 fw-bold">Nombre de personnes</th>
                        <th class="bdwT-0 fw-bold"></th>
                    </tr>
                </thead>

                <tbody>
@forelse ($reservations as $reservation)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>
                            {{ \Carbon\Carbon::parse($reservation->date)->translatedFormat('D d M Y à H\Hi\'') }}
                        </td>
                        <td>{{ $reservation->nombre }}</td>
                        <td>
                            <a role="button" class="btn bg-transparent p-0 fs-4 text-danger" title="Supprimer" data-bs-toggle="tooltip" onclick="event.preventDefault(); deleteData({{ $reservation->id }}, '../reservation');"><i class="bi bi-trash"></i></a><br>
                        </td>
                    </tr>
@empty
@endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
