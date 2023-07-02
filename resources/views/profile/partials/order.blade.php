
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
            <a href="{{ route('account.entity', ['entity' => 'reservation']) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <span><i class="bi bi-telephone-forward me-2"></i>Mes réservations</span>
@if ($count_reservations > 0)
                <span class="badge badge-primary bg-primary badge-pill">{{ $count_reservations }}</span>
@endif
            </a>
        </div>
    </div>

    <div class="col-lg-9 col-sm-8">
        <h3 class="mb-4 text-md-start text-center">Mes commandes</h3>

        <div class="table-responsive p-4 pb-2">
            <table ids="dataList" class="table">
                <thead class="border-bottom border-default">
@if (count($orders) > 0)
                    <tr>
                        <th class="bdwT-0 fw-bold">Nom</th>
                        <th class="bdwT-0 fw-bold">Quantite</th>
                        <th class="bdwT-0 fw-bold">Prix unitaire</th>
                        <th class="bdwT-0 fw-bold">Prix total</th>
                        <th class="bdwT-0 fw-bold">Client Servi</th>
                        <th class="bdwT-0 fw-bold"></th>
                    </tr>
@endif
                </thead>

                <tbody>
@forelse ($orders as $order)
                    <tr>
                        <td>{{ $order->entity->nom }}</td>
                        <td>{{ $order->quantite }}</td>
                        <td>{{ $order->entity->prix . ' ' . $order->entity->monaie }}</td>
                        <td>{{ $order->montant . ' ' . $order->monaie }}</td>
                        <td>
                            <i class="bi bi-{{ $order->customer_served == 1 ? 'check-circle' : 'x-circle' }} fs-4 text-{{ $order->customer_served == 1 ? 'success' : 'danger' }}"></i>
                        </td>
                        <td class="text-end">
                            <a role="button" class="btn bg-transparent p-0 fs-4 text-dark" title="Supprimer" data-bs-toggle="tooltip" onclick="event.preventDefault(); deleteData({{ $order->id }}, '../reservation');"><i class="bi bi-trash"></i></a><br>
                        </td>
                    </tr>
@empty
                    <tr>
                        <td colspan="4" class="text-muted fs-5"><i class="bi bi-info-circle me-2 align-middle fs-4"></i>Il n'y aucune commande</td>
                    </tr>
@endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
