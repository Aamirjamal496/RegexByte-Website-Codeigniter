<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../public/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./public/logo.png">
    <title>
        Slider Page
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="./public/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./public/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="./public/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
    <?php include 'commons/aside.php'; ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Slider</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control" name="name" id="searchInput"
                                onkeyup="searchProjects()">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" data-toggle="modal"
                                data-target=".Model-slider">Add Slider</a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <!-- Model For Adding slider -->
                        <div class="modal fade Model-slider" tabindex="-1" role="dialog"
                            aria-labelledby="mySmallModalLabel">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="card card-plain">
                                        <div class="card-header">
                                            <h4 class="font-weight-bolder">Add Slider</h4>
                                            <p class="mb-0">Fillout the form to add Category</p>
                                        </div>
                                        <div class="card-body">
                                            <form role="form" action="<?= base_url('saveSlider'); ?>" method="post"
                                                enctype="multipart/form-data">
                                                <div class="input-group input-group-outline mb-3">
                                                    <input type="file" name="img" placeholder="Profile"
                                                        class="form-control">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Title</label>
                                                    <input type="text" name="title" class="form-control">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <select name="status" class="form-control">
                                                        <option value="default">Select Status</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">In-Active</option>
                                                    </select>
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <textarea class="form-control" name="description"
                                                        placeholder="Description"></textarea>
                                                </div>
                                                <div class="text-center">
                                                    <input type="submit"
                                                        class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"></input>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ModelEnd -->
                        <li class="nav-item d-flex align-items-center">
                            <a href="<?= base_url('logout'); ?>" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Slider table</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr class="bg-gradient-secondary text-white">
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7">
                                        Profile</th>
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7">
                                        ID</th>
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7 ps-2">
                                        Title</th>
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7 ps-2">
                                        Status</th>
                                    <th
                                        class="text-uppercase text-white text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        DEscription</th>
                                    <th
                                        class="text-uppercase text-white text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($slider as $slide): ?>
                                    <tr class="slider-row">
                                        <td>

                                            <img src="<?php echo base_url('uploads/') . $slide['profile']; ?>"
                                                class="avatar avatar-sm rounded-circle mx-2 " alt="profile">
                                        </td>
                                        <td>
                                            <h6 class="mb-0 text-sm mx-3"><?= $slide['id']; ?></h6>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0" class="slider-title">
                                                <?= $slide['title']; ?>
                                            </p>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold"><?= $slide['status'] ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span
                                                    class="me-2 text-xs font-weight-bold"><?= $slide['description']; ?></span>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <button type="button"
                                                class="btn btn-dark px-3 py-2 bg-gradient-secondary mt-2 mb-0 edit-btn"
                                                data-toggle="modal"
                                                data-target="#editSlide<?= $slide['id']; ?>">Edit</button>
                                            <!-- <a href="javascript:;" class="btn btn-secondary text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" data-toggle="modal" data-target=".EditModel">Edit </a> -->

                                            <!-- Model For Editing slider -->
                                            <div class="modal fade editSlide" id="editSlide<?= $slide['id']; ?>"
                                                tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-md" role="document">
                                                    <div class="modal-content">
                                                        <div class="card card-plain">
                                                            <div class="card-header">
                                                                <h4 class="font-weight-bolder">Edit Slider</h4>
                                                                <p class="mb-0">Fill out the form to Edit Slide</p>
                                                            </div>
                                                            <div class="card-body">
                                                                <form role="form"
                                                                    action="<?= base_url('UpdateSlider/') . $slide['id']; ?>"
                                                                    method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id" id="edit-id"
                                                                        value="<?= $slide['id']; ?>">
                                                                    <div class="input-group input-group-outline mb-3">
                                                                        <input type="file" name="img" id="edit-img"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="input-group input-group-outline mb-3">
                                                                        <input type="text" value='<?= $slide['title']; ?>'
                                                                            name="title" id="edit-name" class="form-control"
                                                                            placeholder="title">
                                                                    </div>
                                                                    <div class="input-group input-group-outline mb-3">
                                                                        <select name="status" id="edit-status"
                                                                            class="form-control">
                                                                            <option value="1" <?= $slide['status'] == 1 ? 'selected' : ''; ?>>Active</option>
                                                                            <option value="0" <?= $slide['status'] == 0 ? 'selected' : ''; ?>>In-Active</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-group input-group-outline mb-3">
                                                                        <textarea class="form-control" name="description"
                                                                            id="edit-description"
                                                                            placeholder="Description"><?= $slide['description']; ?></textarea>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <input type="submit" value="Update"
                                                                            class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"></input>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- ModelEnd -->
                                            <a type="button" href="<?= base_url('deleteSlide/' . $slide['id']); ?>"
                                                onclick="return confirm('Are You Sure You want to delete');"
                                                class="btn btn-primary px-3 py-2 mt-2 mb-0">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2 ">
            <i class="spinner-border border-0 material-icons py-2 ">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Dashboard UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                        onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="./public/assets/js/core/popper.min.js"></script>
    <script src="./public/assets/js/core/bootstrap.min.js"></script>
    <script src="./public/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./public/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./public/assets/js/material-dashboard.min.js?v=3.1.0"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <!-- [0] -->

    <!-- For Search -->
    <script>
        function searchProjects() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const cards = document.querySelectorAll('.slider-row');

            cards.forEach(card => {
                const title = card.querySelector('.slider-title').innerText.toLowerCase();
                card.style.display = title.includes(input) ? '' : 'none';
            });
        }

    </script>



</body>

</html>