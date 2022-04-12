@extends('layout')
@section('body')
    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 30rem;">
        <div class="card-body">
            <h4>Registrazione</h4>
            <form>
                <form method="POST" action="{{route('register.store')}}" class="row g-3">
                    <div class="col-md-6">
                        <label for="validationServer01" class="form-label">Nominativo</label>
                        <input type="text"
                            class="form-control @error('name') is-invalid @enderror "
                            id="validationServer01" name="name" required
                        >
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="validationServer02" class="form-label">Email</label>
                        <input type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="validationServer02" name="email" required
                        >
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="validationServerUsername" class="form-label">Codice Fiscale</label>
                        <div class="input-group has-validation">
                            <input type="text" name="codicefiscale"
                                class="form-control @error('codicefiscale') is-invalid @enderror"
                                pattern="^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$"
                                aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required
                            >
                            @error('codicefiscale')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationServerUsername" class="form-label">Cellulare</label>
                        <div class="input-group has-validation">
                            <input type="tel" name="cellulare"
                                class="form-control @error('phone') is-invalid @enderror"
                                pattern="[0-9]{10}"
                                aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required
                            >
                            @error('cellulare')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationServerUsername" class="form-label">Telefono</label>
                        <div class="input-group has-validation">
                            <input type="tel" name="telefono"
                                class="form-control @error('telefono') is-invalid @enderror"
                                pattern="[0-9]{10}"
                                aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required
                            >
                            @error('telefono')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="col-4">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
        </div>
    </div>
@endsection
