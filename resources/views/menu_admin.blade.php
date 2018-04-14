<div id="sidebar"  class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu">
        <li class="active">
            <a class="" href="index.html">
                <i class="glyphicon glyphicon-home"></i>
                <span>صفحه اصلی</span>
            </a>
        </li>
        <li class="sub-menu">
            <a href="{{ route('projects') }}" class="">
                <i class="glyphicon glyphicon-list-alt"></i>
                <span>پروژه ها</span>
                <span class="arrow"></span>
            </a>
            <a href="{{ route('register_projects') }}" class="">
                <i class="glyphicon glyphicon-list-alt"></i>
                <span>تعریف پروژه ها</span>
                <span class="arrow"></span>
            </a>

            <ul class="sub">
                <li><a class="" href="general.html">عمومی</a></li>
                <li><a class="" href="buttons.html">دکمه ها</a></li>
                <li><a class="" href="widget.html">ویجت ها</a></li>
                <li><a class="" href="slider.html">اسلایدر ها</a></li>
                <li><a class="" href="font_awesome.html">فونت های شکل دار</a></li>
            </ul>

        </li>
        <li class="sub-menu">
            <a class="" href="{{ route('Manage_users') }}">
                <i class="glyphicon glyphicon-user"></i>
                <span>مدیریت کاربران</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub">
                <li><a class="" href="grids.html">گرید</a></li>
                <li><a class="" href="calendar.html">تقویم</a></li>
                <li><a class="" href="charts.html">چارت</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;" class="">
                <i class="glyphicon glyphicon-comment"></i>
                <span>گفتگوها</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub">
                <li><a class="" href="form_component.html">گفتگوی پروژه</a></li>
                <li><a class="" href="form_wizard.html">فرم Wizard</a></li>
                <li><a class="" href="form_validation.html">ارزیابی فرم</a></li>
            </ul>
        </li>
        <li dir="rtl">
            <a  class="" href="inbox.html">
                <i class="glyphicon glyphicon-calendar"></i>
                <span class="">تقویم کاری </span>
                <span class="label label-danger pull-left mail-info">2</span>
            </a>
        </li>
        <li>
            <a class="" href="{{ route('notes') }}">
                <i class="glyphicon glyphicon-pencil"></i>
                <span>یادآوری ها</span>
            </a>
        </li>
        <li>
            <a class="" href="{{ route('edit_info') }}">
                <i class="glyphicon glyphicon-edit"></i>
                <span>ویرایش مشخصات</span>
            </a>
        </li>
        <li>
            <a class="" href="{{ route('change_pass') }}">
                <i class="glyphicon glyphicon-edit"></i>
                <span>تغییر رمز عبور</span>
            </a>
        </li>
        <li>
            <a class="" href="{{ route('logout') }}">
                <i class="glyphicon glyphicon-log-out"></i>
                <span>خروج از سایت</span>
            </a>
        </li>
    </ul>
    <!-- sidebar menu end-->
</div>