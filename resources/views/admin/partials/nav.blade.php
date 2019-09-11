<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">مدیریت فروشگاه فایل</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">کاربران <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('admin.users.list') }}">لیست کاربران</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('admin.users.create') }}">ثبت کاربر جدید</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">طرح های اشتراکی <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('admin.plans.list') }}">لیست طرح ها</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('admin.plans.create') }}">ثبت طرح جدید</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">فایل ها <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('admin.files.list') }}">لیست فایل ها</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('admin.files.create') }}">ثبت فایل جدید</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>