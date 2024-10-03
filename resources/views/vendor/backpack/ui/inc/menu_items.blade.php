{{-- This file is used for menu items by any Backpack v6 theme --}}
<x-backpack::menu-item title="Dashboard" icon="la la-home nav-icon" :link="backpack_url('dashboard')" />

<x-backpack::menu-item title="Halaman" icon="la la-file-o" :link="backpack_url('page')" />

<x-backpack::menu-item title="Menu" icon="la la-list" :link="backpack_url('menu-item')" />

<x-backpack::menu-item title="Pariwisata" icon="la la-umbrella" :link="backpack_url('pariwisata')" />

<x-backpack::menu-item title="Komoditas" icon="la la-fish" :link="backpack_url('commodities')" />

<x-backpack::menu-item title="Harga Komoditas" icon="la la-tags" :link="backpack_url('commodity-prices')" />

<x-backpack::menu-item title="Event" icon="la la-question" :link="backpack_url('events')" />
