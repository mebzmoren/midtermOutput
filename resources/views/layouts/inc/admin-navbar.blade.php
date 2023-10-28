<nav class="navbar py-2 px-4 bg-danger">
    <div class="d-flex w-100 justify-content-between">
        <div>
            <a class="navbar-brand d-flex" href="/home">
                <img class="logo-img h-100 align-self-center" src="{{ asset('assets/images/logo.png') }}" alt="logo"
                    srcset="">
                <p class="logo fs-3 fw-bold ps-2 pt-3 text-light">TheSillimanCon</p>
            </a>
        </div>
        <div>
            <div class="mt-3">
                <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/ffffff/menu-squared-2.png"
                    alt="menu-squared-2" style="cursor: pointer" id="menu-icon" />
            </div>
        </div>
    </div>
</nav>

<script>
    isOpen = true;
    document.getElementById('menu-icon').addEventListener('click', () => {
        if (isOpen) {
            isOpen = false;
            document.getElementById('admin-sidebar').classList.remove('col-2-nav');
            document.getElementById('admin-sidebar').classList.add('d-none');
            document.getElementById('admin-content').classList.add('col-10-nav');
            document.getElementById('admin-content').classList.add('col-10-nav-hide')
            document.getElementById('admin-content').classList.add('col-10-nav-full')
        } else {
            isOpen = true;
            document.getElementById('admin-sidebar').classList.add('col-2-nav');
            document.getElementById('admin-sidebar').classList.remove('d-none');
            document.getElementById('admin-content').classList.remove('col-10-nav-hide')
            document.getElementById('admin-content').classList.remove('col-10-nav-full')

        }
    });
</script>
