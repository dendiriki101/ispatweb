<style>
    .bordertransform{
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        @can('qualitycontrol')
            <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}} "aria-current="page" href="/admin/certificate">
              <span data-feather="home" class="align-text-bottom"></span>
              Certificate
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}} "aria-current="page" href="/admin/grade">
              <span data-feather="home" class="align-text-bottom"></span>
              Grade
            </a>
          </li>
        @endcan


        <li class="nav-item">
          <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/posts">
            <span data-feather="file-text" class="align-text-bottom"></span>
            My Post
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/english">
              <span data-feather="file-text" class="align-text-bottom"></span>
              My Post In English
            </a>
          </li>
          @can('admin')
           <li class="nav-item">
            <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/customer">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Customer
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/number">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Number Call
            </a>
          </li>
          @endcan

          @can('int')
          <li class="nav-item">
            <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/news">
              <span data-feather="file-text" class="align-text-bottom"></span>
              News
            </a>
          </li>
          @endcan
          @can('she')
          <li class="nav-item">
            <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/she">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Safety Performance Board
            </a>
          </li>
          @endcan
          @can('personalia')
          <li class="nav-item">
            <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/careers">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Career
            </a>
          </li>
          @endcan

          @can('store')
          <li class="nav-item">
            <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/lelang">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Lelang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/buyer">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Buyer
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/email">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Email
            </a>
          </li>
          @endcan

          <li class="nav-item">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link border-0 bordertransform">
                  <span data-feather = "log-out"  class="align-text-bottom border-0">Logout</span>
                </button>
              </form>
          </li>
      </ul>
    </div>
  </nav>
