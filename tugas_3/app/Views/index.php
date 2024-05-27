

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Master</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">                        
                        <a href="<?php echo base_url('home/berita') ?>" class="nav-item nav-link">Berita</a>
                    </div>                   
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Service</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo base_url('home') ?>">Home</a></li>                                    
                                    <li class="breadcrumb-item text-white active" aria-current="page">Berita</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php

                            $arr = array();

                           $no=1;
                           foreach ($data as $d) {
                            ?>                   
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $d ?></td>
                                </tr>
                            <?php

                            $arr = $d;
                        }
                        ?>
                        </tbody>
                </table>


                 <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no=1;
                           foreach ($data2 as $dd) {
                            ?>                   
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $dd ?></td>
                                </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                </table>


                



                
                  
                

            </div>
        </div>
        <!-- Service End -->



