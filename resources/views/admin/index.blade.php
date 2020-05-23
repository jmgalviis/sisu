@extends('layouts.template')

@section('main')
 <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
                        <div class="card card-tile card-xs bg-primary bg-gradient text-center">
                            <div class="card-body p-4">
                                <!-- Accepts .invisible: Makes the items. Use this only when you want to have an animation called on it later -->
                                <div class="tile-left">
                                    <i class="batch-icon batch-icon-user-alt batch-icon-xxl"></i>
                                </div>
                                <div class="tile-right">
                                    <div class="tile-number">1,359</div>
                                    <div class="tile-description">Customers Online</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
                        <div class="card card-tile card-xs bg-secondary bg-gradient text-center">
                            <div class="card-body p-4">
                                <div class="tile-left">
                                    <i class="batch-icon batch-icon-tag-alt-2 batch-icon-xxl"></i>
                                </div>
                                <div class="tile-right">
                                    <div class="tile-number">$7,349.90</div>
                                    <div class="tile-description">Today's Sales</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
                        <div class="card card-tile card-xs bg-primary bg-gradient text-center">
                            <div class="card-body p-4">
                                <div class="tile-left">
                                    <i class="batch-icon batch-icon-list batch-icon-xxl"></i>
                                </div>
                                <div class="tile-right">
                                    <div class="tile-number">26</div>
                                    <div class="tile-description">Open Tickets</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
                        <div class="card card-tile card-xs bg-secondary bg-gradient text-center">
                            <div class="card-body p-4">
                                <div class="tile-left">
                                    <i class="batch-icon batch-icon-star batch-icon-xxl"></i>
                                </div>
                                <div class="tile-right">
                                    <div class="tile-number">476</div>
                                    <div class="tile-description">New Orders</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection()