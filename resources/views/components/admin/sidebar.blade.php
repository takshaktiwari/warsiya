<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                {{-- adash-dashboard --}}
                <li class="menu-title">Admin Main</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                {{-- end adash-dashboard --}}

                {{-- @canany(['roles_access', 'permissions_access', 'users_access'])
                    <li class="menu-title">Manage Users</li>
                    @can('roles_access')
                        <li>
                            <a href="{{ route('admin.roles.index') }}" class="waves-effect">
                                <i class="fas fa-users-cog"></i>
                                <span>All Roles</span>
                            </a>
                        </li>
                    @endcan

                    @can('permissions_access')
                        <li>
                            <a href="{{ route('admin.permissions.index') }}" class="waves-effect">
                                <i class="fas fa-user-shield"></i>
                                <span>All Permissions</span>
                            </a>
                        </li>
                    @endcan

                    @can('users_access')
                        <li>
                            <a href="{{ route('admin.users.index') }}" class="waves-effect">
                                <i class="fas fa-users"></i>
                                <span>All Users</span>
                            </a>
                        </li>
                    @endcan
                @endcanany --}}

                 <li>
                    <a href="{{ route('admin.boards.index') }}" class="waves-effect">
                        <i class="fas fa-home"></i>
                        <span>Boards</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.subjects.index') }}" class="waves-effect">
                        <i class="fas fa-book"></i>
                        <span>Subjects</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.grades.index') }}" class="waves-effect">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Grades</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.materials.index') }}" class="waves-effect">
                        <i class="fas fa-home"></i>
                        <span>Materials</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.galleries.index') }}" class="waves-effect">
                        <i class="fas fa-images"></i>
                        <span>Galleries</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.galleries-items.index') }}" class="waves-effect">
                        <i class="fas fa-images"></i>
                        <span>Gallery Items</span>
                    </a>
                </li>

                <li class="menu-title">Manage Account</li>
                <li>
                    <a href="{{ route('admin.profile.edit') }}" class=" waves-effect">
                        <i class="fas fa-user"></i>
                        <span>Update Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.password') }}" class=" waves-effect">
                        <i class="fas fa-key"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class=" waves-effect"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off"></i>
                        <span>Logout</span>
                    </a>
                </li>

			</ul>
        </div>
    </div>
</div>
