<div class="row mb-5">
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card card-md">
            <div class="card-header">
                Equipo de Operarios
            </div>
            <div class="card-media-list mCustomScrollbar _mCS_1 mCS-autoHide">
                <div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: 305.004px;" tabindex="0">
                    <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                        @forelse($operarios as $operario)
                        <div class="media clickable" data-qp-link="#">
                            <div class="profile-picture bg-gradient bg-primary has-message float-right d-flex mr-3">
                                <img src="{{asset('archivos/profile-pic.jpg')}}" width="44" height="44" class="mCS_img_loaded">
                            </div>
                            <div class="media-body">
                                <div class="heading mt-1">
                                    {{ $operario->user_name }}
                                </div>
                                <div class="subtext">{{ $operario->role_name }}</div>
                            </div>
                        </div>
                        @empty
                            div.heading <mt-1>No hay Operarios</mt-1>
                        @endforelse
                    </div>
                    <div id="mCSB_1_scrollbar_vertical"
                               class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: block;">
                        <div class="mCSB_draggerContainer">
                            <div id="mCSB_1_dragger_vertical"
                                 class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 158px; max-height: 295px; top: 0px;">
                                <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                            </div>
                            <div class="mCSB_draggerRail"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card card-md">
            <div class="card-header">
                Lista de Tareas
                <p class="task-list-stats">
                    <span class="task-list-completed">5</span> de <span class="task-list-total">12</span> tareas completadas
                </p>
                <div class="progress">
                    <div class="progress-bar progress-bar-sm bg-gradient" role="progressbar"
                         aria-valuenow="41.66666666666667" aria-valuemin="0" aria-valuemax="100" style="width: 41.6667%;">

                    </div>
                </div>
                <div class="header-btn-block" style="top: 31px;">
                    <a href="#" class="btn btn-primary waves-effect waves-light">
                        <i class="batch-icon batch-icon-add"></i>
                    </a>
                </div>
            </div>
            <div class="card-task-list mCustomScrollbar _mCS_4 mCS-autoHide"><div id="mCSB_4"
                 class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 263.004px;">
                    <div id="mCSB_4_container" class="mCSB_container" style="position: relative; top: -218px; left: 0px;" dir="ltr">
                        <ul class="task-list">
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label">
                                        <div class="custom-control-wrap">Mauris rutrum quam at porta feugiat
                                        </div>
                                    </label>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label">
                                        <div class="custom-control-wrap">
                                            <span class="badge badge-danger">Critical</span>Mauris rutrum quam at porta feugiat
                                        </div>
                                    </label>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label">
                                        <div class="custom-control-wrap">Fusce in felis nec exdf</div>
                                    </label>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox active">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <label class="custom-control-label">
                                        <div class="custom-control-wrap">
                                            <span class="badge badge-warning">High Priority</span>Aliquam vel tristique ipsum
                                        </div>
                                    </label>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox active">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <label class="custom-control-label">
                                        <div class="custom-control-wrap">
                                            <span class="badge badge-primary">Optional</span>Aenean vehicula, ligula sit amet varius maximus
                                        </div>
                                    </label>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox active">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <label class="custom-control-label">
                                        <div class="custom-control-wrap">Etiam varius neque sed sagittis fringilla</div>
                                    </label>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label"><div class="custom-control-wrap">Mauris rutrum quam at porta feugiat</div></label>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox active">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <label class="custom-control-label"><div class="custom-control-wrap"><span class="badge badge-info">Low Priority</span>Sed velit augue, tincidunt vitae posuere</div></label>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label"><div class="custom-control-wrap"><span class="badge badge-warning">High Priority</span>Fusce in felis nec exdf</div></label>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label"><div class="custom-control-wrap"><span class="badge badge-info">Low Priority</span>Aliquam vel tristique ipsum</div></label>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label"><div class="custom-control-wrap"><span class="badge badge-info">Low Priority</span> Aenean vehicula, ligula sit amet varius maximus</div></label>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="custom-control custom-checkbox active">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <label class="custom-control-label"><div class="custom-control-wrap">Etiam varius neque sed sagittis fringilla</div></label>
                                </div>
                            </li>
                        </ul>
                    </div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-dark mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 144px; max-height: 253px; top: 119px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
        </div>
    </div>
    <div class="col-xl-5 mb-4">
        <div class="card card-md">
            <div class="card-header">
                Actividades
            </div>
            <div class="card-media-list mCustomScrollbar _mCS_2 mCS-autoHide"><div id="mCSB_2" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 305.004px;"><div id="mCSB_2_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                        <div class="media clickable" data-qp-link="task-list.html">
                            <div class="profile-picture bg-gradient bg-primary has-message float-right d-flex mr-3">
                                <img src="{{asset('archivos/profile-pic.jpg')}}" width="44" height="44" class="mCS_img_loaded">
                            </div>
                            <div class="media-body">
                                <div class="heading mt-1">
                                    You were assigned a new task.
                                </div>
                                <div class="subtext">by Johanna Quinn</div>
                            </div>
                        </div>

                    </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-dark mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 158px; max-height: 295px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
        </div>
    </div>
</div>
