
        <div class="row g-3">
            <div class="col-lg-4 col-sm-6 py-lg-4">
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
                <h3 class="mb-4">Informations personnelles</h3>

                <form method="POST" action="{{ route('account.home') }}">
                    @csrf

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <div class="row g-md-4 g-3">
                        <!-- Prénom -->
                        <div class="col-lg-6">
                            <label for="register_prenom" class="small text-muted">Prénom</label>
                            <input type="text" id="register_prenom" name="register_prenom" class="form-control" placeholder="Prénom" value="{{ Auth::user()->prenom }}">
                        </div>

                        <!-- Nom -->
                        <div class="col-lg-6">
                            <label for="register_name" class="small text-muted">Nom</label>
                            <input type="text" id="register_name" name="register_name" class="form-control" placeholder="Nom" value="{{ Auth::user()->name }}">
                        </div>

                        <!-- Sexe -->
                        <div class="col-lg-6">
                            <div class="form-label small text-muted mb-0" for="select_sexe">Sexe</div>

                            <div class="form-check form-check-inline">
                                <label class="form-label form-check-label align-middle">
                                    <input type="radio" name="register_sexe" id="sexe1" class="form-check-input" value="M" {{ Auth::user()->sexe == 'M' ? 'checked' : '' }}> Homme
                                </label>
                            </div>

                            <div class="form-check form-check-inline mt-1">
                                <label class="form-label form-check-label align-middle">
                                    <input type="radio" name="register_sexe" id="sexe2" class="form-check-input" value="F" {{ Auth::user()->sexe == 'F' ? 'checked' : '' }}> Femme
                                </label>
                            </div>
                        </div>

                        <!-- Date de naissance -->
                        <div class="col-lg-6">
                            <label for="register_birthDate" class="small text-muted">Date de naissance</label>
                            <input type="date" name="register_birthDate" id="register_birthDate" class="form-control" placeholder="Date de naissance" value="{{ Auth::user()->bithday }}">
                        </div>

                        <!-- E-mail -->
                        <div class="col-lg-6">
                            <label for="register_email" class="small text-muted">E-mail</label>
                            <input type="email" id="register_email" name="register_email" class="form-control" placeholder="E-mail" value="{{ Auth::user()->email }}">
                        </div>

                        <!-- Téléphone -->
                        <div class="col-lg-6">
                            <label for="register_phone" class="small text-muted">Téléphone</label>
                            <input type="tel" id="register_phone" name="register_phone" class="form-control" placeholder="Téléphone" value="{{ Auth::user()->phone }}">
                        </div>

                        <!-- Adresse -->
                        <div class="col-12">
                            <label for="register_address" class="form-label mb-1">Adresse</label>
                            <textarea name="register_address" id="register_address" class="form-control" placeholder="Adresse">{{ Auth::user()->adresse }}</textarea>
                        </div>

                        <!-- Mot de passe -->
                        <div class="col-lg-6">
                            <label for="register_password" class="small text-muted">Mot de passe</label>
                            <input type="password" id="register_password" name="register_password" class="form-control" placeholder="Mot de passe">
                        </div>

                        <!-- Confirmer mot de passe -->
                        <div class="col-lg-6">
                            <label for="confirm_password" class="small text-muted">Confirmer mot de passe</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirmer mot de passe">
                        </div>

                    </div>
                    <button type="submit" class="btn w-100 my-4">Enregistrer modifications</button>
                </form>
            </div>
        </div>
