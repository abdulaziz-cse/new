<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin') }}">
                        Dashboard
                    </a>
                </li>
            </ul>

            <br>
            <ul class="nav" role="tablist">
                    <li role="presentation">
                        <a href="{{ url('/admin/posts') }}">
                            Permission
                        </a>
                    </li>
                </ul>
                <br>

                <ul class="nav" role="tablist">
                        <li role="presentation">
                            <a href="{{ url('/admin/role') }}">
                                Dashboard
                            </a>
                        </li>
                    </ul>
        </div>
    </div>
</div>
