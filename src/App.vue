<template>
    <div class="row sidebar">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a href="#" class="navbar-brand text-center">
            <img src="/caleb.png" alt="logo" height="50" class="d-inline-block mx-auto rounded-pill">
            <span class="name text-center">
              Caleb Fonyuy-Asheri
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon btn btn-light"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
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
          </div>
      </div>
      </nav>
    </div>
    <div class="col-sm-12 content">
      <div class="container-fluid mt-5">
        <RouterView />
      </div>
    </div>
</template>

<style scoped>
</style>
