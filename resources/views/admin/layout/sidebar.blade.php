<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/abouts') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.about.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/skills') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.skill.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/pendidikans') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.pendidikan.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/wawasans') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.wawasan.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/portfolios') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.portfolio.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
