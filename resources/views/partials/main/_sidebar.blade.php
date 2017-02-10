<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        
            <p class="centered"><a href="profile.html"><img src="{!! URL::asset('assets/img/ui-sam.jpg') !!}" class="img-circle" width="60"></a></p>
            <h5 class="centered">{{ Session::get('user')->username }}</h5>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>Profiel</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>