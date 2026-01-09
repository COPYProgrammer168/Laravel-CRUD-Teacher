<div class="sidebar border-end vh-100">
    <div class="sidebar-header border-bottom p-3">
        <div class="sidebar-brand fw-bold fs-5">Customer Appointment System</div>
    </div>
    <ul class="sidebar-nav list-unstyled p-0">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('customers.*') ? 'active' : '' }}"
                href="{{ route('customers.index') }}">
                <i class="bi bi-person-circle"></i> Customer
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('appointments.*') ? 'active' : '' }}"
                href="{{ route('appointments.index') }}">
                <i class="bi bi-calendar-event"></i> Appointment
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}"
                href="{{ route('products.index') }}">
                <i class="bi bi-calendar-event"></i> Products
            </a>
        </li>
    </ul>
</div>

<style>
    .sidebar {
        background-color: #1a1a1a;
        width: 280px;
    }

    .sidebar-header {
        background: linear-gradient(135deg, #d80681 0%, #b60568 100%);
        color: #1a1a1a;
    }

    .sidebar-brand {
        font-weight: 600;
        font-size: 18px;
    }

    .sidebar-nav .nav-link {
        color: #858585;
        padding: 12px 16px;
        margin: 4px 8px;
        border-radius: 8px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sidebar-nav .nav-link:hover {
        background-color: #e9ecef;
        color: #d80681;
    }

    .sidebar-nav .nav-link.active {
        background-color: #d80681;
        color: #fff;
        font-weight: 500;
        box-shadow: 0 2px 8px rgba(216, 6, 129, 0.3);
    }
</style>
