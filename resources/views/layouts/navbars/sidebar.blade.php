<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">

        <!-- Add image -->
            <img src="/black/img/flycash.png" alt="flycash">

            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('FlyCash Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-pin" ></i>
                    <span class="nav-link-text" >{{ __('Contract') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('userprofile.useredit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>
                        
                    <!-- I will insert $pageSlug -->
                         <li >
                            <a href="{{ route('userdetails.details')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Details') }}</p>
                            </a>
                        </li>
                        <li  @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{route('agent.edit')}}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Agent Profile') }}</p>
                            </a>
                        </li>
                        <li >
                            <a href="{{route('agentdetails.index')}}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Agent Details') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li >
                <a href="{{ route('profile.edit') }}">
                    <i class="tim-icons icon-settings"></i>
                    <p>{{ __('Setting') }}</p>
                </a>
            </li>
            <li>
                <a href="{{route('information.index')}}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('Information') }}</p>
                </a>
            </li>
            <li >
                <a href="#">
                    <i class="tim-icons icon-trash-simple"></i>
                    <p>{{ __('Block List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'transection') class="active " @endif>
                <a href="{{ route('transection.tran') }}">
                    <i class="tim-icons icon-link-72"></i>
                    <p>{{ __('Transection') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
