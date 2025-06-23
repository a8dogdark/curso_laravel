<x-front-layout>
<div class="container-fluid navcss">
    <div class="row">
        <div class="col-12 col-md-4 m-auto">
            <div class="card text-center bg-transparent p-4">
                <div class="card-body">
                    <form action="">
                        <div>
                            <img src="{{ url('') }}/storage/images/user.png" width="100px">
                        </div>

                        <div class="fs-2 mt-2">LOGIN</div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                            <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                       
                        <div class="d-grid gap-2">
                            <button class="btn btn-dark" type="button">REGISTRAR</button>
                        </div>

                        <div class="mt-3 fs-5">¿No tienes una cuenta? <a href="{{ route('register') }}" class="link-light">Registrar</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-front-layout>