<!-- Sidebar  -->
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="{{ route('home') }}">
            <img src="{{ getSingleMedia(settingSession('get'),'site_logo',null) }}" class="img-fluid site_logo" alt="site_logo">
            <span>{{ config('app.name', 'Metorik') }}</span>
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="line-menu half start"></div>
                <div class="line-menu"></div>
                <div class="line-menu half end"></div>
            </div>
        </div>
    </div>
        <?php
            $auth_user = authSession();
            $url = '';
        ?>
        @php
            $MyNavBar = \Menu::make('MenuList', function ($menu) use ($url){

                $menu->raw('Main', ['class' => 'iq-menu-title'])->prepend('<i class="ri-separator"></i>');

                $menu->add('<span>'.trans('messages.dashboard').'</span>', ['class' => ''])
                    ->prepend('<i class="las la-home"></i>')
                    ->nickname('dashboard')
                    ->link->attr(["class" => "nav-link iq-waves-effect"])
                    ->href('#dashboard');
                    $menu->dashboard->add('<span>'.trans('messages.dashboard_no',['No' => 1]).'</span>', ['route' => 'dashboard-1'] )
                        ->active('dashboard-1/*')
                        ->link->attr(['class' => '']);

                    $menu->dashboard->add('<span>'.trans('messages.dashboard_no',['No' => 2]).'</span>', ['route' => 'dashboard-2'])
                        ->link->attr(['class' => 'nav-link']);

                $menu->raw('Data Pasien', ['class' => 'iq-menu-title'])->prepend('<i class="ri-separator"></i>');

                $menu->add('<span>'.trans('Pasien').'</span>', ['class' => ''])
                    ->prepend('<i class="las la-calendar"></i>')
                    ->nickname('booking')
                    ->link->attr(["class" => "nav-link iq-waves-effect"])
                    ->href('#booking');

                    $menu->booking->add('<span>'.trans('Identitas Pasien').'</span>', ['route' => 'pasien.index'])
                        ->active('pasien/*')
                        ->link->attr(['class' => '']);

                    // $menu->booking->add('<span>'.trans('messages.list_form_title',['form' => trans('messages.service') ]).'</span>', ['route' => 'service.index' ])
                    //     ->active('service/*')
                    //     ->link->attr(['class' => '']);

                    // $menu->booking->add('<span>'.trans('messages.list_form_title',['form' => trans('messages.appointment') ]).'</span>', ['route' => 'appointment.index' ])
                    //     ->active('appointment/*')
                    //     ->link->attr(['class' => '']);


                $menu->add('<span>Forms Wizard</span>', ['class' => ''])
                    ->prepend('<i class="las la-database"></i>')
                    ->nickname('forms_wizard')
                    ->link->attr(["class" => "nav-link iq-waves-effect"])
                    ->href('#forms_wizard');

                    $menu->forms_wizard->add('<span>Simple Wizard</span>', ['route' => 'form-wizard'])
                        ->active('form-wizard/*')
                        ->link->attr(['class' => '']);

                    $menu->forms_wizard->add('<span>Validate Wizard</span>', ['route' => 'validate-wizard'])
                        ->active('validate-wizard/*')
                        ->link->attr(['class' => '']);

                    $menu->forms_wizard->add('<span>Vertical Wizard</span>', ['route' => 'vertical-wizard'])
                        ->active('vertical-wizard/*')
                        ->link->attr(['class' => '']);

                $menu->add('<span>Charts</span>', ['class' => ''])
                    ->prepend('<i class="las la-chart-bar"></i>')
                    ->nickname('charts')
                    ->link->attr(["class" => "nav-link iq-waves-effect"])
                    ->href('#charts');

                    $menu->charts->add('<span>Morris Chart</span>', ['route' => 'chart-morris'])
                        ->active('chart-morris/*')
                        ->link->attr(['class' => '']);

                    $menu->charts->add('<span>High Charts</span>', ['route' => 'chart-high'])
                        ->active('chart-high/*')
                        ->link->attr(['class' => '']);

                    $menu->charts->add('<span>Am Charts</span>', ['route' => 'chart-am'])
                        ->active('chart-am/*')
                        ->link->attr(['class' => '']);

                    $menu->charts->add('<span>Apex Chart</span>', ['route' => 'chart-apex'])
                        ->active('chart-apex/*')
                        ->link->attr(['class' => '']);

                $menu->add('<span>Icons</span>', ['class' => ''])
                    ->prepend('<i class="las la-icons"></i>')
                    ->nickname('icons')
                    ->link->attr(["class" => "nav-link iq-waves-effect"])
                    ->href('#icons');

                    $menu->icons->add('<span>Dripicons</span>', ['route' => 'icon-dripicons'])
                        ->active('icon-dripicons/*')
                        ->link->attr(['class' => '']);

                    $menu->icons->add('<span>Font Awesome</span>', ['route' => 'icon-fontawesome'])
                        ->active('icon-fontawesome/*')
                        ->link->attr(['class' => '']);

                    $menu->icons->add('<span>Line Awesome</span>', ['route' => 'icon-lineawesome'])
                        ->active('icon-lineawesome/*')
                        ->link->attr(['class' => '']);

                    $menu->icons->add('<span>Remixicon</span>', ['route' => 'icon-remixicon'])
                        ->active('icon-remixicon/*')
                        ->link->attr(['class' => '']);

                    $menu->icons->add('<span>Unicons</span>', ['route' => 'icon-unicons'])
                        ->active('icon-unicons/*')
                        ->link->attr(['class' => '']);

                $menu->raw('Pages', ['class' => 'iq-menu-title'])->prepend('<i class="ri-separator"></i>');

                    $menu->add('<span>Maps</span>', ['class' => ''])
                        ->prepend('<i class="las la-map-marker"></i>')
                        ->nickname('maps')
                        ->link->attr(["class" => "nav-link iq-waves-effect"])
                        ->href('#maps');

                        $menu->maps->add('<span>Google Map</span>', ['route' => 'google-map'])
                            ->active('google-map/*')
                            ->link->attr(['class' => '']);

                    $menu->add('<span>Extra Pages</span>', ['class' => ''])
                        ->prepend('<i class="lab la-codepen"></i>')
                        ->nickname('extrapages')
                        ->link->attr(["class" => "nav-link iq-waves-effect"])
                        ->href('#extrapages');

                        $menu->extrapages->add('<span>Timeline</span>', ['route' => 'timeline'])
                            ->active('timeline/*')
                            ->link->attr(['class' => '']);

                        $menu->extrapages->add('<span>Invoice</span>', ['route' => 'invoice'])
                            ->active('invoice/*')
                            ->link->attr(['class' => '']);

                        $menu->extrapages->add('<span>Blank Pages</span>', ['route' => 'blank-pages'])
                            ->active('blank-pages/*')
                            ->link->attr(['class' => '']);

                        $menu->extrapages->add('<span>Error 404</span>', ['route' => 'error-404'])
                            ->active('error-404/*')
                            ->link->attr(['class' => '']);

                        $menu->extrapages->add('<span>Error 500</span>', ['route' => 'error-500'])
                            ->active('error-500/*')
                            ->link->attr(['class' => '']);

                        $menu->extrapages->add('<span>Pricing</span>', ['route' => 'pricing'])
                            ->active('pricing/*')
                            ->link->attr(['class' => '']);

                        $menu->extrapages->add('<span>Pricing 1</span>', ['route' => 'pricing-one'])
                            ->active('pricing-one/*')
                            ->link->attr(['class' => '']);

                        $menu->extrapages->add('<span>Maintenance</span>', ['route' => 'maintenance'])
                            ->active('maintenance/*')
                            ->link->attr(['class' => '']);

                        $menu->extrapages->add('<span>Coming Soon</span>', ['route' => 'comingsoon'])
                            ->active('comingsoon/*')
                            ->link->attr(['class' => '']);

                        $menu->extrapages->add('<span>Faq</span>', ['route' => 'faq'])
                            ->active('faq/*')
                            ->link->attr(['class' => '']);

            })->filter(function ($item) {
                return checkMenuRoleAndPermission($item);
            });
        @endphp


    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                @include(config('laravel-menu.views.bootstrap-items'), ['items' => $MyNavBar->roots()])
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
