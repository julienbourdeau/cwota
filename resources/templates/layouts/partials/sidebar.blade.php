<li {!! HTML::sidebar_class('dashboard') !!} >
    {!! HTML::sidebar_item('Dashboard', 'DashboardController@index', 'dashboard', true) !!}
</li>

<li {!! HTML::sidebar_class('customer') !!} >
    {!! HTML::sidebar_item('Customers', 'customer.index', 'user', true, true) !!}
    <b class="arrow"></b>

    <ul class="submenu">
        <li>{!! HTML::sidebar_item('Customers sub', 'customer.index') !!}</li>
    </ul>
</li>