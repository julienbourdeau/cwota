<li>
    {!! HTML::sidebar_item('Dashboard', 'DashboardController@index', 'dashboard', true, true) !!}
</li>
<li>
    {!! HTML::sidebar_item('Customers', 'customer') !!}
    <b class="arrow"></b>

    <ul class="submenu">
        <li>{!! HTML::sidebar_item('Customers sub', 'customer') !!}</li>
    </ul>
</li>