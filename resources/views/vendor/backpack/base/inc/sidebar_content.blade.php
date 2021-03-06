<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->

@if(!auth()->guest())
    @if (auth()->user()->roles->contains('name' , 'Admin') ||
        auth()->user()->roles->contains('name' , 'Data Entry')) 
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('property') }}'><i class='nav-icon fa fa-question'></i> Properties</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('city') }}'><i class='nav-icon fa fa-question'></i> Cities</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon fa fa-question'></i> Users</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('kind') }}'><i class='nav-icon fa fa-question'></i> Kinds</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('role') }}'><i class='nav-icon fa fa-question'></i> Roles</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('detail') }}'><i class='nav-icon fa fa-question'></i> Details</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('permission') }}'><i class='nav-icon fa fa-question'></i> Permissions</a></li>
    @endif
@endif