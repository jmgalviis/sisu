@extends('layouts.template')

@section('main')
 <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
                        <div class="card card-tile card-xs bg-success bg-gradient text-center">
                            <div class="card-body p-4">
                                <!-- Accepts .invisible: Makes the items. Use this only when you want to have an animation called on it later -->
                                <div class="tile-left">
                                    <i class="batch-icon batch-icon-users  batch-icon-xxl"></i>
                                </div>
                                <div class="tile-right">
                                    <div class="tile-number">{{ $usuarios }}</div>
                                    <div class="tile-description">Total de Usuarios</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
                        <div class="card card-tile card-xs bg-primary bg-gradient text-center">
                            <div class="card-body p-4">
                                <div class="tile-left">
                                    <i class="batch-icon batch-icon-unlocked batch-icon-xxl"></i>
                                </div>
                                <div class="tile-right">
                                    <div class="tile-number">{{ $incidencias_nuevas }}</div>
                                    <div class="tile-description">Tickets Abiertos</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
                        <div class="card card-tile card-xs bg-danger bg-gradient text-center">
                            <div class="card-body p-4">
                                <div class="tile-left">
                                    <i class="batch-icon batch-icon-clock batch-icon-xxl"></i>
                                </div>
                                <div class="tile-right">
                                    <div class="tile-number">{{ $incidencias_en_espera }}</div>
                                    <div class="tile-description">Tickets en espera</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
                        <div class="card card-tile card-xs bg-secondary bg-gradient text-center">
                            <div class="card-body p-4">
                                <div class="tile-left">
                                    <i class="batch-icon batch-icon-locked batch-icon-xxl"></i>
                                </div>
                                <div class="tile-right">
                                    <div class="tile-number">{{ $incidencias_cerradas }}</div>
                                    <div class="tile-description">Tickets Cerrados</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    @include('admin.cards')
@endsection()
