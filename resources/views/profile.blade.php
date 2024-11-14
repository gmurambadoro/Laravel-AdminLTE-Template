<x-layouts.app>
    <x-slot:title>
        Profile
    </x-slot:title>

    <div class="row">
        <div class="col-md-7">
            <div class="box box-default">
                <div class="box-header">
                    <h3 class="box-title"><i
                            class="fa fa-user-circle"></i> {{ Auth::user()->name ?? Auth::user()->email }}</h3>
                </div>
                <div class="box-body">
                    <br/>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1" data-toggle="tab" aria-expanded="false">Personal information</a>
                            </li>
                            <li>
                                <a href="#tab_2" data-toggle="tab" aria-expanded="true">
                                    Change password
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <livewire:user-profile-update/>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                                <livewire:user-change-password/>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5"></div>
    </div>
</x-layouts.app>
