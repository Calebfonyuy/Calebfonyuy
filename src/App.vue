<template>
  <div class="container-fluid row h-100 w-100">
    <div class="col-sm-12 col-md-2 h-100 sidebar">
      <nav class="navbar sticky-top">
        <div class="container-fluid text-wrap">
          <a href="#" class="navbar-brand text-wrap">
            <img src="/caleb.png" alt="logo" height="150" class="d-inline-block align-text-top image-fluid w-100 rounded-pill">
            <span class="name">
              Caleb Fonyuy-Asheri
            </span>
          </a>
        </div>
        <ul class="navbar-nav nav justify-content-start text-center text-wrap">
          <li class="nav-item">
            <span class="nav-link">
              <RouterLink to="/">Home</RouterLink>
            </span>
          </li>
          <li class="nav-item">
            <span class="nav-link">
              <RouterLink to="/education">Education</RouterLink>
            </span>
          </li>
          <li class="nav-item">
            <span class="nav-link">
              <RouterLink to="/professional-experience">Professional Experience</RouterLink>
            </span>
          </li>
          <li class="nav-item">
            <span class="nav-link">
              <RouterLink to="/technical-skills">Technical Skills</RouterLink>
            </span>
          </li>
          <li class="nav-item">
            <span class="nav-link">
              <RouterLink to="/projects">Projects</RouterLink>
            </span>
          </li>
          <li class="nav-item">
            <span class="nav-link">
              <RouterLink to="/contact">Contact</RouterLink>
            </span>
          </li>
          <li class="nav-item">
            <span class="nav-link">
              <RouterLink to="/teaching">Teaching</RouterLink>
            </span>
          </li>
          <li class="nav-item">
            <span class="nav-link">
              <RouterLink to="/publications">Publications</RouterLink>
            </span>
          </li>
        </ul>
      </nav>
    </div>
    <div class="col-sm-12 col-md-9 content">
      <div class="container-fluid mt-5">
        <RouterView />
      </div>
    </div>
  </div>
</template>

<style scoped>
</style>
