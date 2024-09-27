{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon la la-file-o'></i> <span>Pages</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('menu-item') }}'><i class='nav-icon la la-list'></i> <span>Menu</span></a></li>

<x-backpack::menu-item title="Pariwisata" icon="la la-umbrella" :link="backpack_url('pariwisata')" />
