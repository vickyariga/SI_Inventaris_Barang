<div class="sidebar" data-color="dark" data-active-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('assets/img/logo-small.png') }}">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal">
            ADMIN
            <!-- <div class="logo-image-big">
              <img src="../assets/img/logo-big.png">
            </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="{{ route('home') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>DASHBOARD</p>
                </a>
            </li>
            <li class="active">
                <a href="{{ route('opd.index') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>OPD</p>
                </a>
            </li>
            <li>
                <!--  <a href="user">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Users</p>
                  </a>
                </li>
                <li>
                  <a href="laporan">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>LAPORAN</p>
                  </a>
                </li> -->
        </ul>
    </div>
</div>
