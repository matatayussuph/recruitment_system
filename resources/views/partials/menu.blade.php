<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md" style="background-color: black">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    {{-- <div class="mr-3">
                        <a href=""><img src="{{ Auth::user()->photo }}" width="38"
                                height="38" class="rounded-circle" alt="photo"></a>
                    </div> --}}

                    <div class="media-body">
                        <div class="media-title font-weight-semibold"></div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-user font-size-sm"></i>
                            &nbsp;
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item">
                    <a href="" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
                        <i class="icon-home4"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('job.management')}}"
                        class="nav-link {{ in_array(Route::currentRouteName(), ['my_account']) ? 'active' : '' }}"><i
                            class="icon-user"></i> <span>Jobs</span></a>
                </li>
              

                {{-- Manage Account --}}
                <li class="nav-item">
                    <a href=""
                        class="nav-link {{ in_array(Route::currentRouteName(), ['my_account']) ? 'active' : '' }}"><i
                            class="icon-user"></i> <span>My Account</span></a>
                </li>
                <li class="nav-item">
                    <a href=""
                        class="nav-link {{ in_array(Route::currentRouteName(), ['settings']) ? 'active' : '' }}"><i
                            class="icon-pencil"></i> <span>Settings</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
