<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="{{route('backend.dashboard')}}" class="simple-text logo-normal">
            {{ __('Solid Water Backend') }}
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="@if ($activePage == 'home') active @endif">
                <a href="{{ route('backend.dashboard') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'users') active @endif">
                <a href="{{ route('backend.users.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('USERS') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'accounts') active @endif">
                <a href="{{ route('accounts') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Account Summery') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'marketings') active @endif">
                <a href="{{ route('account.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Marketings') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'withdraws') active @endif">
                <a href="{{ route('withdraw.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('withdraws') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'products') active @endif">
                <a href="{{ route('product.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Products') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'productCategory') active @endif">
                <a href="{{ route('productCategory.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Product Categories') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'payBills') active @endif">
                <a href="{{ route('payBill.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Billing') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'reloads') active @endif">
                <a href="{{ route('reload.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Reload') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'loans') active @endif">
                <a href="{{ route('loan.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Loan') }}</p>
                </a>
            </li>

            <li class="@if ($activePage == 'customers') active @endif">
                <a href="{{ route('backend.customers.index') }}">
                    <i class="fas fa-user"></i>
                    <p>{{ __('Customers') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
