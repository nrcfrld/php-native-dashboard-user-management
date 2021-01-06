<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Bambang E-Sport</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">EF</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li><a class="nav-link" href="../"><i class="fas fa-fire"></i> <span>Home</span></a></li>
      <li class="menu-header">Main</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Users</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../users/index.php">List</a></li>
          <?php if(checkRole() == 'admin') : ?>
          <li><a class="nav-link" href="../users/create.php">Tambah Data</a></li>
          <?php endif; ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Dosen</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../dosen/index.php">List</a></li>
          <?php if(checkRole() == 'admin') : ?>
          <li><a class="nav-link" href="../dosen/create.php">Tambah Data</a></li>
          <?php endif; ?>
        </ul>
      </li>
    </ul>
  </aside>
</div>