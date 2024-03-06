<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Job Pluse</title>

    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('backend/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/toastify.min.css')}}" rel="stylesheet" />

    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css')}}" rel="stylesheet" />

    <link href="{{asset('backend/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
    <script src="{{asset('backend/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('backend/js/toastify-js.js')}}"></script>
    <script src="{{asset('backend/js/axios.min.js')}}"></script>
    <script src="{{asset('backend/js/config.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.bundle.js')}}"></script>

    @vite('resources/css/app.css')
</head>

<body>

<div id="loader" class="LoadingOverlay d-none">
    <div class="Line-Progress">
        <div class="indeterminate"></div>
    </div>
</div>

<nav class="navbar fixed-top px-0 shadow-sm bg-white">
    <div class="container-fluid">

        <span class="navbar-brand flex items-center">
            <span class="icon-nav m-0 h5" onclick="MenuBarClickHandler()">
                <img class="nav-logo-sm mx-2"  src="{{asset('backend/images/menu.svg')}}" alt="logo"/>
            </span>
            <a href="{{route('home')}}">
                <img class="nav-logo mx-2" src="{{asset('backend/images/logo.png')}}" alt="logo"/>
            </a>
        </span>

        <div class="float-right h-auto d-flex">
            <button class="btn btn-primary px-3 py-2" style="margin-right: 5px;">Candidate</button>
            <div class="user-dropdown">
                <img class="icon-nav-img" src="{{asset('backend/images/user.webp')}}" alt=""/>
                <div class="user-dropdown-content ">
                    <div class="mt-4 text-center flex flex-column items-center">
                        <img class="icon-nav-img" src="{{asset('backend/images/user.webp')}}" alt=""/>
                        <h6>User Name</h6>
                        <hr class="user-dropdown-divider  p-0"/>
                    </div>
                    <a href="" class="side-bar-item">
                        <span class="side-bar-item-caption">Profile</span>
                    </a>
                    <a onclick="logout()" href="" class="side-bar-item">
                        <span class="side-bar-item-caption">Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>


<div id="sideNavRef" class="side-nav-open">

    <a href="{{ route('candidate.dashboard') }}" class="side-bar-item">
        <i class="bi bi-graph-up"></i>
        <span class="side-bar-item-caption">Dashboard</span>
    </a>

    <a href="{{ route('candidate.dashboard.job') }}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Jobs</span>
    </a>

    <a href="" class="side-bar-item">
        <i class="bi bi-list"></i>
        <span class="side-bar-item-caption">Account Settings</span>
    </a>

</div>


<div id="contentRef" class="content">
    @yield('content')
</div>



<script>
    function MenuBarClickHandler() {
        let sideNav = document.getElementById('sideNavRef');
        let content = document.getElementById('contentRef');
        if (sideNav.classList.contains("side-nav-open")) {
            sideNav.classList.add("side-nav-close");
            sideNav.classList.remove("side-nav-open");
            content.classList.add("content-expand");
            content.classList.remove("content");
        } else {
            sideNav.classList.remove("side-nav-close");
            sideNav.classList.add("side-nav-open");
            content.classList.remove("content-expand");
            content.classList.add("content");
        }
    }

    async function logout(){
        try{
            let res = await axios.get('/logout',HeaderToken());
            successToast(res.data.message);

            localStorage.clear();
            sessionStorage.clear();
            window.location.href = '/login';
        }
        catch (e){
            errorToast(e.response.data.message);
        }
    }

</script>

</body>
</html>
