<div class="w-100" style="background-color: #F0F0F0; height: 100vh;">
    <div>
        <div class="bg-secondary ps-4 py-1 mb-3">
            <p class="text-white fw-bold mt-3">CORE</p>
        </div>
        <a href="{{ url('admin/dashboard') }}" class="text-decoration-none">
            <div class="d-flex ps-4">
                <img width="20" height="20"
                    src="https://img.icons8.com/ios-filled/20/{{ Request::is('admin/dashboard') ? 'dc3545/' : '000000/' }}dashboard.png"
                    alt="dashboard" />
                <p class="fs-6 ps-2 fw-bold {{ Request::is('admin/dashboard') ? 'text-danger' : 'text-dark' }}">
                    Dashboard</p>
            </div>
        </a>
        <div class="bg-secondary ps-4 py-1 mb-3 mt-1">
            <p class="text-white fw-bold mt-3">INTERFACE</p>
        </div>
        <div class="text-decoration-none">
            <div class="d-flex justify-content-between">
                <div class="d-flex ps-4">
                    <img width="20" height="20"
                        src="https://img.icons8.com/ios-filled/35/{{ Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'dc3545/' : '000000/' }}opened-folder.png"
                        alt="category" />
                    <p
                        class="fs-6 ps-2 fw-bold {{ Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'text-danger' : 'text-dark' }}">
                        Category</p>
                </div>
                <div class="pe-4">
                    <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/sort-down.png"
                        alt="sort-down" id="category-dropdown" style="cursor: pointer;" />
                </div>
            </div>
        </div>
        <div class="ps-5 mb-3 d-none" id="category-sub">
            <div class="mb-2">
                <a href="{{ url('admin/category') }}"
                    class="fs-6 text-decoration-none border-1 border-start border-4 ps-3 {{ Request::is('admin/category') || Request::is('admin/edit-category/*') ? 'border-danger text-danger fw-bold' : 'text-dark border-dark' }}">View
                    Category</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('admin/add-category') }}"
                    class="fs-6 text-decoration-none border-1 border-start border-4 ps-3 {{ Request::is('admin/add-category') ? 'border-danger text-danger fw-bold' : 'text-dark border-dark' }}">Add
                    Category</a>
            </div>
        </div>
        <div class="text-decoration-none mt-2">
            <div class="d-flex justify-content-between">
                <div class="d-flex ps-4">
                    <img width="20" height="20"
                        src="https://img.icons8.com/ios-filled/35/{{ Request::is('admin/posts') || Request::is('admin/add-post') || Request::is('admin/edit-post/*') ? 'dc3545/' : '000000/' }}pen.png"
                        alt="posts" />
                    <p
                        class="fs-6 ps-2 fw-bold {{ Request::is('admin/posts') || Request::is('admin/add-post') || Request::is('admin/edit-post/*') ? 'text-danger' : 'text-dark' }}">
                        Posts</p>
                </div>
                <div class="pe-4">
                    <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/sort-down.png"
                        alt="sort-down" id="post-dropdown" />
                </div>
            </div>
        </div>
        <div class="ps-5 mb-3 d-none" id="post-sub">
            <div class="mb-2">
                <a href="{{ url('admin/posts') }}"
                    class="fs-6 text-decoration-none border-1 border-start border-4 ps-3 {{ Request::is('admin/posts') || Request::is('admin/edit-post/*') ? 'border-danger text-danger fw-bold' : 'text-dark border-dark' }}">View
                    Post</a>
            </div>
            <div class="mb-2">
                <a href="{{ url('admin/add-post') }}"
                    class="fs-6 text-decoration-none border-1 border-start border-4 ps-3 {{ Request::is('admin/add-post') ? 'border-danger text-danger fw-bold' : 'text-dark border-dark' }}">Add
                    Post</a>
            </div>
        </div>
        <a href="{{ url('admin/users') }}" class="text-decoration-none mt-2">
            <div class="d-flex ps-4">
                <img width="20" height="20"
                    src="https://img.icons8.com/ios-glyphs/35/{{ Request::is('admin/users') ? 'dc3545/' : '000000/' }}group.png"
                    alt="users" />
                <p class="fs-6 ps-2 fw-bold {{ Request::is('admin/users') ? 'text-danger' : 'text-dark' }}">
                    Users</p>
            </div>
        </a>
    </div>
    <div class="bg-dark ps-4 py-1 mb-3 mt-1">
        <p class="text-white fw-bold mt-3">Want to logout?</p>
    </div>
    <div class="ps-4">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button type="button"
                class="btn btn-danger">LOGOUT</button></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>

<script>
    categoryOpen = false;
    postOpen = false;

    document.getElementById('category-dropdown').addEventListener('click', () => {
        if (categoryOpen) {
            categoryOpen = false;
            document.getElementById('category-sub').classList.add('d-none');
        } else {
            categoryOpen = true;
            document.getElementById('category-sub').classList.remove('d-none');
        }
    })

    document.getElementById('post-dropdown').addEventListener('click', () => {
        if (postOpen) {
            postOpen = false;
            document.getElementById('post-sub').classList.add('d-none');
        } else {
            postOpen = true;
            document.getElementById('post-sub').classList.remove('d-none');
        }
    })
</script>
